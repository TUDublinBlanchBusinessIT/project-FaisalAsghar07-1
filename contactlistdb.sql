DROP DATABASE IF EXISTS contactlist;
CREATE DATABASE contactlist;
USE contactlist;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    surname VARCHAR(30),
    forename VARCHAR(30),
    contact VARCHAR(30)
);