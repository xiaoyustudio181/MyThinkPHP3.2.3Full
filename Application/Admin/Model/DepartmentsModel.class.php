<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class DepartmentsModel extends RelationModel{
    protected $_link=[
        'employees'=>[
            'mapping_type'=>self::HAS_MANY,
            'foreign_key'=>'departmentid'
        ]
    ];
}