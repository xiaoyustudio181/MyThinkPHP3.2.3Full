create database `ProjectDB` default character set utf8 collate utf8_general_ci;
use `ProjectDB`;
#mysqldump -uroot -p ProjectDB >D:\backup.sql #备份
#mysql -u root -p ProjectDB < D:\backup.sql #还原
#======================================
create table `table1`
(
	`id` serial primary key,
    `name` nvarchar(15)
)engine=innodb;
insert into `table1`(`name`) values('');
#======================================
