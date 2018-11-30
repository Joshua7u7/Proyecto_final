create table Estado(
id_usuario int(3) not null,
id_estado int(3) not null,
nivel_beca int(5) not null,
puntaje int(10) not null,
revision int(3) not null
);

create table Cuenta(
    idC int(3) not null,
    id_usuario int(3) not null,
    contrasena varchar(20) not null,
    nombre_usuario varchar(20) not null
  );

create table Departamento
  (
    idD int(3) not null,
    nombre_departamento varchar(20) not null
  );

create table Usuario
  (
    id_usuario int(3) not null,
    idD int(3) not null,
    nombre varchar(20) not null,
    apellidos varchar(50) not null,
    fecha_nacimiento date not null,
    numero_empleado varchar(20) not null,
    tipo_usuario varchar(20) not null
  );

    create table Actividad(
      id_act int(5) not null Primary Key AUTO_INCREMENT,
      codigo_act varchar(20) not null,
      nombre_act longtext not null,
      valor float(100,3)
    );

    create table Archivo(
      id_arch int(5) not null Primary key AUTO_INCREMENT,
      nombre_arch varchar(200) not null,
      id_usuario int(3) not null,
      codigo_arch int(5) not null,
      observacion varchar(30) not null,
      valor_obtenido float(100,4) not null
      );




Alter table Estado add constraint PK_Estado Primary Key(id_usuario,id_estado);

Alter table Cuenta add constraint PK_Cuenta Primary Key(idC);

Alter table Departamento add constraint PK_Departamento Primary Key(idD);

Alter table Usuario add constraint PK_Usuario Primary Key(id_usuario,nombre);

Alter table Cuenta add constraint FK_Usuario Foreign Key(id_usuario) references Usuario (id_usuario) on delete cascade on update cascade;

Alter table Usuario add constraint FK_Departamento Foreign Key(idD) references Departamento (idD) on delete cascade on update cascade;

Alter table Archivo add constraint FK_Arch Foreign Key(codigo_arch) references Actividad (id_act) on delete cascade on update cascade;

Alter table Archivo add constraint FK_A_U Foreign Key(id_usuario) references Usuario(id_usuario) on delete cascade on update cascade;

Alter table Estado add constraint FK_Estado Foreign Key(id_usuario) references Usuario(id_usuario) on delete cascade on update cascade;

Insert into departamento(idD,nombre_departamento) values
(2,'Sistemas'),
(3,'Redes'),
(1,'Basicas');

INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'I.1', 'ANTIGUEDAD COMO DOCENTE DE CARRERA DE TIEMPO COMPLETO EN EL IPN.',300);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'I.2', 'PRESEA JUAN DE DIOS BATIZ',300);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'I.3', 'MEDALLA IGNACIO MANUEL ALTAMIRANO',500);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'I.4', 'PRESEA CARLOS VALLEJO MAARQUEZ',500);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'I.5', 'DIPLOMA DE MAESTRO DECANO',400);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'I.6', 'PRESEA RAFAEL RAMIREZ',200);

INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.1.1', 'ANTIGUUEDAD COMO DOCENTE DE CARRERA DE TIEMPO COMPLETO EN EL IPN.',0.83);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.1.2', 'LABORATORIO (NMS, NS Y POSGRADO)',0.5);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.1.3', 'CLASE TEORICA – PRACTICA (NMS, NS Y POSGRADO)',0.66);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.1.4', 'CLASE DE SEMINARIO, ESTANCIA O TRABAJO, IMPARTIDA EN LAS SECCIONES DE POSGRADO DEL I.P .N.',0.25);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.1.5', 'RESULTADO DE LA EVALUACION DEL DOCENTE FRENTE A GRUPO',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.1.6', 'CURSOS POR EL SISTEMA ABIERTO DE ENSENANZA',2.5);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.2.1', 'FORMACIÓN DE PERSONAL O DE GRUPOS DE INVESTIGACIÓN (B.E.I.F.I.)',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.2.2', 'ADIESTRAMIENTO TÉCNICO O CURSOS DE CAPACITACIÓN CON RECONOCIMIENTO OFICIAL O REGISTRO',1);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.2.3', 'CURSOS IMPARTIDOS PARA LA FORMACIÓN O ACTUALIZACIÓN DE PROFESORES CON RECONOCIMIENTO OFICIAL O REGISTRO',1);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.3.1', 'NIVEL MEDIO SUPERIOR',5);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.3.2', 'NIVEL LICENCIATURA',5);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.3.3', 'NIVEL POSGRADO',5);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.4.1', 'TESIS TRADICIONAL DE NIVEL MEDIO SUPERIOR',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.4.2', 'TESIS TRADICIONAL DE NIVEL SUPERIOR',80);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.4.3', 'MAESTRÍA',250);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.4.4', 'DOCTORADO',500);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.4.5', 'ESPECIALIZACIÓN O DIPLOMADO CON TESINA',70);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.5', 'COORDINADOR DE SEMINARIOS DE TITULACIÓN EN EL I.P.N.',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.6', 'DIRECTOR DE TESINAS PARA SEMINARIOS DE TITULACIÓN EN EL I.P.N.',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.7', 'SINODAL DE EXAMEN PROFESIONAL (N.M.S. Y N.S.) EN EL I.P.N.',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.8', 'SINODAL EN SISTEMAS DE TITULACIÓN POR SEMINARIO O EXAMEN GENERAL DE CONOCIMIENTOS EN EL I.P.N.',3);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.9', 'SINODAL EN EXAMEN PREDOCTORAL O DE GRADO EN EL I.P.N.',20);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.1', 'DIRECTOR DE ESCUELA, CENTRO, UNIDAD O EQUIVALENTE',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.2', 'SUBDIRECTOR DE ESCUELA O JEFE DE LA SECCIÓN DE GRADUADOS',75);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.3', 'JEFE DE DEPARTAMENTO',30);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.4', 'JEFE DE CARRERA O COORDINADOR DE POSGRADO',30);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.5', 'SUBJEFE DE DEPARTAMENTO',30);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.6', 'JEFE DE SECCIÓN',30);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.7', 'JEFE DE LABORATORIO O TALLER',15);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.8', 'SUBJEFE DE CARRERA O JEFE DE OFICINA',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.9', 'JEFE DE SERVICIO SOCIAL DE LA ESCUELA',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.10', 'JEFE DE SERVICIO SOCIAL DE CARRERA O ESPECIALIDAD',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.11', 'JEFE DE SERVICIO SOCIAL EN EL DEPARTAMENTO O SUBJEFE DE LABORATORIO O TALLER',5);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.12', 'PRESIDENTE O JEFE DE ACADEMIA DE ASIGNATURAS AFINES',40);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.10.13', 'PRESIDENTE DE ACADEMIA DE ASIGNATURA O MÓDULO O COORDINADOR DE ACADEMIA',20);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.11.1', 'TÉCNICO A NIVEL MEDIO SUPERIOR',60);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.11.2', 'LICENCIATURA',100);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.12.1', 'ESPECIALIZACIÓN CON DIPLOMA Y TESINA',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.12.2', 'ESPECIALIZACIÓN CON DIPLOMA',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.12.3', 'MAESTRÍA CON GRADO',400);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.12.4', 'DOCTORADO CON GRADO',600);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.12.5', 'EXAMEN PREDOCTORAL',150);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.12.6', 'ESTUDIOS POSDOCTORALES TERMINADOS',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.12.7', 'ESTANCIAS DE INVESTIGACIÓN',5);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.13.1', 'CON EXAMEN',1);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.13.2', 'SIN EXAMEN',1);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.14.1', 'COORDINACIÓN EN LA ELABORACIÓN DE UN PLAN DE ESTUDIOS DE LA CARRERA O POSGRADO',60);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.14.2', 'PARTICIPACIÓN EN LA ELABORACIÓN O ACTUALIZACIÓN DE UN PLAN DE ESTUDIOS',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.14.3', 'COORDINACIÓN EN LA ELABORACIÓN O ACTUALIZACIÓN DE UN PROGRAMA DE ESTUDIOS',30);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.14.4', 'PARTICIPACIÓN EN LA ELABORACIÓN O ACTUALIZACIÓN DE UN PROGRAMA DE ESTUDIOS',25);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.15.1', 'ASESORÍA DE ALUMNOS EN SERVICIO SOCIAL (SÓLO EN PROYECTOS ACADÉMICOS)',2);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.15.2', 'ASESORÍA DE ESTUDIANTES PARTICIPANTES EN OLIMPIADAS DE LAS CIENCIAS O CONCURSOS DE SOFTWARE A NIVEL NACIONAL O CONCURSO PIERRE-FERMAT',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.15.3', 'COORDINACIÓN DE PROYECTOS QUE HAYAN CONDUCIDO A LA CREACIÓN DE EMPRESAS DE BASE TECNOLÓGICA (EMPRENDEDORES JUVENILES)',60);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.16.1', 'COORDINACIÓN DEL PROGRAMA INSTITUCIONAL DE TUTORÍAS',30);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.16.2', 'TUTOR CON ATENCIÓN GRUPAL A ALUMNOS',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.16.3', 'TUTOR CON ATENCIÓN INDIVIDUAL A ALUMNOS',20);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'II.17', 'COORDINADOR DE DIPLOMADO EN FORMACIÓN Y ACTUALIZACIÓN DOCENTE PARA UN NUEVO MODELO EDUCATIVO',150);

INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.1', 'APUNTES, CUADERNOS Y PROBLEMARIOS DEL CURSO COMPLETO, AVALADOS POR LA ACADEMIA (PUBLICADOS POR EL I.P.N. U OTRAS EDITORIALES)',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.2', 'MANUAL DE PRÁCTICAS DE LABORATORIO, AVALADAS POR LA ACADEMIA Y QUE CUBRAN UN CURSO COMPLETO (PUBLICADAS POR EL I.P.N. U OTRAS EDITORIALES)',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.3', 'ACTUALIZACIÓN DE APUNTES, MANUALES Y PROBLEMARIOS (PUBLICADOS POR EL I.P.N. U OTRAS EDITORIALES)',15);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.4', 'BANCO DE REACTIVOS SOLICITADOS POR LA D.E.S. O LA D.E.M.S. QUE CUBRAN EL PROGRAMA COMPLETO DE LA ASIGNATURA CON 100 REACTIVOS COMO MÍNIMO E INÉDITOS',40);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.5', 'COLECCIÓN DE DIAPOSITIVAS O DIAPORAMAS QUE CUBRAN EL CURSO COMPLETO',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.6', 'MATERIAL DIDÁCTICO PARA LAS COMUNIDADES COMO PARTE DE PROYECTOS INSTITUCIONALES',25);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.7', 'PARTICIPACIÓN EN PROGRAMAS DE RADIO, TELEVISIÓN O EN VIDEO CASSETTES, COMO GUIONISTA, CONDUCTOR O ASESOR ACADÉMICO O CIENTÍFICO',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.8', 'PROTOTIPOS DE APOYO DIDÁCTICO AVALADOS POR LA ACADEMIA',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.9', 'TRADUCCIONES PUBLICADAS DE LIBROS, ARTÍCULOS Y TRABAJOS TÉCNICOS (CON CRÉDITO AL I.P.N.)',1);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.10', 'LIBROS ACADÉMICOS PUBLICADOS (CON NÚMERO DE EDICIÓN, NÚMERO DE IDENTIFICACIÓN INTERNACIONAL (ISBN) Y CON CRÉDITO AL I.P.N.)',500);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.10.1', 'POLILIBRO ACADÉMICO',500);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.11', 'REEDICIÓN DE LIBROS ACADÉMICOS PUBLICADOS (CON NÚMERO DE EDICIÓN, NÚMERO DE IDENTIFICACIÓN INTERNACIONAL (ISBN) Y CON CRÉDITO AL I.P.N.)',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.12', 'CONTRIBUCIÓN POR CAPÍTULO',70);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.13', 'EVALUACIÓN TÉCNICA DE LIBROS ANTES DE PUBLICARSE',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.14', 'EVALUACIÓN TÉCNICA DE LIBROS DESPUÉS DE PUBLICADOS',10);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.15.1', 'TRABAJOS DE INVESTIGACIÓN PUBLICADOS EN REVISTAS DE DIFUSIÓN NACIONAL CON ARBITRAJE',80);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.15.2', 'TRABAJOS DE INVESTIGACIÓN PUBLICADOS EN REVISTAS DE DIFUSIÓN NACIONAL SIN ARBITRAJE',25);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.15.3', 'TRABAJOS DE INVESTIGACIÓN PUBLICADOS EN REVISTAS DE DIFUSIÓN INTERNACIONAL CON ARBITRAJE (THOMSON REUTERS) Y EN REVISTAS NACIONALES INCLUIDAS EN EL PADRÓN DEL CONACYT',200);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.16', 'PUBLICACIONES CIENTÍFICAS Y TECNOLÓGICAS EN BOLETINES INSTITUCIONALES (REGISTRADOS A TRAVÉS DEL ABOGADO GENERAL), ENSAYOS PUBLICADOS Y ARTÍCULOS DE DIVULGACIÓN SOBRE TEMAS DEL ÁREA O ESPECIALIDAD DEL BECARIO',20);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.1', 'INSTITUCIONAL (SIN PONENCIA PUBLICADA)',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.2', 'INSTITUCIONAL (CON RESUMEN PUBLICADO EN MEMORIA)',15);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.3', 'INSTITUCIONAL (PUBLICADO EN EXTENSO)',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.4', 'INSTITUCIONAL (OTRO TIPO DE PARTICIPACIÓN: MODERADOR, RELATOR, ORGANIZADOR, EVALUADOR DE PONENCIAS, ETC.)',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.5', 'NACIONAL (SIN PONENCIA PUBLICADA)',15);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.6', 'NACIONAL (CON RESUMEN PUBLICADO EN MEMORIA)',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.7', 'NACIONAL (PUBLICADO EN EXTENSO)',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.8', 'NACIONAL (OTRO TIPO DE PARTICIPACIÓN: MODERADOR, RELATOR, ORGANIZADOR, EVALUADOR DE PONENCIAS, ETC.)',15);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.9', 'NACIONAL (ASISTENCIA)',2);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.10', 'INTERNACIONAL (SIN PONENCIA PUBLICADA)',15);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.11', 'INTERNACIONAL (CON RESUMEN PUBLICADO EN MEMORIA)',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.12', 'INTERNACIONAL (PUBLICADO EN EXTENSO)',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.13', 'INTERNACIONAL, DERIVADO DE INVESTIGACIÓN CON REGISTRO EN LA S.I.P. Y PUBLICADO EN EXTENSO',40);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.14', 'INTERNACIONAL (OTRO TIPO DE PARTICIPACIÓN: MODERADOR, RELATOR, ORGANIZADOR, EVALUADOR DE PONENCIAS, ETC.)',15);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.17.15', 'INTERNACIONAL (ASISTENCIA)',3);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.18.1', 'CONFERENCIA NACIONAL',10);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.18.2', 'CONFERENCIA INTERNACIONAL',15);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.18.3', 'CONFERENCIA PROFESIOGRÁFICA O INSTITUCIONAL',10);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.19', 'INFORME TÉCNICO FINAL DE INVESTIGACIÓN SATISFACTORIA, POR CONTRATO O POR CONVENIO INSTITUCIONAL (POR ENCARGO DE INSTANCIAS EXTERNAS)',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.20', 'REGISTRO DE PATENTES (CON CRÉDITO AL I.P.N.)',200);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.21', 'MARCAS O CERTIFICADOS DE INVENCIÓN (CON CRÉDITO AL I.P.N.)',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.22', 'DESARROLLO DE PROCESOS INDUSTRIALES (CON CRÉDITO AL I.P.N.)',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.23', 'DISEÑO Y SELECCIÓN DE EQUIPO PARA LA IMPLANTACIÓN DE INDUSTRIAS (CON CRÉDITO AL I.P .N.)',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.24', 'DISEÑO DE PLANTAS PILOTO, PROTOTIPOS E INSTRUMENTOS (CON CRÉDITO AL I.P.N.)',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.25', 'CONSULTORÍA INDUSTRIAL O ASESORÍA A LAS COMUNIDADES, AVALADAS POR EL USUARIO (CON CRÉDITO AL I.P.N.)',80);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.26', 'DESARROLLO DE TÉCNICAS AGRONÓMICAS, ADMINISTRATIVAS, ETC. (CON CRÉDITO AL I.P.N.)',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.27', 'ADAPTACIÓN DE PROCESOS INDUSTRIALES (CON CRÉDITO AL I.P.N.)',100);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.28.1', 'DESARROLLO DE PROGRAMAS DE CÓMPUTO DE INVESTIGACIÓN O DIDÁCTICOS',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.28.2', 'ADAPTACIÓN DE PROGRAMAS DE CÓMPUTO DE INVESTIGACIÓN O DIDÁCTICOS',30);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.29.1', 'NIVEL MEDIO SUPERIOR O SUPERIOR',1);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.29.2', 'NIVEL POSGRADO',1);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.29.3.1', 'NIVEL MEDIO SUPERIOR',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.29.3.2', 'NIVEL SUPERIOR',25);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.29.3.3', 'MAESTRÍA',60);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.29.3.4', 'DOCTORADO',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.29.3.5', 'ESPECIALIZACIÓN O DIPLOMADO CON TESINA',40);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.30', 'DOMINIO DEL IDIOMA',50);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.31.1', 'MIEMBRO DE JURADO PARA PREMIOS INTERNACIONALES',100);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.31.2', 'MIEMBRO DE JURADO PARA PREMIOS NACIONALES',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.31.3', 'MIEMBRO DE JURADO PARA PREMIOS DE CATÁLOGO DE DISTINCIONES ACADÉMICAS',25);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.32', 'SINODAL PARA EXAMEN DE OPOSICIÓN, POR PARTE DE LA ACADEMIA',6);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.33', 'EVALUADOR DE PROYECTOS DE INVESTIGACIÓN (CONACYT, CONADE, S.I.P., CINVESTAV Y OTROS SIMILARES)',60);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.33.1', 'EVALUADOR DE E.D.D.',0);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.34.1', 'CIRCULACIÓN NACIONAL',30);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.34.2', 'CIRCULACIÓN INTERNACIONAL',40);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.35.1', 'PREMIO INTERNACIONAL',3000);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.35.2', 'PREMIO NACIONAL',1000);


INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.36', 'MIEMBRO DEL SISTEMA NACIONAL DE INVESTIGADORES',50);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.37', 'PROFESOR INVITADO POR UNA INSTITUCIÓN EDUCATIVA DIFERENTE DEL I.P.N.',60);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.38', 'MENCIÓN HONORÍFICA OBTENIDA POR EL DOCENTE EN SU LICENCIATURA',400);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.39', 'MENCIÓN HONORÍFICA OBTENIDA POR EL DOCENTE EN EL EXAMEN DE GRADO DE MAESTRÍA',400);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.40', 'MENCIÓN HONORÍFICA OBTENIDA POR EL DOCENTE EN EL DOCTORADO',600);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.41', 'COMISIONES ACADÉMICAS EN LAS ESCUELAS, CENTROS O UNIDADES DEL I.P.N.',20);
INSERT INTO `actividad` (`id_act`, `codigo_act`, `nombre_act`,`valor`) VALUES (NULL, 'III.42', 'COMISIONES ACADÉMICAS A NIVEL INSTITUCIONAL Y NACIONAL',50);
