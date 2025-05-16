CREATE DATABASE usuarios;
use usuarios;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL,
    email VARCHAR(50) NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT "Activo",
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

INSERT INTO usuarios (nombre, email) VALUES
("Jair Aguilar", "aguilar.jair.2001@gmail.com"),
("Carlos Saenz", "saenz@gmail.com"),
("Hamilton", "hamilton@gmail.com"),
("Max", "max@gmail.com"),
("Norris", "norris@gmail.com");