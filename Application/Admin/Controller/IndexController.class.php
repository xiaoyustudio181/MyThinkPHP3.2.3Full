<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\Model2;
class IndexController extends Controller {
    #private $persons;
    #private $M;
    public function __construct()
    {
        parent::__construct();
        /*header("Access-Control-Allow-Origin:*");#ajax访问用
        header("Access-Control-Allow-Methods:GET,POST");#ajax访问用*/
        $this->persons=M('persons');
        $this->M=new Model2();
    }
    public function index(){
        #$id=$this->persons->getlastInsID();#after insert
        $this->assign([
            'persons'=>
            #$this->persons->select()
                $this->M->select1()
        ]);
        $this->display();
    }
    #==========================================================
	function successInfo($msg,$data){
        return $this->buildInfo('Success!',$msg,$data);
    }
    function errorInfo($msg){
        return $this->buildInfo('Error!',$msg,'');
    }
    function buildInfo($result,$messsge,$data){
        $arr=['result'=>$result, 'message'=>$messsge, 'data'=>$data];
        return json_encode($arr);
    }
}