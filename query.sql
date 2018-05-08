use `company1`;
select * from `departments`;
select * from `employees`;
select * from `profiles`;
#==========================================

#==========================================
show tables;
show databases;
show engines;
describe `departments`;
show create table `departments`;
show table status like 'departments';
select * from information_schema.`TABLE_CONSTRAINTS` where table_schema='company1';