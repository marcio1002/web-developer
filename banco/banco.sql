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
    senha char(8) not null
    
 )default charset utf8;
 
 create table if not exists cursos(
	id_curso int auto_increment primary key,
    nomeCursos varchar(40) not null
 )default charset utf8;
 
 alter table alunos modify id_curso int  unique not null;
 alter table alunos add foreign key(id_curso) references cursos(id_curso);
 
 alter table cursos modify nomeCursos varchar(40) unique not null;
 
 describe alunos;
 describe cursos;
 
 select * from alunos;
 select * from cursos;