use `ProjectDB`;
select * from `Table1`;

show tables;
show databases;
show engines;
describe `Table1`;
show create table `Table1`;
show table status like 'Table1';
select * from information_schema.`TABLE_CONSTRAINTS` where table_schema='northwind';