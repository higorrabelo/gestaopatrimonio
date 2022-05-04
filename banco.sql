create database gespat;
use gespat;

create table usuario(
	id int not null primary key auto_increment,
    nome varchar(100) not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    setor varchar(50) not null,
    cadastro timestamp default current_timestamp,
    atualiza timestamp default current_timestamp
);

insert into usuario(nome,senha,email,setor) values ("Higor",md5("Higor20"),"higor.rabelo@gmail.com","SUPORTE");
select * from usuario;