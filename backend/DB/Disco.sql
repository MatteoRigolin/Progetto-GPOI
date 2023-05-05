create database disco;
use disco;

create table event(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
name				nvarchar(64) not null,
date_event			date not null,
start_hour			time not null,
end_hour 			time not null,
description			nvarchar(500) not null,
id_room				int unsigned not null,
event_active		BOOLEAN  NOT NULL DEFAULT (TRUE)
);

create table room(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
capacity 			int unsigned not null,
room_description	nvarchar(500) not null,
room_active			BOOLEAN  NOT NULL DEFAULT (TRUE)
);

create table `user`(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
email            	NVARCHAR(64)  NOT null,
pw 					NVARCHAR(256) not null,
user_active			BOOLEAN  NOT NULL DEFAULT (TRUE) 
);

ALTER TABLE event ADD CONSTRAINT fk_event_room FOREIGN KEY ( id_room ) REFERENCES room ( id );