<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct()
    {
        parent::__construct();
        /*header("Access-Control-Allow-Origin:*");#ajax访问用
        header("Access-Control-Allow-Methods:GET,POST");#ajax访问用*/
        $this->table1=M('table1');
    }
    public function index(){
        $this->display();
    }
}