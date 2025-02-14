DROP DATABASE IF EXISTS clientes;
CREATE DATABASE clientes;
use clientes;

create table usuario(
nombre varchar(45),
correo varchar(45) primary key,
contra varchar(200)
);

drop table if exists tareas;
create table tareas(
id_tarea int primary key auto_increment,
titulo varchar(45),
descripcion varchar(120),
estado varchar (45),
correo varchar(45)	
);

select * from usuario;

select * from tareas;