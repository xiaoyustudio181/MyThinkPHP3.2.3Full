create database `tp3_test` default character set utf8 collate utf8_general_ci;
#drop database `tp3_test`;
use `tp3_test`;
#mysqldump -uroot tp3_test >D:\tp3_test.bak -p  #备份
#mysql -uroot tp3_test < D:\tp3_test.bak -p  #还原
#===============================================================================
drop table if exists `departments`;
create table `departments`
(
	`id` serial primary key,
    `name` nvarchar(10),
    `deleted` boolean default 0
)engine=innodb comment '部门表';
insert into `departments`(`name`) values
('人事部'),('开发部');
#===============================================================================
drop table if exists `employees`;
create table `employees`
(
	`id` serial primary key,
    `department_id` bigint unsigned,
	`deleted` boolean default 0
)engine=innodb comment '员工表';
insert into `employees`(`department_id`) values
(1),(1),(2),(2);
#===============================================================================
drop table if exists `profiles`;
create table `profiles`
(
    `employee_id` bigint unsigned unique not null,
    `name` nvarchar(6),
    `gender` boolean,
    `age` tinyint unsigned
)engine=innodb comment '员工信息表';
insert into `profiles`(`employee_id`,`name`,`gender`,`age`) values
(1,'小红',1,29),(2,'小白',0,21),(3,'小黑',1,24),(4,'小黄',0,32);
#===============================================================================