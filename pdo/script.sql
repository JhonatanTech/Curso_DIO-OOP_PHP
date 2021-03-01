create database exemplo;
use exemplo;

create table produtos(
	id int(11) not null auto_increment,
	descricao varchar(50) default null,
    primary key(id)
);

