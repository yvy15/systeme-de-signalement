create database systsignalement;
use sytsignalement;
CREATE TABLE victime (
    nom_victime VARCHAR(15),
    age_apparent INT,
    sexe CHAR(1),
    PRIMARY KEY (nom_victime) -- Ajout d'une clé primaire
);

CREATE TABLE signalement (
    id_signalement INT AUTO_INCREMENT PRIMARY KEY,
    nom_formulaire VARCHAR(10),
    date_sevices DATE,
    type_sevices VARCHAR(20),
    autres_sevices VARCHAR(40),
    localisation VARCHAR(20),
    FOREIGN KEY (nom_formulaire) REFERENCES ceso(nom_formulaire)
);

CREATE TABLE ceso (
    id_ceso INT AUTO_INCREMENT PRIMARY KEY,
    nom_formulaire VARCHAR(10),
    date_sevices DATE,
    statut VARCHAR(20),
    sexe CHAR(1),
    FOREIGN KEY (date_sevices) REFERENCES signalement(date_sevices),
    FOREIGN KEY (sexe) REFERENCES victime(sexe)
);

CREATE TABLE signaleur (
    id_signaleur INT AUTO_INCREMENT PRIMARY KEY,
    nom_signaleur VARCHAR(10),
    email VARCHAR(20),
    telephone VARCHAR(15)
);

CREATE TABLE utilisateur (
    nom VARCHAR(10),
    prenom VARCHAR(10),
    niveau VARCHAR(15),
    email VARCHAR(15),
    mdp VARCHAR(20),
    cmdp VARCHAR(20),
    PRIMARY KEY (email) -- Ajout d'une clé primaire sur l'email
);

CREATE TABLE travailleur (
    id_travailleur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(10),
    specialite VARCHAR(20),
    date_affectation DATE,
    heure TIME,
    nom_formulaire VARCHAR(10),
    FOREIGN KEY (nom_formulaire) REFERENCES ceso(nom_formulaire)
);
