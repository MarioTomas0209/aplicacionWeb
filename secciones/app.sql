#DROP DATABASE app;
CREATE DATABASE app;

USE app;

CREATE TABLE empleados(
	id INT(11) NOT NULL AUTO_INCREMENT,
    primerNombre VARCHAR(30) NOT NULL,
	segundoNombre VARCHAR(30) NOT NULL,
    primerApellido VARCHAR(30) NOT NULL,
    segundoApellido VARCHAR(30) NOT NULL,
    foto VARCHAR(30) NOT NULL,
    cv VARCHAR(30) NOT NULL,
    idPuesto INT(11) NOT NULL,
    fechaIngreso DATE NOT NULL,
    PRIMARY KEY (id)
);
#ALTER TABLE empleados ADD FOREIGN KEY(idPuesto) REFERENCES puestos (id);
CREATE TABLE puestos(
	id INT(11) NOT NULL AUTO_INCREMENT,
    nombrePuesto VARCHAR(30) NOT NULL,
    PRIMARY KEY(id)
);
#INSERT INTO puestos (nombrePuesto) VALUES ('Programdor JR');

CREATE TABLE usuarios (
	id INT(11) NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(30) NOT NULL,
    contrasenia VARCHAR(30) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);
#INSERT INTO usuarios (usuario, contrasenia, correo) VALUES ('admin', 'admin123', 'admin@gmail.com');