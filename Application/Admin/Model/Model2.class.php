<?php
namespace Admin\Model;
use Think\Model;
class Model2 extends Model
{
    private $M;
    public function __construct()
    {
        $this->M = new Model();
        $this->persons=M('persons');
    }
    public function select1(){
        #return $this->M->query('select * from persons;');
        return $this->persons->select();
    }
    public function execute1(){
        $this->M->execute('update persons set name="uchiha sasuke" where id=2;');
    }
}