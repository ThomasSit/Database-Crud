DROP DATABASE IF EXISTS basiccrud;

CREATE DATABASE basiccrud;

USE basiccrud;



DROP TABLE IF EXISTS student;

CREATE TABLE student (

                         id INT NOT NULL AUTO_INCREMENT,

                         voornaam VARCHAR(50),

                         achternaam VARCHAR(50),

                         PRIMARY KEY (id),

                             email VARCHAR(50),

                             telefoonnummer VARCHAR(10),

                             straatnaam VARCHAR(50),

                             huisnummer INT,

                             huisnummer_toevoeging  VARCHAR(10),

                             woonplaats VARCHAR(50),

                             postcode VARCHAR(6)

);

USE basiccrud;


CREATE TABLE klas(
                     klasid INT NOT NULL AUTO_INCREMENT,

                     code VARCHAR(15),
                     vestiging VARCHAR(20),
                     sectie VARCHAR(20),
                     cohort INT,
                     primary key (klasid)
);


