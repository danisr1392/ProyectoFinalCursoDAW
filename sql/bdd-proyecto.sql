CREATE DATABASE burgerkingdom;
USE burgerkingdom;

CREATE TABLE roles(
    id_rol INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE usuario (
    id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    contrasenya VARCHAR(200) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    provincia VARCHAR(20) NOT NULL,
    ciudad VARCHAR(20) NOT NULL, 
    direccion VARCHAR(200) NOT NULL,
    fecha_alta date,
    id_rol INT NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES roles(id_rol)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE repartidor(
    id_rep INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(20) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    provincia VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE pedido(
    id_ped INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    precio DECIMAL(10, 2) NOT NULL,
    metodo_pago VARCHAR(50) NOT NULL,
    fecha_entrega DATE NOT NULL,
    a_domicilio enum('si','no') NOT NULL,
    id_user INT NOT NULL,
    id_rep INT, /*si no es a domicilio puede ser null, ya que no hay repartidor*/
    FOREIGN KEY (id_rep) REFERENCES repartidor(id_rep),
    FOREIGN KEY (id_user) REFERENCES usuario(id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE producto(
    id_prod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(300),
    precio DECIMAL(10, 2) NOT NULL,
    id_user INT NOT NULL,
    tipo ENUM("Hamburguesa", "Snack", "Bebida") NOT NULL,
    imagen longblob NOT NULL,
    FOREIGN KEY (id_user) REFERENCES usuario(id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* Relacion Pedido->contiene->Producto */
CREATE TABLE detallesPedido(
    id_ped INT NOT NULL,
    id_prod INT NOT NULL,
    cantidad INT NOT NULL,
    PRIMARY KEY (id_ped, id_prod),
    FOREIGN KEY (id_ped) REFERENCES pedido(id_ped),
    FOREIGN KEY (id_prod) REFERENCES producto(id_prod)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE ingrediente (
    id_ingr INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* Relacion Producto->contiene->Ingrediente */
CREATE TABLE detallesProducto (
    id_prod INT NOT NULL,
    id_ingr INT NOT NULL,
    cantidad INT NOT NULL,
    PRIMARY KEY (id_ingr, id_prod),
    FOREIGN KEY (id_prod)REFERENCES producto(id_prod),
    FOREIGN KEY (id_ingr)REFERENCES ingrediente(id_ingr)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;