create database `company1` default character set utf8 collate utf8_general_ci;
#drop database `company1`;
use `company1`;
#mysqldump -uroot company1 >D:\company1.bak -p  #备份
#mysql -uroot company1 < D:\company1.bak -p  #还原
#======================================
drop table if exists `departments`;
create table `departments`
(
	`id` serial primary key,
    `name` nvarchar(10),
    `deleted` boolean default 0
)engine=innodb;
insert into `departments`(`name`) values
('部门一'),('部门二');
#======================================
drop table if exists `employees`;
create table `employees`
(
	`id` serial primary key,
    `departmentid` bigint unsigned,
	`deleted` boolean default 0
)engine=innodb;
insert into `employees`(`departmentid`) values
(1),(1),(2),(2);
#======================================
drop table if exists `profiles`;
create table `profiles`
(
    `employeeid` bigint unsigned unique not null,
    `name` nvarchar(6),
    `gender` boolean,
    `age` tinyint unsigned
)engine=innodb;
insert into `profiles`(`employeeid`,`name`,`gender`,`age`) values
(1,'甲',1,29),(2,'乙',0,21),(3,'丙',1,24),(4,'丁',0,32);