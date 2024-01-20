### usuarios y roles

-- tabla roles
create table roles
(
    idRol tinyint unsigned auto_increment primary key not null,
    rol varchar(30) unique not null
);

-- tabla usuarios
create table usuarios
(
    idUsuario smallint unsigned auto_increment primary key not null,
    usuNombre varchar(45) not null,
    usuApellido varchar(45) not null,
    usuEmail varchar(45) unique not null,
    usuClave varchar(72) not null,
    idRol tinyint unsigned not null,
    foreign key (idRol) references roles (idRol),
    usuActivo boolean default(1) not null
);
