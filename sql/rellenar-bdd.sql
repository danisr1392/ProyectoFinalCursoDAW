/*******/
/*ROLES*/
/*******/

INSERT INTO roles(tipo) VALUES('Administrador');
INSERT INTO roles(tipo) VALUES('Cliente');


/**********/
/*USUARIOS*/
/**********/

/*Solo creo 3 admins iniciales, luego cualquiera de estos tres podrá crear más usuarios administradores o usuarios normales(en caso de error con alguna cuenta)*/
INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Daniel','a123456A','daniserrano1392@gmail.com','123456789', 'Almería', 'Roquetas de Mar', 'Calle Luis Cervantes 19', '2023-08-12', '1');
INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Antonio','b123456B','antoniosanchez1221@gmail.com','987654321', 'Almería', 'Vícar', 'Avenida Federico García Lorca 55', '2023-08-16', '1');
INSERT INTO usuario(nombre , contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Jose','c123456C','joselopez1227@gmail.com','543219876', 'Almería', 'Aguadulce', 'Plaza de la Paz 7', '2023-08-15', '1');

INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('María', 'f456789F', 'mariagarcialopez@gmail.com', '890123456', 'Almería', 'Roquetas de Mar', 'Avenida Almería 10', now(), '2');
INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Sofía', 'g567890G', 'sofialopez@gmail.com', '901234567', 'Granada', 'Albayzín', 'Calle Granada 25', now(), '2');
INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Javier', 'h678901H', 'javierhernandez@gmail.com', '012345678', 'Huelva', 'Matalascañas', 'Calle Huelva 77', now(), '2');
INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Lucía', 'i789012I', 'luciaperez@gmail.com', '123456789', 'Cádiz', 'Barbate', 'Calle Cadiz 89', now(), '2');
INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Manuel', 'j890123J', 'manuelgomez@gmail.com', '234567890', 'Sevilla', 'Triana', 'Calle Sevilla 30', now(), '2');
INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Carmen', 'k901234K', 'carmenmartinez@gmail.com', '345678901', 'Málaga', 'Torremolinos', 'Avenida Malaga 5', now(), '2');
INSERT INTO usuario(nombre, contrasenya, email, telefono, provincia, ciudad, direccion, fecha_alta, id_rol) 
VALUES('Diego', 'l012345L', 'diegofernandez@gmail.com', '456789012', 'Córdoba', 'Córdoba', 'Plaza del Agua 22', now(), '2');

/*aquí probé a hacerle un hash a las contraseñas de estos usuarios pero daba error luego con el password verify*/


/************/
/*REPARTIDOR*/
/************/

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('56789012E', 'Pedro', 'Martínez García', 'Almería', '543210987');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('67890123F', 'Ana', 'Hernández López', 'Granada', '432109876');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('78901234G', 'David', 'Gómez Fernández', 'Jaén', '321098765');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('89012345H', 'Sara', 'Pérez Rodríguez', 'Sevilla', '210987654');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('90123456I', 'Jorge', 'López Martínez', 'Cádiz', '109876543');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('01234567J', 'Carmen', 'García Pérez', 'Málaga', '098765432');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('12345678K', 'Daniel', 'Fernández Rodríguez', 'Almería', '987654321');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('23456789L', 'Elena', 'Martínez García', 'Málaga', '876543210');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('34567890M', 'Adrián', 'Hernández López', 'Huelva', '765432109');

INSERT INTO repartidor(dni, nombre, apellido, provincia, telefono)
VALUES('45678901N', 'Isabel', 'Gómez Fernández', 'Córdoba', '654321098');


/********/
/*PEDIDO*/
/********/

INSERT INTO pedido(precio, metodo_pago, fecha_entrega, a_domicilio, id_user, id_rep)
VALUES('20.98', 'Mastercard', '2023-09-15', 'si', '6', '1');

INSERT INTO pedido(precio, metodo_pago, fecha_entrega, a_domicilio, id_user, id_rep)
VALUES('18.98', 'Visa', '2023-09-24', 'si', '7', '2');

INSERT INTO pedido(precio, metodo_pago, fecha_entrega, a_domicilio, id_user, id_rep)
VALUES('45.96', 'Visa', '2023-09-04', 'si', '5', '3');

INSERT INTO pedido(precio, metodo_pago, fecha_entrega, a_domicilio, id_user, id_rep)
VALUES('15.47', 'Mastercard', '2023-07-03', 'no', '5', null);

INSERT INTO pedido(precio, metodo_pago, fecha_entrega, a_domicilio, id_user, id_rep)
VALUES('21.97', 'Visa', '2023-05-14', 'si', '8', '4');

INSERT INTO pedido(precio, metodo_pago, fecha_entrega, a_domicilio, id_user, id_rep)
VALUES('20.96', 'Mastercard', '2023-08-07', 'no', '9', null);



/**********/
/*PRODUCTO*/
/**********/

/*burgers(1-11)*/

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo) /*las imágenes las tengo que introducir manualmente desde el menú de phpmyadmin*/
VALUES('Angry Burger', 'Angry lleva una carne de res a la parrilla, preparada con deliciosas tiras de bacon, jugosos tomates, lechuga recién cortada, mayonesa, jalapeños y cebollitas angry', '9.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Rodeo Burger', 'El clásico sabor de la Rodeo King llega en partida doble. Queso cheddar, la rica salsa Rodeo, Y lo más importante: doble carne Whopper a la parrilla.', '8.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('King Huevo', 'Disfruta de la increíble The KING Steakegghouse, en su versión simple o doble, con carne a la parrilla, mayonesa, tomate, bacon, cebolla crujiente, salsa barbacoa y queso americano, todo ello coronado por un delicioso huevo frito. ', '8.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Avocado Burger', 'La hamburguesa La Beerguería se sirve en pan brioche e incluye carne desmigada con BBQ, aguacate, queso gouda y acompañamiento especial de un huevo frito', '7.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Ham-Burger', 'Disfruta de un sabor español con la nueva Ham-burger, que incluye carne desmigada, queso cheddar, vegetales frescos y la nueva novedad de jamón serrano.', '6.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Crispy Bacon', 'Disfruta de nuestra nueva hamburguesa de pollo con deliciosas salsas BBQ y Bacon. Tan crujiente, Tan Crispy, Tan Burger Kingdom', '9.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Cuadruple Burger', '4 carnes a la parrilla, salsa stacker, pan, queso cheddar, panceta. Se siente esa manija.', '6.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('DobleCheese Burger', '2 carnes a la parrilla, salsa BBQ, pan, queso cheddar, bacon. Tranki pero potente.', '5.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('London Grill', 'The King Selection, con 200 gramos de carne a la parrilla en suave Pan de Patata. London Grill combina la deliciosa salsa BBQ, con cebolla caramelizada, bacon y queso Cheddar.', '10.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Long Chicken', 'Pan de patata alargado que alberga pollo crujiente empanado ligeramente especiado, lechuga y mayonesa. ¡Todo un clásico!', '7.99€', '1', 'Hamburguesa');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Rodeo BBQ Burger', '100% Rodeo, 100% carne, esta vez acompañado de crujientes aros de cebolla empanizados, salsa BBQ y queso cheddar', '8.99€', '1', 'Hamburguesa');


/*snacks(12-19)*/

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Aros de Cebolla', 'Son perfectos para todo, son redondos, están sabrosos, crujientes y dorados, solos o acompañados de una de tus salsas favoritas.', '1.99€', '2', 'Snack');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Nachos TXM', 'Consistentes pedazos triangulares de tortilla de maíz, fritos y bañados con queso amarillo derretido, con 3 salsas diferentes para elegir', '4.99€', '2', 'Snack');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Nuggets', 'Nuevos deliciosos, crujientes, dorados… dipealos en su sabrosa salsa. ', '2.99€', '2', 'Snack');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Patatas Clásicas', 'Las mejores, las más crujientes, las que tienen más sabor, si las pruebas entenderás el porqué de su fama.', '0.99€', '2', 'Snack');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Patatas Deluxe', 'Estos sabrosos gajos de patata especiadas, servidas con piel y acompañadas de una salsa especial a la cebolleta, son una alternativa a las famosas patatas fritas.', '0.99€', '2', 'Snack');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Patatas Cheesebacon', 'A nuestras Patatas Clásicas les hemos añadido nuestra cremosa salsa de queso cheddar, cebolla crispy y bacon, mucho bacon.', '1.99€', '2', 'Snack');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Patatas Deluxe Cheesebacon', 'A nuestras Patatas Supreme les hemos añadido nuestra cremosa salsa de queso cheddar, cebolla crispy y bacon, mucho bacon.', '1.99€', '2', 'Snack');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Tequeños', 'Masa de maíz frita con queso relleno y mozzarella que se puede combinar con distintas salsas.', '3.99€', '2', 'Snack');

/*bebidas(20-27)*/

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Coca Cola', null, '1.00€', '3', 'Bebida');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Coca Cola Zero', null, '1.00€', '3', 'Bebida');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Fanta Naranja', null, '1.00€', '3', 'Bebida');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Fanta Limón', null, '1.00€', '3', 'Bebida');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Agua Mineral', null, '0.50€', '3', 'Bebida');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Monster Energy', null, '1.50€', '3', 'Bebida');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Monster Energy Mango', null, '1.50€', '3', 'Bebida');

INSERT INTO producto(nombre, descripcion, precio, id_user, tipo)
VALUES('Sprite', null, '1.00€', '3', 'Bebida');


/**************/
/*INGREDIENTES*/
/**************/

/*1*/
INSERT INTO ingrediente(nombre)
VALUES('Ternera');
/*2*/
INSERT INTO ingrediente(nombre)
VALUES('Pollo');
/*3*/
INSERT INTO ingrediente(nombre)
VALUES('Pan de Patata');
/*4*/
INSERT INTO ingrediente(nombre)
VALUES('Pan de bacon');
/*5*/
INSERT INTO ingrediente(nombre)
VALUES('Tomate');
/*6*/
INSERT INTO ingrediente(nombre)
VALUES('Lechuga');
/*7*/
INSERT INTO ingrediente(nombre)
VALUES('Jalapeños');
/*8*/
INSERT INTO ingrediente(nombre)
VALUES('Queso Cheddar');
/*9*/
INSERT INTO ingrediente(nombre)
VALUES('Queso Gouda');
/*10*/
INSERT INTO ingrediente(nombre)
VALUES('Bacon');
/*11*/
INSERT INTO ingrediente(nombre)
VALUES('Cebolla');
/*12*/
INSERT INTO ingrediente(nombre)
VALUES('Huevo');
/*13*/
INSERT INTO ingrediente(nombre)
VALUES('Aros de Cebolla');
/*14*/
INSERT INTO ingrediente(nombre)
VALUES('Salsa BBQ');
/*15*/
INSERT INTO ingrediente(nombre)
VALUES('Mayonesa');
/*16*/
INSERT INTO ingrediente(nombre)
VALUES('Ketchup');
/*17*/
INSERT INTO ingrediente(nombre)
VALUES('Aguacate');
/*18*/
INSERT INTO ingrediente(nombre)
VALUES('Jamón Serrano');

/*****************/
/*DETALLES-PEDIDO*/
/*****************/

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('1', '1', '2');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('1', '20', '1');



INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('2', '11', '1');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('2', '10', '1');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('2', '20', '2');



INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('3', '9', '4');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('3', '22', '2');



INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('4', '9', '1');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('4', '12', '1');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('4', '17', '1');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('4', '25', '1');



INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('5', '6', '1');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('5', '13', '2');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('5', '20', '2');



INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('6', '7', '2');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('6', '19', '1');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('6', '18', '1');

INSERT INTO detallesPedido(id_ped, id_prod, cantidad)
VALUES('6', '20', '1');


/*******************/
/*DETALLES-PRODUCTO*/
/*******************/

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('1', '1', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('1', '3', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('1', '5', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('1', '6', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('1', '7', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('1', '8', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('1', '10', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('1', '15', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('2', '1', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('2', '3', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('2', '6', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('2', '8', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('2', '10', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('2', '13', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('2', '14', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('2', '15', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('3', '1', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('3', '4', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('3', '5', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('3', '9', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('3', '10', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('3', '11', '3');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('3', '14', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('3', '15', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('4', '1', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('4', '3', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('4', '5', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('4', '6', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('4', '9', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('4', '14', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('4', '17', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('5', '1', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('5', '4', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('5', '5', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('5', '6', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('5', '14', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('5', '18', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('6', '2', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('6', '3', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('6', '5', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('6', '10', '3');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('6', '14', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('6', '15', '1');


INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('7', '1', '4');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('7', '3', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('7', '8', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('7', '16', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('8', '1', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('8', '4', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('8', '8', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('8', '10', '3');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('8', '14', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('9', '1', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('9', '3', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('9', '8', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('9', '10', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('9', '11', '3');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('9', '14', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('10', '2', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('10', '3', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('10', '6', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('10', '15', '1');



INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('11', '1', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('11', '3', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('11', '7', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('11', '8', '1');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('11', '10', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('11', '13', '2');

INSERT INTO detallesProducto(id_prod, id_ingr, cantidad)
VALUES('11', '14', '1');


