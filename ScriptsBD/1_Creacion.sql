CREATE DATABASE encargo2;
USE encargo2;

CREATE TABLE empresa(
	id        INT PRIMARY KEY AUTO_INCREMENT,
    rut       VARCHAR(10),
    nombre    VARCHAR(30),
    password  VARCHAR(10),
    direccion VARCHAR(50),
	estado    BIT -- 0: Cuenta desactivada / 1: Cuenta activada
);

CREATE TABLE particular(
	id		  INT PRIMARY KEY AUTO_INCREMENT,
    rut		  VARCHAR(45),
    password  VARCHAR(45),
    nombre	  VARCHAR(45),
    direccion VARCHAR(45),
    email     VARCHAR(100),
	estado    BIT -- 0: Cuenta desactivada / 1: Cuenta activada
);

CREATE TABLE empleado(
	rut       VARCHAR(10) PRIMARY KEY,
    nombre    VARCHAR(50),
    password  VARCHAR(10),
    categoria VARCHAR(1),
	estado    BIT -- 0: Cuenta desactivada / 1: Cuenta activada
);

CREATE TABLE analisis_muestra(
	id	                 INT PRIMARY KEY AUTO_INCREMENT,
    fecha                DATE,
    temperatura          DECIMAL(3,1),
    cantidad             INT,
    id_empresa           INT          REFERENCES empresa(id),
    id_particular        INT          REFERENCES particular(id),
    rut_empleado_recibe  VARCHAR(10)  REFERENCES empleado(rut)
);

CREATE TABLE contacto(
	rut         VARCHAR(10) PRIMARY KEY,
    nombre      VARCHAR(30),	
    email       VARCHAR(45),
    telefono    VARCHAR(15),
    id_empresa  INT REFERENCES empresa(id)
);

CREATE TABLE telefono(
	id	          INT PRIMARY KEY AUTO_INCREMENT,
    numero        VARCHAR(15),
    id_particular INT REFERENCES particular(id)
);

CREATE TABLE tipo_analisis(
	id		INT,
    nombre	VARCHAR(45)
);

INSERT INTO tipo_analisis (id, nombre) VALUES (0, 'Detección de micotoxinas');
INSERT INTO tipo_analisis (id, nombre) VALUES (1, 'Detección de bacterias nocivas');
INSERT INTO tipo_analisis (id, nombre) VALUES (2, 'Detección de plaguicidas prohibidos');
INSERT INTO tipo_analisis (id, nombre) VALUES (3, 'Detección de marea roja');
INSERT INTO tipo_analisis (id, nombre) VALUES (4, 'Detección de bacterias nocivas');

CREATE TABLE resultado_analisis(
	id_tipo   			    INT         REFERENCES tipo_analisis(id),
    id_analisis_muestra     INT         REFERENCES analisis_muestra(id),
    fecha_registro 		    DATE,
    ppm 				    INT,
    estado 					BIT,
    rut_empleado_analista   VARCHAR(10) REFERENCES empleado(rut) 
);

