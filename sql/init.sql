CREATE DATABASE IF NOT EXISTS clacktastic;

USE clacktastic;

CREATE TABLE IF NOT EXISTS research
(
	title VARCHAR(200),
	image VARCHAR(25),
	paragraph TEXT,
	PRIMARY KEY (title)
);
