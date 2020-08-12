

<--CREATE DATABASE somproject; -->




  CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    phone int(20),
    password VARCHAR(255) NOT NULL,
    create_datetime DATETIME DEFAULT CURRENT_TIMESTAMP
);


<-- for contact purpose -->
 
 CREATE TABLE contactus (
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    comments VARCHAR(50) NOT NULL UNIQUE,
    phone int(20)
);