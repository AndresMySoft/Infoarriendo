/*==============================================================*/
/* dbms name:      infoarriendo                                 */
/* created for:    andres cardozo                               */
/*==============================================================*/


create database infoarriendo;

use infoarriendo;

drop table if exists deudor;

drop table if exists empresa;

drop table if exists empresa_deudor;

drop table if exists propietario;

drop table if exists tipo;

/*==============================================================*/
/* table: deudor                                                */
/*==============================================================*/
create table deudor
(
   cedula               varchar(15) not null,
   nombre_deu           varchar(50) not null,
   primary key (cedula)
);

/*==============================================================*/
/* table: empresa                                               */
/*==============================================================*/
create table empresa
(
   nick                 varchar(50) not null,
   id                   int not null,
   cc_propietario       varchar(15) not null,
   pass                 varchar(15) not null,
   nit_rut              varchar(30) not null,
   telefono             int(30) not null,
   direccion            varchar(50) not null,
   correo               varchar(50),
   ciudad               varchar(50) not null,
   primary key (nick)
);

/*==============================================================*/
/* table: empresa_deudor                                        */
/*==============================================================*/
create table empresa_deudor
(
   nick                 varchar(50) not null,
   cedula               varchar(15) not null,
   ciudad               varchar(50) not null,
   valor                varchar(30) not null,
   tiempo_deuda         varchar(30) not null,
   fecha                varchar(30),
   primary key (nick, cedula)
);

/*==============================================================*/
/* table: propietario                                           */
/*==============================================================*/
create table propietario
(
   cc_propietario       varchar(15) not null,
   nombre_prop          varchar(50) not null,
   telefono_prop        int(30),
   movil_prop           int(30),
   correo_prop          varchar(40),
   ciudad_prop          varchar(30),
   primary key (cc_propietario)
);

/*==============================================================*/
/* table: tipo                                                  */
/*==============================================================*/
create table tipo
(
   id                   int not null,
   nombre_tipo          varchar(40) not null,
   primary key (id)
);

alter table empresa add constraint fk_empresa_tipo foreign key (id)
      references tipo (id) on delete restrict on update restrict;

alter table empresa add constraint fk_propietario_empresa foreign key (cc_propietario)
      references propietario (cc_propietario) on delete restrict on update restrict;

alter table empresa_deudor add constraint fk_empresa_deudor foreign key (nick)
      references empresa (nick) on delete restrict on update restrict;

alter table empresa_deudor add constraint fk_empresa_deudor2 foreign key (cedula)
      references deudor (cedula) on delete restrict on update restrict;

