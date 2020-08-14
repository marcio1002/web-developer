create database if not exists web_developer
default character set utf8
default collate utf8_general_ci;

use web_developer;

 create table if not exists alunos(
	id_alunos int auto_increment primary key,
	nome varchar(40),
    email varchar(40) not null,
    cpf char(14) not null,
    cidade varchar(40) not null,
    endereco varchar(50) not null,
    senha char(8) not null,
    id_curso int not null,
    foreign key fk_curso (id_curso)
    references cursos(id_curso)
    on delete cascade on update cascade
 )default charset = utf8;
 
 create table if not exists cursos(
	id_curso int auto_increment primary key,
    nome varchar(40) unique not null
 )default charset = utf8;

  


 describe alunos;
 describe cursos;
 