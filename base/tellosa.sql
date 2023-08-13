DROP DATABASE IF EXISTS tellosa;
CREATE DATABASE IF NOT EXISTS tellosa;
USE tellosa;

CREATE TABLE Empleados (
cedula CHAR (8),
nombre VARCHAR (45) NOT NULL,
direccion VARCHAR (45) NOT NULL,
salario DECIMAL NOT NULL,
PRIMARY KEY (cedula) );

CREATE TABLE Telefonos (
cedE CHAR (8),
telefonos VARCHAR (45) NOT NULL,
PRIMARY KEY (cedE),
FOREIGN KEY (cedE) REFERENCES Empleados (cedula) );

CREATE TABLE Conductores (
cedC CHAR (8),
licencia_vencimiento DATE NOT NULL,
cant_Accidentes CHAR (2) NOT NULL,
ced_suplente CHAR (8),
PRIMARY KEY (cedC),
FOREIGN KEY (cedC) REFERENCES Empleados (cedula),
FOREIGN KEY (ced_suplente) REFERENCES Empleados (cedula) );

CREATE TABLE Funcionarios (
cedF CHAR (8),
sector VARCHAR (15),
PRIMARY KEY (cedF),
FOREIGN KEY (cedF) REFERENCES Empleados (cedula) );

CREATE TABLE Omnibus (
matricula CHAR (7),
cant_asientos CHAR (2),
descrip VARCHAR (45),
cedCo CHAR (8),
PRIMARY KEY (matricula),
FOREIGN KEY (cedCo) REFERENCES Conductores (cedC) );

CREATE TABLE Asientos (
matriculaO CHAR (7),
numAs CHAR (2),
estado BIT DEFAULT 0,
PRIMARY KEY (matriculaO, numAs),
FOREIGN KEY (matriculaO) REFERENCES Omnibus (matricula) );

CREATE TABLE Rutas (
origen VARCHAR (25),
destino VARCHAR (25),
cant_km DECIMAL (5,2) NOT NULL,
tiempo_viaje VARCHAR (20) NOT NULL,
PRIMARY KEY (origen, destino) );

CREATE TABLE Paradas (
codigo CHAR (5),
ciudad VARCHAR (25) NOT NULL,
direccion VARCHAR (45) NOT NULL,
PRIMARY KEY (codigo) );

CREATE TABLE Clientes (
ci CHAR (8),
nombre VARCHAR (45) NOT NULL,
apellido VARCHAR (45) NOT NULL,
edad INT NOT NULL,
celular VARCHAR (45) NOT NULL,
email VARCHAR (45) NOT NULL,
contrasena VARCHAR (55) NOT NULL,
PRIMARY KEY (ci) );


