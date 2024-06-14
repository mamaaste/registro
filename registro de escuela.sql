CREATE DATABASE registro;
USE registro;

CREATE TABLE administrador(
id INT(10) AUTO_INCREMENT PRIMARY KEY,
nombres VARCHAR(40) NOT NULL, 
apellidos VARCHAR(45) NOT NULL, edad INT(15) NOT NULL, 
direccion TEXT NOT NULL,
encargado VARCHAR(255) NOT NULL, 
tel_encargado INT (10) NOT NULL
    
);