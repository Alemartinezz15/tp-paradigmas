CREATE DATABASE electrodb;
USE electrodb;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    categoria VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    disponibilidad ENUM('En Stock', 'Agotado') DEFAULT 'En Stock',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ALTER TABLE productos ADD imagen VARCHAR(255)
);

CREATE TABLE productos_auditoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT NOT NULL,
    accion VARCHAR(50) NOT NULL,
    nombre VARCHAR(255),
    categoria VARCHAR(255),
    precio DECIMAL(10, 2),
    disponibilidad VARCHAR(50),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE usuarios (}
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol ENUM('usuario', 'admin') DEFAULT 'usuario',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DELIMITER //

CREATE TRIGGER after_product_insert
AFTER INSERT ON productos
FOR EACH ROW
BEGIN
    INSERT INTO productos_auditoria (producto_id, accion, nombre, categoria, precio, disponibilidad)
    VALUES (NEW.id, 'INSERT', NEW.nombre, NEW.categoria, NEW.precio, NEW.disponibilidad);
END; //

DELIMITER ;

DELIMITER //
CREATE TRIGGER after_product_update
AFTER UPDATE ON productos
FOR EACH ROW
BEGIN
    INSERT INTO productos_auditoria (producto_id, accion, nombre, categoria, precio, disponibilidad)
    VALUES (OLD.id, 'UPDATE', NEW.nombre, NEW.categoria, NEW.precio, NEW.disponibilidad);
END; //
DELIMITER ;



