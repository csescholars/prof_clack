CREATE DATABASE IF NOT EXISTS clack;

USE clack;

CREATE TABLE IF NOT EXISTS research
(
	title VARCHAR(200),
	link VARCHAR(200),
	paragraph TEXT(1024),
	PRIMARY KEY (title)
);
