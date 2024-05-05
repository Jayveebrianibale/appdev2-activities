CREATE DATABASE Company;

USE Company;

CREATE TABLE Employees (
    EmployeeID INT PRIMARY KEY,
    Firstname VARCHAR(20),
    Lastname VARCHAR(20),
    Age INT,
    Department VARCHAR(50)
);

INSERT INTO Employees (EmployeeID, Firstname, Lastname, Age, Department)
VALUES 
(1, 'Jayvee Brian', 'Ibale', 22, 'Basketball'),
(2, 'Johnmark', 'Faeldonia', 21, 'Volleyball'),
(3, 'Jireh', 'Belen', 21, 'Pagent'),
(4, 'John Carlo', 'Diga', 22, 'Dance'),
(5, 'Kurtd Daniel', 'Bigtas', 21, 'Tennis');

UPDATE Employees 
SET Department = 'Marketing';
WHERE EmployeeID = 2;

DELETE FROM Employees WHERE EmployeeID = 3;

DROP TABLE Employees;



