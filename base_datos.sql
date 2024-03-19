create database centronutricion;
use centronutricion;

CREATE TABLE Cliente (
    ID_Cliente INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellidos VARCHAR(50),
    Edad INT,
    Sexo VARCHAR(10),
    Telefono VARCHAR(15)
);

CREATE TABLE ServicioCliente (
    ID_ServicioCliente INT AUTO_INCREMENT PRIMARY KEY,
    ID_Cliente INT,
    Tipo_Servicio VARCHAR(100),
    Fecha_Cita DATE,
    Hora_Cita TIME,
    FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente)
);

CREATE TABLE PagosCliente (
    ID_PagoCliente INT AUTO_INCREMENT PRIMARY KEY,
    ID_Cliente INT,
    Fecha_Impresion_Ticket DATE,
    Total_Pago_Servicio DOUBLE(10, 2),
    FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente)
);

CREATE TABLE MedicionesCliente (
    ID_Medicion INT AUTO_INCREMENT PRIMARY KEY,
    ID_Cliente INT,
    Altura DOUBLE(5, 2),
    Peso_Actual DOUBLE(5, 2),
    Circunferencia_Brazo_CMD DOUBLE(5, 2),
    Circunferencia_Cintura DOUBLE(5, 2),
    Circunferencia_Cadera DOUBLE(5, 2),
    Pliegue_Tricipital DOUBLE(5, 2),
    Pliegue_Bicipital DOUBLE(5, 2),
    Pliegue_Subescapular DOUBLE(5, 2),
    Pliegue_Suprailiaco DOUBLE(5, 2),
    Masa_Grasa DOUBLE(5, 2),
    Masa_Libre_Grasa DOUBLE(5, 2),
    Porcentaje_Grasa DOUBLE(5, 2),
    Musculatura DOUBLE(5, 2),
    Musculatura_Total DOUBLE(5, 2),
    Distribucion_Grasa_Corporal VARCHAR(50),
    Enfermedades_Asociadas VARCHAR(100),
    Tipo_Distribucion_Grasa_Corporal VARCHAR(50),
    Patron_Distribucion VARCHAR(50),
    FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente)
);

CREATE TABLE Ejercicios (
    ID_Ejercicio INT AUTO_INCREMENT PRIMARY KEY,
    Dia_Semana VARCHAR(15),
    Ejercicio VARCHAR(100),
    Series VARCHAR(50),
    Repeticiones VARCHAR(50),
    Descanso VARCHAR(50),
    ID_Cliente INT,
    FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente)
);


CREATE TABLE PlanAlimenticio (
    ID_PlanAlimenticio INT AUTO_INCREMENT PRIMARY KEY,
    Macro_Comida VARCHAR(50),
    Proteinas VARCHAR(50),
    Carbohidratos VARCHAR(50),
    Frutas VARCHAR(50),
    Gramos_Por_Porcion VARCHAR(50),
    Grasas VARCHAR(50),
    Acompanamiento VARCHAR(50),
    Vegetales_Abundantes VARCHAR(50),
    Bebidas VARCHAR(50),
    Equivalencia VARCHAR(50),
    Notas VARCHAR(100),
    Recetas VARCHAR(100),
    Alimentos_Recomendados VARCHAR(100),
    Gramos_Por_Porcion_Recomendada VARCHAR(50),
    Suplementacion_Sugerida_Recomendada VARCHAR(100),
    ID_Cliente INT,
    FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente)
);




CREATE TABLE Empleados (
    ID_Empleado INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellidos VARCHAR(50),
    Sexo VARCHAR(10),
    Estado_Civil VARCHAR(20),
    Edad INT,
    Telefono VARCHAR(15),
    RFC VARCHAR(15),
    Firma BLOB
);

CREATE TABLE PagoEmpleados (
    ID_PagoEmpleado INT AUTO_INCREMENT PRIMARY KEY,
    Fecha_Pago DATE,
    Nombre_Recibe VARCHAR(50),
    Cantidad_Pago DOUBLE(10, 2),
    Concepto_Pago VARCHAR(100),
    Forma_Pago VARCHAR(50),
    Deducciones DOUBLE(10, 2),
    Monto_Total DOUBLE(10, 2),
    ID_Empleado INT,
    FOREIGN KEY (ID_Empleado) REFERENCES Empleados(ID_Empleado)
);

CREATE TABLE TiempoTrabajado (
    ID_TiempoTrabajado INT AUTO_INCREMENT PRIMARY KEY,
    ID_Empleado INT,
    Horas_Extras INT,
    Dias_Trabajados VARCHAR(50),
    Total_Horas_Trabajadas INT,
    Numero_Cuenta INT,
    FOREIGN KEY (ID_Empleado) REFERENCES Empleados(ID_Empleado)
);

CREATE TABLE Asistencia (
    ID_Asistencia INT AUTO_INCREMENT PRIMARY KEY,
    ID_Empleado INT,
    Fecha DATE,
    Hora_Llegada TIME,
    Hora_Salida TIME,
    FOREIGN KEY (ID_Empleado) REFERENCES Empleados(ID_Empleado)
);

CREATE TABLE Usuarios (
    ID_Usuario INT AUTO_INCREMENT PRIMARY KEY,
    Nombre_Usuario VARCHAR(50),
    Contraseña VARCHAR(50)
);


