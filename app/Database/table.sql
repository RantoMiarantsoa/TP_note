CREATE DATABASE matiere;
USE matiere;

CREATE TABLE Etudiant (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    etu INT NOT NULL UNIQUE
);

CREATE TABLE Semestre(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE parcours_mat(
    id_parcours INT PRIMARY KEY AUTO_INCREMENT,
    nom_responsable VARCHAR(50) NOT NULL,
    nom_option VARCHAR(50) NOT NULL,
    id_semestre INT,
    FOREIGN KEY (id_semestre) REFERENCES Semestre(id)
);

CREATE TABLE groupe_mat(
    id_groupe INT PRIMARY KEY AUTO_INCREMENT,
    id_parcours INT,
    FOREIGN KEY (id_parcours) REFERENCES parcours_mat(id_parcours)
);

CREATE TABLE Matiere(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom_matiere VARCHAR(50) NOT NULL,  
    coefficient INT NOT NULL,
    key_matiere VARCHAR(50) NOT NULL UNIQUE,
    id_semestre INT,
    id_groupe INT NULL,
    FOREIGN KEY (id_semestre) REFERENCES Semestre(id),
    FOREIGN KEY (id_groupe) REFERENCES groupe_mat(id_groupe)
);

CREATE TABLE note(
    id_note INT PRIMARY KEY AUTO_INCREMENT,
    id_matiere INT,
    id_etudiant INT,
    note INT,
    FOREIGN KEY (id_matiere) REFERENCES Matiere(id),
    FOREIGN KEY (id_etudiant) REFERENCES Etudiant(id)
);