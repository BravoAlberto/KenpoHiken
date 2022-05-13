#Author:  Alberto Bravo

CREATE DATABASE kenpohiken;
	
#Creo usuario limitado

CREATE USER 'administrador'@'localhost' IDENTIFIED BY 'AB492ga2';

#Otorgo permisos al usuario limitado de lectura, creación, modificación y borrado

GRANT SELECT, INSERT, DELETE, UPDATE ON kenpohiken.* TO 'administrador'@'localhost';

use kenpohiken;

#Creo tabla para los datos básicos de cada deportista

create table ficha(
	usuario varchar(25) not null,
	nombre varchar(25) not null,
	apellido1 varchar(100) not null,
	apellido2 varchar(100) not null,
	tipo varchar(10) not null,
	documento varchar(9) not null,
	nacimiento date not null,
	lugarnacim varchar(50) not null,
	nacionalidad varchar(50) not null,
	direccion varchar (200) not null,
	ciudad varchar(50) not null,
	provincia varchar(50) not null,
	codpostal numeric(6) not null,
	telefono numeric(10) not null,
	mail varchar (200) not null,
	enfermedad varchar(2)not null,
	primary key(usuario)
	);

#Creo tabla para los deportistas	
	
create table usuario(
    usuario varchar(25) not null,
    clave varchar(25) not null,
    primary key(usuario)
    );
