drop database if exists examen;
create database examen;
use examen;


CREATE TABLE Examens (
    id_examen INT PRIMARY KEY AUTO_INCREMENT,
    etudiant VARCHAR(255),
    matiere VARCHAR(255),
    note INT  
);

-- Insertion des données dans la table "Examens"
INSERT INTO Examens (id_examen, etudiant, matiere, note)
VALUES
(1, 'Andres Dario', 'Anglais', 85) 
(3, 'Jean Francoise', 'Math', 72)
(4, 'Marie Jones', 'Science', 90)
(5, 'Ann Kosaka', 'Math', 92)
(6, 'Jean Francoise', 'Informatic', 45)
(7, 'Andres Dario', 'Math', 65) 
(8, 'Jean Francoise', 'Science', 68)
(9, 'Marie Jones', 'Anglais', 83)
(10, 'Ann Kosaka', 'Informatic', 81)
(11, 'Jean Francoise', 'Anglais', 66)
(12, 'Andres Dario', 'Science', 95)
