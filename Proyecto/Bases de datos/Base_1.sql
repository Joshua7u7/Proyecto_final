create table Cuenta(
    idC int(3) not null,
    id_usuario int(3) not null,
    contraseña varchar(20) not null,
    nombre_usuario varchar(20) not null
  );

create table Departamento
  (
    idD int(3) not null,
    nombre_departamento varchar(20) not null
  );

create table Documento
  (
    idDoc int(3) not null,
    id_usuario int(3) not null,
    tipo_documento varchar(20) not null,
    nombre_documento varchar(20) not null
  );

create table Usuario
  (
    id_usuario int(3) not null,
    idD int(3) not null,
    nombre varchar(20) not null,
    apellidos varchar(50) not null,
    fecha_nacimiento date not null,
    tipo_usuario varchar(20) not null
  );

Alter table Cuenta add constraint PK_Cuenta Primary Key(idC);

Alter table Departamento add constraint PK_Departamento Primary Key(idD);

Alter table Documento add constraint PK_Documento Primary Key(idDoc);

Alter table Usuario add constraint PK_Usuario Primary Key(id_usuario,nombre);

Alter table Cuenta add constraint FK_Usuario Foreign Key(id_usuario) references Usuario (id_usuario) on delete cascade on update cascade;

Alter table Documento add constraint FK_Documento Foreign Key(id_usuario) references Usuario (id_usuario) on delete cascade on update cascade;

Alter table Usuario add constraint FK_Departamento Foreign Key(idD) references Departamento (idD) on delete cascade on update cascade;
