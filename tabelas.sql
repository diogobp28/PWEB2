CREATE DATABASE ava2-pweb2; 
USE ava2-pweb2; 

CREATE TABLE users(nomecomp varchar(500), username varchar(20), 
email varchar(100), senha varchar(100), constraint usernamePK primary key(usuario), 
constraint email unique (email), constraint usuarioU unique (username));