create database BancoDoConcurseiro;

use BancoDoConcurseiro;

create table usuario(
    codigo integer(10) auto_increment primary key,
    nome varchar(50),
    apelido varchar(20),
    email varchar(50),
    senha varchar(50)
);

create table Disciplina(
    codigo integer(10) auto_increment primary key,
    nome varchar(30)
);

create table Banca(
    codigo integer(10) auto_increment primary key,
    nome varchar(50)
);

create table Descricao(
    codigo integer(10) auto_increment primary key,
    nivel varchar(20),
    ano_de_lancamento date,
    cod_banca integer(10),
    cod_disciplina integer(10),
    assertiva_correta varchar(15)
);

create table texto(
    codigo integer(10),
    texto varchar(5000)
);

create table texto_imagem(
    codigo integer(10),
    texto varchar(500)
);

create table assertiva(
    codigo integer(10),
    a varchar(5000),
    b varchar(5000),
    c varchar(5000),
    d varchar(5000),
    e varchar(5000)
);

create table descricao_simulado(
    codigo_usuario integer(10),
    codigo_disciplina integer,
    concurso varchar(100),
    codigo integer(10) auto_increment primary key,
    data date
);

create table simulado(
    codigo_simulado integer(10),
    codigo_da_questao integer(10)
);
