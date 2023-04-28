create database disco;
use disco;

create table `user`(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
name				nvarchar(64) not null,
surname				nvarchar(64) not null,
telephone_number	nvarchar(20) not null,
birth_date 			date not null,
email				nvarchar(64) not null,
pw					nvarchar(64) not null
);

create table prenotation(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
id_user				int unsigned not null,
id_event			int unsigned not null,
id_table			int unsigned,
date_prenotation	date not null
)

create table `table`(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
name				nvarchar(64) not null,
num_people			int unsigned not null
)

create table event(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
name				nvarchar(64) not null,
date_event			date not null,
start_hour			date not null,
end_hour 			date not null,
description			nvarchar(500) not null,
id_room				int unsigned not null
)

create table room(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
capacity 			int unsigned not null,
description			nvarchar(500) not null
)

ALTER TABLE prenotation ADD CONSTRAINT fk_user_prenotation FOREIGN KEY ( id_user ) REFERENCES `user` ( id );
ALTER TABLE prenotation ADD CONSTRAINT fk_user_event FOREIGN KEY ( id_event ) REFERENCES event ( id );
ALTER TABLE prenotation ADD CONSTRAINT fk_user_table FOREIGN KEY ( id_table ) REFERENCES `table` ( id );
ALTER TABLE event ADD CONSTRAINT fk_event_room FOREIGN KEY ( id_room ) REFERENCES room ( id );











