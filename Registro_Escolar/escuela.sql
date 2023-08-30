create database escuela;
use escuela; 
set sql_mode='';
CREATE TABLE estudiantes(
    id bigint unsigned not null primary key auto_increment,
    nombre varchar(255) not null,
    apellido varchar(255) not null,
    direccion varchar(255) not null,
    fecha_nacimiento date not null,
    grado varchar(255) not null,
    telefono int not null,
    seccion varchar(255) not null
);


CREATE TABLE materias(
    id bigint unsigned not null primary key auto_increment,
    nombre varchar(255) not null
);


CREATE TABLE notas_estudiantes_materias(
    id bigint unsigned not null primary key auto_increment,
    id_estudiante bigint unsigned not null,
    id_materia bigint unsigned not null,
    puntaje decimal(9,2) not null,
    foreign key (id_estudiante) references estudiantes(id) on delete cascade on update cascade,
    foreign key (id_materia) references materias(id) on delete cascade on update cascade
);