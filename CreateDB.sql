create database `ProjectDB` default character set utf8 collate utf8_general_ci;
#drop database `ProjectDB`;
use `ProjectDB`;
#mysqldump -uroot -p ProjectDB >D:\backup.sql #备份
#mysql -u root -p ProjectDB < D:\backup.sql #还原
#======================================
create table `persons`
(
	`id` serial primary key,
    `name` nvarchar(15)
)engine=innodb;
insert into `persons`(`name`) values('utumaki');
insert into `persons`(`name`) values('uchiha');
#======================================
