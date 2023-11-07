create database if not exists car_comparison;

USE car_comparison;

DROP TABLE IF EXISTS car_details;

CREATE TABLE car_details (
  sno int(10) NOT NULL AUTO_INCREMENT,
  car_company varchar(25) DEFAULT NULL,
  car_model varchar(25) DEFAULT NULL,
  car_price varchar(25) DEFAULT NULL,
  fuel_type varchar(45) DEFAULT NULL,
  transmsn_type varchar(70) DEFAULT NULL,
  seats varchar(100) DEFAULT NULL,
  engine varchar(100) DEFAULT NULL,
  mileage varchar(100) DEFAULT NULL,
  merits varchar(1000) DEFAULT NULL,
  demerits varchar(1000) DEFAULT NULL,
  car_pic varchar(100) DEFAULT NULL,
  


DROP TABLE IF EXISTS register;

CREATE TABLE register (
  name varchar(100) DEFAULT NULL,
  userid varchar(100) DEFAULT NULL,
  passwrd varchar(100) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  contact varchar(100) DEFAULT NULL
) 


CREATE TABLE admin(
   name varchar(100),
   password varchar(100);
)