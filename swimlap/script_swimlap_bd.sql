﻿drop table if exists T_E_CLUB_CLU cascade;
drop table if exists T_E_SEASON_SEA cascade;
drop table if exists T_E_SWIMMER_SWI cascade;
drop table if exists T_E_RACE_RAC cascade;
drop table if exists T_E_ROUND_ROU cascade;
drop table if exists T_E_EVENT_EVE cascade;
drop table if exists T_E_MEETING_MEE cascade;
drop table if exists T_J_RECORD_REC cascade;

create table if not exists T_E_CLUB_CLU (
   CLU_ID integer not null,
   CLU_NAME varchar(80) not null,
   constraint PK_CLUB primary key (CLU_ID),
   constraint UQ_CLUB unique (CLU_ID)
);

create table if not exists T_E_SEASON_SEA (
   SEA_ID serial not null,
   SEA_START_DATE date not null,
   SEA_END_DATE date not null,
   constraint PK_SEASON primary key (SEA_ID)
);

create table if not exists T_E_SWIMMER_SWI (
   SWI_ID integer not null,
   SWI_FIRSTNAME varchar(50) not null,
   SWI_LASTNAME varchar(50) not null,
   SWI_DATEOFBIRTH date,
   SWI_GENDER char(5) not null,
   SWI_CLU_ID integer not null,
   constraint PK_SWIMMER primary key (SWI_ID),
   constraint UQ_SWIMMER unique (SWI_ID),
   constraint CK_SWIMMER_SWI_GENDER check (SWI_GENDER IN ('F','M'))
);

create table if not exists T_E_RACE_RAC (
   RAC_ID integer not null,
   RAC_DIST integer not null,
   RAC_STYLE varchar(20) not null,
   RAC_IS_RELAY boolean not null,
   RAC_GENDER char(5) not null,
   constraint PK_RACE primary key (RAC_ID),
   constraint UQ_RACE unique (RAC_ID),
   constraint CK_RACE_RAC_DIST check (RAC_DIST IN (25, 50, 100, 200, 300, 400, 500, 800, 1000, 1500, 3000, 5000)),
   constraint CK_RACE_RAC_STYLE check (RAC_STYLE IN ('Nage Libre', 'Dos', 'Brasse', 'Papillon', '4 Nages')),
   constraint CK_RACE_RAC_GENDER check (RAC_GENDER IN ('F','M'))
);

create table if not exists T_E_ROUND_ROU (
   ROU_ID integer not null,
   ROU_NAME varchar(50) not null,
   constraint PK_ROUND primary key (ROU_ID),
   constraint UQ_ROUND unique (ROU_ID)
);

create table if not exists T_J_RECORD_REC (
   REC_ID integer not null,
   REC_SWI_ID integer not null,
   REC_RAC_ID integer not null,
   REC_SWIMTIME_25 numeric(10),
   REC_SWIMTIME_50 numeric(10),
   constraint PK_RECORD primary key (REC_ID),
   constraint UQ_RECORD unique (REC_ID)
);

create table if not exists T_E_MEETING_MEE (
   MEE_ID integer not null,
   MEE_NAME varchar(50) not null,
   MEE_CITY varchar(50) not null,
   MEE_START_DATE date not null,
   MEE_END_DATE date not null,
   MEE_POOL_SIZE integer not null,
   MEE_AGEGROUP_ID integer not null,
   MEE_SEA_ID integer not null,
   constraint PK_MEETING primary key (MEE_ID),
   constraint UQ_MEETING unique (MEE_ID),
   constraint CK_MEETING_MEE_POOL_SIZE check (MEE_POOL_SIZE IN (25, 50))
);

create table if not exists T_E_EVENT_EVE (
   EVE_ID serial not null,
   EVE_SWI_ID integer not null,
   EVE_MEE_ID integer not null,
   EVE_RAC_ID integer not null,
   EVE_ROU_ID integer not null,
   EVE_ORDER integer not null,
   EVE_QUALIF_TIME numeric(10) not null,
   EVE_SWIM_TIME numeric(10) not null,
   EVE_AGEGROUP_ID integer not null,
   EVE_SPLITS numeric(10)[],
   constraint PK_EVENT primary key (EVE_ID),
   constraint UQ_EVENT unique (EVE_ID)
);

alter table T_E_SWIMMER_SWI
   add constraint FK_T_E_SWIMMER_SWI_T_E_CLUB_CLU foreign key (SWI_CLU_ID)
      references T_E_CLUB_CLU (CLU_ID) on delete cascade;

alter table T_J_RECORD_REC
   add constraint FK_T_J_RECORD_REC_T_E_SWIMMER_SWI foreign key (REC_SWI_ID)
      references T_E_SWIMMER_SWI (SWI_ID) on delete cascade;

alter table T_J_RECORD_REC
   add constraint FK_T_J_RECORD_REC_T_E_RACE_RAC foreign key (REC_RAC_ID)
      references T_E_RACE_RAC (RAC_ID) on delete cascade;

alter table T_E_MEETING_MEE
   add constraint FK_T_E_MEETING_MEE_T_E_SEASON_SEA foreign key (MEE_SEA_ID)
      references T_E_SEASON_SEA (SEA_ID) on delete cascade;

alter table T_E_EVENT_EVE
   add constraint FK_T_E_EVENT_EVE_T_E_SWIMMER_SWI foreign key (EVE_SWI_ID)
      references T_E_SWIMMER_SWI (SWI_ID) on delete cascade;

alter table T_E_EVENT_EVE
   add constraint FK_T_E_EVENT_EVE_T_E_MEETING_MEE foreign key (EVE_MEE_ID)
      references T_E_MEETING_MEE (MEE_ID) on delete cascade;

alter table T_E_EVENT_EVE
   add constraint FK_T_E_EVENT_EVE_T_E_RACE_RAC foreign key (EVE_RAC_ID)
      references T_E_RACE_RAC (RAC_ID) on delete cascade;

alter table T_E_EVENT_EVE
   add constraint FK_T_E_EVENT_EVE_T_E_ROUND_ROU foreign key (EVE_ROU_ID)
      references T_E_ROUND_ROU (ROU_ID) on delete cascade;
