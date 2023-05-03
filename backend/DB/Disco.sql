create database disco;
use disco;

create table event(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
name				nvarchar(64) not null,
date_event			date not null,
start_hour			time not null,
end_hour 			time not null,
description			nvarchar(500) not null,
id_room				int unsigned not null
);

create table room(
id 					INT UNSIGNED NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
capacity 			int unsigned not null,
room_description			nvarchar(500) not null
);

ALTER TABLE event ADD CONSTRAINT fk_event_room FOREIGN KEY ( id_room ) REFERENCES room ( id );