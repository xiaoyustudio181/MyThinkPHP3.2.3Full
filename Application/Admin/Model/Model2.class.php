<?php
namespace Admin\Model;
use Think\Model;
class Model2 extends Model
{
    private $M;
    public function __construct()
    {
        $this->M = new Model();
        $this->departments=M('departments');
    }
    public function select_(){
        #return $this->M->query('select * from `departments`;');
        return $this->departments->select();
    }
    public function execute_(){
        #$this->M->execute('update `departments` set `name`="部门二" where `id`=2;');
        $this->departments->where(['id'=>2])->save(['name'=>'部门二-1']);
    }
}