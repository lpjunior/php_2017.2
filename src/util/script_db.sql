create table administrador(
	id int primary key auto_increment,
	nome varchar(255) not null,
	login varchar(50) not null unique,
	senha varchar(255) not null
);

create table produto(
	id int primary key auto_increment,
	nmProduto varchar(255) not null,
	descProduto varchar(255) not null,
	quantidade int default 0,
	preco double default 0,
	img varchar(255) default "img/default.jpg"
);