<?php
namespace Admin\Model;
use Think\Model\RelationModel;
#注意：TablenameModel.class.php的文件名不要用驼峰法写表名，否则在编译时会被下划线分隔
class EmployeesModel extends RelationModel{
    protected $_link=[
        'departments'=>[
            'mapping_type'=>self::BELONGS_TO,
            'foreign_key'=>'departmentid'
        ],
        'profiles'=>[
            'mapping_type'=>self::HAS_ONE,
            'foreign_key'=>'employeeid'
        ]
    ];
}