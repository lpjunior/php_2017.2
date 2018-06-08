create database db_aula10;

use db_aula10;

create table produto(
	id int primary key auto_increment,
	nome varchar(150) not null,
	quantidade int not null
);