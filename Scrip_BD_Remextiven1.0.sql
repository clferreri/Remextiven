-- CREATE DATABASE GestionRemextiven
--     DEFAULT CHARACTER SET UTF8MB4
--     DEFAULT COLLASE UTF8MB4 UTF8MB4_unicode_ci;

-- USE GestionRemextiven;


CREATE TABLE UsuariosR(
    IdUsuarioR AUTO_INCREMENT NOT NULL,
    Email  VARCHAR(40) NOT NULL,
    Contraseña VARCHAR(30) NOT NULL,
    FechaRegistro DATE NOT NULL,
    IdRol TINYINT(4) NOT NULL,
    Activo TINYINT NOT NULL,
    Verificado TINYINT(4), 
    PinTransacciones TINYINT(4),
    ApiToquen VARCHAR(32),

    CONSTRAINT PK_UsuarioR PRIMARY KEY (IdUsuarioR),
    CONSTRAINT FK_UsuarioR_TipoUsuario FOREIGN KEY (IdRol) REFERENCES TipoUsuarioR(IdTipo)
);


CREATE TABLE TipoUsuariosR (
    IdTipo TINYINT NOT NULL,
    Tipo VARCHAR(20) NOT NULL,
    Activo TINYINT NOT NULL,

    CONSTRAINT PK_TipoUsuarioR PRIMARY KEY (IdTipo)
);