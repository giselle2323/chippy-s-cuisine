CREATE DATABASE chippy;
USE chippy;
CREATE TABLE orders(
id INT  NOT NULL AUTO_INCREMENT,
textBox VARCHAR(150) NOT NULL,
fullName VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL,
address VARCHAR(150) NOT NULL,
tele VARCHAR(17) NOT NULL,
plate int(50) NOT NULL,
status VARCHAR (20) NOT NULL,
created_date DATETIME,
PRIMARY KEY(id)
);



CREATE TABLE contact (
id INT NOT NULL AUTO_INCREMENT,
fullname VARCHAR(150) NOT NULL,
email VARCHAR(150),
message VARCHAR(750),
created_date DATETIME,
PRIMARY KEY(id)
);

CREATE TABLE signin (
id INT NOT NULL  AUTO_INCREMENT, 
username VARCHAR(150) NOT NULL,
password VARCHAR(50) NOT NULL,
PRIMARY KEY(id)
);
INSERT INTO signin (username, password)
VALUES ('jumoke', 'jummy123');

UPDATE signin SET password = MD5('jummy123');