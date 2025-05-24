/*
-- This script is used to create the necessary tables for the databas
    Nombre bd: schoolbd
    Creado: mayo 25, 2025
    Autor: DevyFirst
    Script: Mysql

*/
CREATE TABLE TipoUsuario(
        TipoUsuarioId INTEGER AUTO_INCREMENT,
        NombreTipo VARCHAR(50),
        FechaRegistro DATETIME DEFAULT NOW(),
        PRIMARY KEY(TipoUsuarioId)
);

CREATE TABLE Usuario(
        UsuarioId INTEGER AUTO_INCREMENT,
        NickName VARCHAR(50) UNIQUE,
        Contrasenia VARCHAR(50),
        TipoUsuarioId INTEGER,
        UltimoAcceso DATETIME,
        FechaRegistro DATETIME DEFAULT NOW(),
        Activo BOOLEAN,
        PRIMARY KEY(UsuarioId),
        CONSTRAINT fk_usuarioTipoUsuario 
        FOREIGN KEY (TipoUsuarioId) REFERENCES TipoUsuario (TipoUsuarioId)
);

CREATE TABLE Carrera(
        CarreraId INTEGER AUTO_INCREMENT,
        Nombre VARCHAR(50),
        Clave VARCHAR(50),
        Active BOOLEAN DEFAULT 1,
        CreatedBy INTEGER,
        PRIMARY KEY(CarreraId)
);

CREATE TABLE EstatusEst(
        EstatusEstId INT AUTO_INCREMENT,
        NombreEstatus VARCHAR(50),
        Active BOOLEAN DEFAULT 1,
        PRIMARY KEY(EstatusEstId)
);

CREATE TABLE Periodo(
        PeriodoId INT AUTO_INCREMENT,
        NombrePeriodo VARCHAR(50) UNIQUE,
        PRIMARY KEY(PeriodoId)
);

CREATE TABLE Estudiante(
        EstudianteId INT AUTO_INCREMENT,
        Nombre VARCHAR(50),
        APaterno VARCHAR(50),
        AMaterno VARCHAR(50),
        AnioIngreso INT,
        PeriodoId INT, 
        Celular VARCHAR(10),
        Email VARCHAR(30),
        EstatusEstId INTEGER DEFAULT 1,
        FechaNacimiento DATE,
        UsuarioId INTEGER,
        CreadoPor INTEGER,
        CarreraId INTEGER,
        clave VARCHAR(12) UNIQUE,
        PRIMARY KEY(EstudianteId),
        CONSTRAINT fk_EstudianteCarrera 
        FOREIGN KEY (CarreraId) REFERENCES Carrera(CarreraId),
        CONSTRAINT fk_EstudianteEstatusEst
        FOREIGN KEY (EstatusEstId) REFERENCES EstatusEst(EstatusEstId),
        CONSTRAINT fk_EstudianteUsuario
        FOREIGN KEY (UsuarioId) REFERENCES Usuario(UsuarioId),
        CONSTRAINT fk_EstudianteUsuarioMetadata
        FOREIGN KEY (CreadoPor) REFERENCES Usuario(UsuarioId),
        CONSTRAINT fk_EstudiantePeriodo
        FOREIGN KEY (PeriodoId) REFERENCES Periodo(PeriodoId)
);

-- Insertar tipos de usuario: estudiante y docente
INSERT INTO TipoUsuario (NombreTipo) VALUES ('estudiante');
INSERT INTO TipoUsuario (NombreTipo) VALUES ('docente');
-- Insertar un usuario de tipo estudiante
INSERT INTO Usuario (NickName, Contrasenia, TipoUsuarioId, UltimoAcceso, Activo)
VALUES ('estudiante1', 'contrasenia123', 1, NOW(), TRUE);
-- Insertar un usuario de tipo docente
INSERT INTO Usuario (NickName, Contrasenia, TipoUsuarioId, UltimoAcceso, Activo)
VALUES ('docente1', 'contrasenia123', 2, NOW(), TRUE);
