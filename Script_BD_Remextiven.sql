CREATE DATABASE GestionRemex_BD
    DEFAULT CHARACTER SET UTF8MB4
    DEFAULT COLLASE UTF8MB4 UTF8MB4_unicode_ci;

USE GestionRemex_BD;


-- USUARIOS DEL SISTEMA --


CREATE TABLE Verificacion(
    IdVerificacion INT NOT NULL,
    IdUsuario INT NOT NULL,
    IdDigitador INT NOT NULL,
    IdCiudadDelDocumento INT NOT NULL,
    RutaImagen VARCHAR(100) NOT NULL,  
    
    CONSTRAINT PK_Verificacion PRIMARY KEY (IdUsuario),
    CONSTRAINT FK_Veri_UsuarioVerificado FOREIGN KEY (IdUsuario) REFERENCES UsuariosR(IdUsuarioR),
    CONSTRAINT FK_Veri_UsuarioDigitador FOREIGN KEY (IdDigitador) REFERENCES UsuariosR(IdUsuarioR),
    CONSTRAINT FK_Veri_CiudadDocumento FOREIGN KEY (IdCiudadDelDocumento) REFERENCES Ciudades(IdCiudad)
)

-- TIPOS DE USUARIOS (ROLES) --


-- DATOS DE EMPRESAS REGISTRADAS --
CREATE TABLE PersonasJR (
    IdEmpresa AUTO_INCREMENT NOT NULL,
    IdUsuario INTEGER NOT NULL,
    RazonSocial VARCHAR(40) NOT NULL,
    RUT VARCHAR(12) NOT NULL,
    NombreFantasia VARCHAR(40),
    FormaJuridica VARCHAR(10),
    FechaConstitucion DATE,
    PaisConstitucion TINYINT,
    CiudadDomicilioLegal VARCHAR(50),
    DireccionDomicilioLegal VARCHAR(50),
    NumeroDireccionLegal VARCHAR (8),
    CodigoPostal VARCHAR(10),
    Tel VARCHAR (12),
    Tel2 VARCHAR (12),

    CONSTRAINT PK_EmpresaR PRIMARY KEY (IdEmpresa),
    CONSTRAINT FK_EmpresaR_UsuarioR FOREIGN KEY (IdUsuario) REFERENCES UsuariosR(IdUsuarioR)
);


-- DATOS DE PERSONAS REGISTRADAS --
CREATE TABLE PersonasFR (
    IdPersona AUTO_INCREMENT NOT NULL,
    IdUsuario INTEGER NOT NULL,
    Nombre VARCHAR(20) NOT NULL,
    ApellidoPaterno VARCHAR (25) NOT NULL,
    ApellidoMaterno VARCHAR(25) NOT NULL,
    FechaNacimiento DATE NOT NULL,
    Sexo VARCHAR(10),
    Ci VARCHAR(8),
    Nacionalidad VARCHAR(20),
    CalleDireccion VARCHAR (50),
    CodigoPostal VARCHAR(10),
    IdCiudad TINYINT,
    Tel VARCHAR(12),
    Tel2 VARCHAR(12),
    EstadoCivil VARCHAR (20),

    CONSTRAINT PK_PersonaFR PRIMARY KEY (IdPersona),
    CONSTRAINT FK_PersonaFR_Usuario FOREIGN KEY (IdUsuario) REFERENCES UsuariosR(IdUsuarioR)
);
    
-- SALDOS DE UN USUARIO --
CREATE TABLE SaldosR (
    IdUsuario INT NOT NULL,
    SaldoActivo DECIMAL(6,2) NOT NULL,
    SaldoPendienteDeCarga DECIMAL(6,2) NOT NULL,
    SaldoPendienteBaja DECIMAL(6,2) NOT NULL,

    CONSTRAINT PK_SaldoR PRIMARY KEY (IdUsuario),
    CONSTRAINT FK_Saldo_Usuario FOREIGN KEY (IdUsuario) REFERENCES UsuariosR(IdUsuarioR)
);


-- CUENTAS BANCARIA DE LOS USUARIOS --
CREATE TABLE CuentasBancosR (
    IdCuentaBancoR AUTO_INCREMENT NOT NULL,
    IdUsuario INT NOT NULL,
    NumeroCuenta VARCHAR(20),
    NombreTitular VARCHAR(20),
    ApellidoTitular VARCHAR(20),
    CiTitular VARCHAR(8),
    Alias VARCHAR(15) 

    CONSTRAINT PK_CuentaBancaria PRIMARY KEY (IdCuentaBancoR),
    CONSTRAINT FK_CuentaBancaria_UsuarioR FOREIGN KEY (IdUsuario) REFERENCES UsuariosR(IdUsuarioR)
);


-- ESTADOS DE LAS SOLICITUDES --
CREATE TABLE EstadoSolicitudes (
    IdEstado AUTO_INCREMENT NOT NULL,
    Estado VARCHAR(20),  

    CONSTRAINT PK_EstadoSolicitudes PRIMARY KEY (IdEstado)
);


-- METODOS DE PAGO --
CREATE TABLE MetodosDePago (
    IdMetodoPago AUTO_INCREMENT NOT NULL,
    MetodoPago VARCHAR (20) NOT NULL,
    Activo TINYINT NOT NULL,

    CONSTRAINT PK_MetodPago PRIMARY KEY (IdMetodoPago)
    
);


-- TIPOS DE SOLICITUDES --
CREATE TABLE TipoSolicitudes (
    IdTipoSolicitud AUTO_INCREMENT NOT NULL,
    TipoSolicitud VARCHAR(20) NOT NULL,
    Activo TINYINT NOT NULL,

    CONSTRAINT PK_TipoSolicitud PRIMARY KEY(IdTipoSolicitud)

);


-- SOLICITUDES CREADAS --
CREATE TABLE Solicitudes (
    IdSolicitud AUTO_INCREMENT NOT NULL,
    IdUsuario INT NOT NULL,
    FechaRealizada DATETIME NOT NULL,
    IdEstadoSolicitud TINYINT NOT NULL,
    IdMetodoPago TINYINT NOT NULL,
    Monto Decimal(6,2) NOT NULL,
    IdTipoSolicitud TINYINT NOT NULL,
    FechaFinalizada DATETIME,
    

    CONSTRAINT PK_Solicitud PRIMARY KEY (IdSolicitud),
    CONSTRAINT FK_Solicitud_Usuario FOREIGN KEY (IdUsuario) REFERENCES UsuariosR(IdUsuarioR),
    CONSTRAINT FK_Solicitud_Estado FOREIGN KEY (IdEstadoSolicitud) REFERENCES EstadoSolicitudes(IdEstado),
    CONSTRAINT FK_Solicitud_MetodoPago FOREIGN KEY (IdMetodoPago) REFERENCES MetodosDePago(IdMetodoPago),
    CONSTRAINT FK_Solicitud_TipoSoli FOREIGN KEY (IdTipoSolicitud) REFERENCES TipoSolicitudes(IdTipoSolicitud)
);


-- SOLICITUDES CREADAS DE TIPO ALTA --
CREATE TABLE SoliAlta (
    IdSolicitud INT NOT NULL,
    IdUsuarioAprueba INT,

    CONSTRAINT PK_SoliAlta PRIMARY KEY (IdSolicitud),
    CONSTRAINT FK_SoliAlta_Solicitud FOREIGN KEY (IdSolicitud) REFERENCES Solicitudes(IdSolicitud),
    CONSTRAINT FK_SoliAlta_Usuario FOREIGN KEY (IdUsuarioAprueba) REFERENCES UsuariosR(IdUsuarioR)
);


-- SOLICITUDES CREADAS DE TIPO BAJA --

    CREATE TABLE SoliBaja (
    IdSolicitud INT NOT NULL,
    IdCajero INT,
    IdBancoBajar INT,
    CotizacionDelDiaVES DECIMAL,
    FechaConfirmacion DATETIME,

    CONSTRAINT PK_SoliBaja PRIMARY KEY (IdSolicitud),
    CONSTRAINT FK_SoliBaja_Solicitud FOREIGN KEY (IdSolicitud) REFERENCES Solicitudes(IdSolicitud),
    CONSTRAINT FK_SoliBaja_Cajero FOREIGN KEY (IdCajero) REFERENCES UsuariosR(IdUsuarioR),
    CONSTRAINT FK_SoliBaja_Banco FOREIGN KEY (IdBancoBajar) REFERENCES CuentasBancosR (IdCuentaBancoR)
);



-- MOVIMIENTOS REALIZADOS DE UN USUARIO A OTRO --
CREATE TABLE Movimientos (
    IdMovimiento AUTO_INCREMENT NOT NULL,
    IdUsuarioEnvia INT NOT NULL,
    IdUsuarioRecibe INT NOT NULL,
    Monto DECIMAL(6,2) NOT NULL,
    FechaMovmiento DATETIME NOT NULL,

)


-- LOG DE AUDITORIA DE TODA ACCION EN EL SISTEMA --
CREATE TABLE RLogsAuditoria (
    IdAuditoria AUTO_INCREMENT NOT NULL,
    IdUsuario INT NOT NULL,
    Descripcion VARCHAR (200) NOT NULL,

    CONSTRAINT PK_LogAuditoria PRIMARY KEY (IdAuditoria),
    CONSTRAINT FK_LogAuditoria_Usuario FOREIGN KEY (IdUsuario) REFERENCES UsuariosR(IdUsuarioR)
);

CREATE TABLE LineaArqueos (
    IdLineaArqueo AUTO_INCREMENT NOT NULL,
    IdArqueo
    IdSolicitud INTEGER NOT NULL,
    TotalVES DECIMAL NOT NULL,
    TotalUSD DECIMAL NOT NULL,
);


CREATE TABLE Arqueos (
    IdArqueo AUTO_INCREMENT NOT NULL,
    FechaArqueo DATE NOT NULL,
    IdEstadoArqueo TINYINT NOT NULL,
    TotalVES DECIMAL,
    TotalUSD DECIMAL,
    IdUsuarioRealiza INTEGER NOT NULL,

);


CREATE TABLE Cotizaciones (
    IdCotizacion AUTO_INCREMENT NOT NULL,
    FechaCotizacion DATE NOT NULL,
    Moneda INT NOT NULL,
    Compra DECIMAL,
    Venta DECIMAL,

)


CREATE TABLE Moneda (
    IdMoneda AUTO_INCREMENT NOT NULL,
    Simbolo VARCHAR(10) NOT NULL,
    Nombre VARCHAR (20) NOT NULL,
    Activo TINYINT NOT NULL,
)


CREATE TABLE Prefijos(
    IdPrefijo AUTO_INCREMENT NOT NULL,
    IdPais INTEGER NOT NULL,
    Prefijo INTEGER NOT NULL,
    Activo BITE NOT NULL,
    
)


