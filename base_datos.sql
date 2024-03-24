create database centro_nutricion;
    use centro_nutricion;

    create table cliente (
        id_cliente int auto_increment primary key,
        nombre varchar(50),
        apellidos varchar(50),
        edad int,
        sexo varchar(10),
        telefono varchar(15)
        );

    create table serviciocliente (
        id_serviciocliente int auto_increment primary key,
        id_cliente int,
        tipo_servicio varchar(100),
        fecha_cita date,
        hora_cita time,
        foreign key (id_cliente) references cliente(id_cliente)
        );

    create table pagoscliente (
        id_pagocliente int auto_increment primary key,
        id_cliente int,
        fecha_impresion_ticket date,
        total_pago_servicio double(10, 2),
        foreign key (id_cliente) references cliente(id_cliente)
        );

    create table medicionescliente (
        id_medicion int auto_increment primary key,
        id_cliente int,
        altura double(5, 2),
        peso_actual double(5, 2),
        circunferencia_brazo_cmd double(5, 2),
        circunferencia_cintura double(5, 2),
        circunferencia_cadera double(5, 2),
        pliegue_tricipital double(5, 2),
        pliegue_bicipital double(5, 2),
        pliegue_subescapular double(5, 2),
        pliegue_suprailiaco double(5, 2),
        masa_grasa double(5, 2),
        masa_libre_grasa double(5, 2),
        porcentaje_grasa double(5, 2),
        musculatura double(5, 2),
        musculatura_total double(5, 2),
        distribucion_grasa_corporal varchar(50),
        enfermedades_asociadas varchar(100),
        tipo_distribucion_grasa_corporal varchar(50),
        patron_distribucion varchar(50),
        foreign key (id_cliente) references cliente(id_cliente)
        );

    create table ejercicios (
        id_ejercicio int auto_increment primary key,
        dia_semana varchar(15),
        ejercicio varchar(100),
        series varchar(50),
        repeticiones varchar(50),
        descanso varchar(50),
        id_cliente int,
        foreign key (id_cliente) references cliente(id_cliente)
        );


    create table planalimenticio (
        id_planalimenticio int auto_increment primary key,
        macro_comida varchar(50),
        proteinas varchar(50),
        carbohidratos varchar(50),
        frutas varchar(50),
        gramos_por_porcion varchar(50),
        grasas varchar(50),
        acompanamiento varchar(50),
        vegetales_abundantes varchar(50),
        bebidas varchar(50),
        equivalencia varchar(50),
        notas varchar(100),
        recetas varchar(100),
        alimentos_recomendados varchar(100),
        gramos_por_porcion_recomendada varchar(50),
        suplementacion_sugerida_recomendada varchar(100),
        id_cliente int,
        foreign key (id_cliente) references cliente(id_cliente)
        );




    create table empleados (
        id_empleado int auto_increment primary key,
        nombre varchar(50),
        apellidos varchar(50),
        sexo varchar(10),
        estado_civil varchar(20),
        edad int,
        telefono varchar(15),
        rfc varchar(15),
        Puesto VARCHAR(15),
        firma blob
        );

    create table pagoempleados (
        id_pagoempleado int auto_increment primary key,
        fecha_pago date,
        nombre_recibe varchar(50),
        cantidad_pago double(10, 2),
        concepto_pago varchar(100),
        forma_pago varchar(50),
        deducciones double(10, 2),
        monto_total double(10, 2),
        id_empleado int,
        foreign key (id_empleado) references empleados(id_empleado)
        );

    create table tiempotrabajado (
        id_tiempotrabajado int auto_increment primary key,
        id_empleado int,
        horas_extras int,
        dias_trabajados varchar(50),
        total_horas_trabajadas int,
        numero_cuenta int,
        foreign key (id_empleado) references empleados(id_empleado)
        );

    create table asistencia (
        id_asistencia int auto_increment primary key,
        id_empleado int,
        fecha date,
        hora_llegada time,
        hora_salida time,
        foreign key (id_empleado) references empleados(id_empleado)
        );

    create table usuarios (
        id_usuario int auto_increment primary key,
        nombre_usuario varchar(50),
        contraseña varchar(50)
        );

    CREATE TABLE asignacion_usuario_empleado (
        id_asignacion int auto_increment primary key,
        id_usuario int,
        id_empleado int,
        foreign key (id_usuario) references usuarios(id_usuario),
        foreign key (id_empleado) references empleados(id_empleado)
        );


-- Registros para empleados
INSERT INTO empleados (nombre, apellidos, sexo, estado_civil, edad, telefono, rfc, Puesto) 
VALUES ('Juan', 'Pérez', 'Masculino', 'Soltero', 35, '1234567890', 'XXXX123456XXX', 'Gerente');

INSERT INTO empleados (nombre, apellidos, sexo, estado_civil, edad, telefono, rfc, Puesto) 
VALUES ('María', 'González', 'Femenino', 'Casada', 28, '0987654321', 'XXXX654321XXX', 'Nutriologo');

INSERT INTO empleados (nombre, apellidos, sexo, estado_civil, edad, telefono, rfc, Puesto) 
VALUES ('Carlos', 'López', 'Masculino', 'Soltero', 30, '1357908642', 'XXXX456789XXX', 'Asesor Dep');

INSERT INTO empleados (nombre, apellidos, sexo, estado_civil, edad, telefono, rfc, Puesto) 
VALUES ('Ana', 'Martínez', 'Femenino', 'Casada', 25, '2468013579', 'XXXX987654XXX', 'Recepcionista');

-- Registros para usuarios
INSERT INTO usuarios (nombre_usuario, contraseña) 
VALUES ('gerente', '1234');

INSERT INTO usuarios (nombre_usuario, contraseña) 
VALUES ('nutriologo', '1234');

INSERT INTO usuarios (nombre_usuario, contraseña) 
VALUES ('asesor', '1234');

INSERT INTO usuarios (nombre_usuario, contraseña) 
VALUES ('recepcionista', '1234');

-- Registros para asignación de usuarios a empleados
INSERT INTO asignacion_usuario_empleado (id_usuario, id_empleado) 
VALUES (1, 1); -- Juan Pérez (Gerente)

INSERT INTO asignacion_usuario_empleado (id_usuario, id_empleado) 
VALUES (2, 2); -- María González (Nutriologo)

INSERT INTO asignacion_usuario_empleado (id_usuario, id_empleado) 
VALUES (3, 3); -- Carlos López (Asesor Deportivo)

INSERT INTO asignacion_usuario_empleado (id_usuario, id_empleado) 
VALUES (4, 4); -- Ana Martínez (Recepcionista)



