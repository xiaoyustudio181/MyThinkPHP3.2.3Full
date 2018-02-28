use `ProjectDB`;
select * from `persons`;

show tables;
show databases;
show engines;
describe `persons`;
show create table `persons`;
show table status like 'persons';
select * from information_schema.`TABLE_CONSTRAINTS` where table_schema='persons';