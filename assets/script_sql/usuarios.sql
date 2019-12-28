create table if not exists usuarios(
    cod_usuario int(10) AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    documento varchar(10) unique not null,
    usuario varchar(100) unique not null,
    password text not null,
    activo tinyint default 1,
    createAT timestamp,
    upgradeAT timestamp on update CURRENT_TIMESTAMP
 );

 CREATE TABLE IF NOT EXISTS perfiles(
    cod_perfil int(10) AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(50) unique,
    activo tinyint default 1,
    createAT timestamp,
    upgradeAT timestamp on update CURRENT_TIMESTAMP
);

 CREATE TABLE IF NOT EXISTS datos_usuarios (
    cod_datos_usuario int(10) AUTO_INCREMENT PRIMARY KEY,
    email varchar(150) unique,
    cumpleanos date,
    telefono varchar(10),
    direccion varchar(150),
    cod_usuario int(10),
    cod_perfil int(10),
    FOREIGN KEY (cod_usuario) REFERENCES usuarios(cod_usuario),
    FOREIGN KEY (cod_perfil) REFERENCES perfiles(cod_perfil)
);