INSERT INTO empleado (rut, nombre, password, categoria) VALUES ('00000000-0', 'Empleado Prueba', '000', '');
INSERT INTO empresa (rut, nombre, password, direccion) VALUES ('11111111-1', 'Empresa Prueba', '111', 'Calle Falsa 123');
INSERT INTO contacto(rut, nombre, email, telefono, id_empresa) VALUES ('12345678-9', 'Perico Lospalotes', 'peri@mail.cl','29838495', 1);
INSERT INTO particular (rut, nombre, password, direccion, email) VALUES ('22222222-2', 'Particular Prueba', '222', 'Calle Falsa 456', 'particular@mail.cl');
INSERT INTO telefono (numero, id_particular) VALUES ('75838693', 1);