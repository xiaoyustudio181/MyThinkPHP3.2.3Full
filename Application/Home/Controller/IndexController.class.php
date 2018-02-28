<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\Model2;
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
}