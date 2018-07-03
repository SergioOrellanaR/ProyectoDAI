INSERT INTO empleado (rut, nombre, password, categoria, estado) VALUES ('00000000-0', 'ADMINISTRADOR Prueba', '000', 'A', 1); -- ADMINISTRADOR
INSERT INTO empleado (rut, nombre, password, categoria, estado ) VALUES ('11111111-1', 'RECEPCIONISTA Prueba', '000', 'R', 1); -- RECEPTOR DE MUESTRAS
INSERT INTO empleado (rut, nombre, password, categoria, estado ) VALUES ('22222222-2', 'LABORATORISTA Prueba', '000', 'T', 1); -- LABORATORISTA

INSERT INTO empresa (rut, nombre, password, direccion, estado) VALUES ('33333333-3', 'Empresa Prueba', '111', 'Calle Falsa 123', 1);
INSERT INTO contacto(rut, nombre, email, telefono, id_empresa) VALUES ('12345678-9', 'Perico Lospalotes', 'peri@mail.cl','29838495', 1);

INSERT INTO particular (rut, nombre, password, direccion, email, estado) VALUES ('44444444-4', 'Particular Prueba', '222', 'Calle Falsa 456', 'particular@mail.cl', 1);
INSERT INTO telefono (numero, id_particular) VALUES ('75838693', 1);
