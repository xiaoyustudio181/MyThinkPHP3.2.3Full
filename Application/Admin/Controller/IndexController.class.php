<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\Model2;
class IndexController extends Controller {
    #private $department;
    #private $M;
    public function __construct()
    {
        parent::__construct();
        $this->departments=M('departments');
        $this->M=new Model2();
    }
    public function index(){
        $this->redirect('Admin/Index/testpage');
        $this->display();
    }
    public function testpage(){
        #$id=$this->departments->getlastInsID();#after insert
        echo '测试页面<br />';
        //普通查询测试
        $test=$this->departments->select();
        $test=$this->M->select_();
        #$this->M->execute_();

        //模型关联查询测试
        $d_departments=D('departments');
        #$test=$d_departments->relation(true)->select();

        $d_employees=D('employees');
        #$test=$d_employees->relation(true)->select();

        dump($test);

        //CURL调用测试
        $url=U('Admin/Index/testcurl');
        $result=curl($url);
        $result=json_decode($result);
        dump($result);

        $this->assign([
            'departments'=>[]
        ]);
    }
    public function testajax(){
        $this->display();
    }
    public function testcurl(){
        echo successInfo('返回的数据',['val'=>135]);
    }
    public function ajax_test(){
        if(I('post.name')){
            $this->departments->add(['name'=>I('post.name')]);
            echo successInfo('新增部门成功。','');
        }else{
            if(I('get.id')){
                $department=$this->departments->where(['id'=>I('get.id')])->select()[0];
                echo successInfo('指定部门的数据。',$department);
            }else{
                $departments=$this->departments->select();
                echo successInfo('所有部门的数据。',$departments);
            }
        }
    }
}