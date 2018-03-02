<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
	function successInfo($msg,$data){
        return $this->buildJson('success',$msg,$data);
    }
    function errorInfo($msg){
        return $this->buildJson('error',$msg,'');
    }
    function buildInfo($result,$messsge,$data){
        $arr=['result'=>$result, 'message'=>$messsge, 'data'=>$data];
        return json_encode($arr);
    }
}