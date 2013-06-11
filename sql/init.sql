CREATE DATABASE IF NOT EXISTS clacktastic;

USE clacktastic;

CREATE TABLE IF NOT EXISTS research
(
	title VARCHAR(200),
	image BLOB,
	paragraph TEXT,
	PRIMARY KEY (title)
);
