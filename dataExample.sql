DROP DATABASE IF EXISTS clients;

-- Create the database
CREATE DATABASE clients;

-- Use the newly created database
USE clients;

-- Create the table
CREATE TABLE inquiry (
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    email VARCHAR(100), 
    comment TEXT
);

--insert data into table inquery
INSERT INTO inquiry(firstName, lastName, email, comment) VALUES
('Chitraranjan','Yadav','chitraranjanyadav123@gmail.com', 'I am Computer Science Student'),
('Bhupendra', 'Kydat','bhupendra123@gmail.com','He is the president of TRIG'),
('Cristiano','Ronaldo','ronaldo123@gmail.com','He is the GOAT'),
('Sunil','Xettri','sunil123@gmail.com','He is working in the resturant'),
('Bibesh','Pandey','bibesh123@gmail.com','He is an IT Engineer');