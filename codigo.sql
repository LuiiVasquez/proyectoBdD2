create database bddproyecto;

use bddproyecto;

create table appuser(usuario VARCHAR(15), contrasena VARCHAR(20), nombre VARCHAR(50), perfil INT(2), PRIMARY KEY(usuario));

create table reg_cliente(codigo VARCHAR(10), nombre VARCHAR(25), apellido VARCHAR(25), nit INT(9), fecha_nac DATE, genero VARCHAR(1), direccion VARCHAR(100), telefono INT(8), descripcion VARCHAR(100), PRIMARY KEY(codigo));

create table control(id INT(2) AUTO_INCREMENT, codigo_cliente VARCHAR(10), usuario VARCHAR(15), fecha DATE, hora DATETIME, accion VARCHAR(10), camp_mod VARCHAR(15), val_antiguo VARCHAR(100), val_nuevo VARCHAR(100), PRIMARY KEY(id), FOREIGN KEY(codigo_cliente) REFERENCES reg_cliente(codigo), FOREIGN KEY(usuario) REFERENCES appuser(usuario));


INSERT INTO appuser VALUES('edwinadmin', 'jmig78ADyhgQWER', 'Edwin Recinos', 1);
INSERT INTO appuser VALUES('ferstandar', 'olf0547wGTFju45', 'Fernandito Leja', 2);
INSERT INTO appuser VALUES('luistandar', 'lokjHGT456BNMsa', 'Luis Vasquez', 2);
INSERT INTO appuser VALUES('raulstandar', 'adset789123GTFE', 'Raul Par', 2);
INSERT INTO appuser VALUES('nicostandar', '4568JUHG123fthd', 'Nicolasa Macario', 2);