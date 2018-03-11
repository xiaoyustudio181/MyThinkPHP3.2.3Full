create database `company1` default character set utf8 collate utf8_general_ci;
#drop database `company1`;
use `company1`;
#mysqldump -uroot company1 >D:\company1.bak #备份(-p password)
#mysql -uroot company1 < D:\company1.bak #还原(-p password)
#======================================
create table `departments`
(
	`id` serial primary key,
    `name` nvarchar(10),
    `deleted` boolean default 0
)engine=innodb;
insert into `departments`(`name`) values('部门一');
insert into `departments`(`name`) values('部门二');
#======================================
create table `employees`
(
	`id` serial primary key,
    `departmentid` bigint,
	`deleted` boolean default 0
)engine=innodb;
insert into `employees`(`departmentid`) values(1);
insert into `employees`(`departmentid`) values(1);
insert into `employees`(`departmentid`) values(2);
insert into `employees`(`departmentid`) values(2);
#======================================
create table `profiles`
(
    `employeeid` bigint unsigned unique,
    `name` nvarchar(6),
    `gender` boolean,
    `age` tinyint unsigned
)engine=innodb;
insert into `profiles`(`employeeid`,`name`,`gender`,`age`) values(1,'甲',1,29);
insert into `profiles`(`employeeid`,`name`,`gender`,`age`) values(2,'乙',0,21);
insert into `profiles`(`employeeid`,`name`,`gender`,`age`) values(3,'丙',1,24);
insert into `profiles`(`employeeid`,`name`,`gender`,`age`) values(4,'丁',0,32);