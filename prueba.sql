create database prueba;
drop database prueba;
use prueba;

create table usuario (
  idUsuario int(4) primary key auto_increment,
  nombreUsuario varchar(50) NOT NULL,
  correoUsuario varchar(50) unique,
  passworUsuario varchar(20) NOT NULL,
  rolUsuario varchar(20) NOT NULL,
  estadoUsuario varchar(10) NOT NULL
);

CREATE TABLE `usuario` (
  `idUsuario` bigint(20) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `correoUsuario` varchar(50) DEFAULT NULL,
  `passworUsuario` varchar(20) NOT NULL,
  `rolUsuario` varchar(20) NOT NULL,
  `estadoUsuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `medico` (
  `idMedico` bigint(20) NOT NULL,
  `nombreMedico` varchar(50) NOT NULL,
  `apellidoMedico` varchar(50) NOT NULL,
  `telefonoMedico` varchar(10) NOT NULL,
  `correoMedico` varchar(100) DEFAULT NULL,
  `tarjetaProfesional` varchar(50) NOT NULL,
  `especialidadMedico` varchar(50) NOT NULL,
  `estadoMedico` varchar(10) NOT NULL,
  `idUsuarioFK` bigint(20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO  medico (idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, 
tarjetaProfesional, especialidadMedico, estadoMedico) VALUES ('0001', 'cristian', 'pores', '321354165413', 
'cdpores@misena....', '123xcv', 'neorologia', 'Activo');

INSERT INTO (idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, 
tarjetaProfesional, especialidadMedico, estadoMedico) medico VALUES ('0001', 'cristian', 'pores', 
'321354165413', 'cdpores@misena....', '123xcv', 'neorologia', 'Activo');

delete from medico where idMedico=1;

INSERT INTO  usuario (idUsuario, nombreUsuario, rolUsuario, correoUsuario, contraseñaUsuario, 
estadoUsuario) VALUES ('', 'cristian', 'Cliente', 'cris@gmail.com', '123456', 'on');

select *from  usuario;