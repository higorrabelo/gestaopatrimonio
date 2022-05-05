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

create table patrimonio(
codigo int not null primary key auto_increment,
nome varchar(90) not null,
tipo varchar(20) not null,
setor varchar(30) not null,
fabricante varchar(50) not null,
fornecedor varchar(50) not null,
valor double not null,
depreciacao double not null,
imagem varchar(100) not null,
quantidade int not null,
localizacao varchar(50) not null,
aquisicao date not null,
atualizacao timestamp default current_timestamp,
cadastro timestamp default current_timestamp,
id_usuario int,
constraint fk_usuario foreign key (id_usuario) references usuario(id)
);



select * from usuario;

insert into usuario(nome,senha,email,setor) values ("Amanda",md5("Gordinha"),"amanda@gmail.com","SUPORTE");
update usuario set nome='Higor', senha=md5('Higor20') , email = 'higor.rabelo@gmail.com', setor="SUPORTE" ,atualiza = current_timestamp where id = 1;