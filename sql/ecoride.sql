CREATE DATABASE IF NOT EXISTS ecoride_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ecoride_db;

CREATE TABLE Utilisateur (
    utilisateur_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    passeword VARCHAR(255) NOT NULL,
    telephone VARCHAR(50),
    adresse VARCHAR(100),
    date_naissance DATE,
    photo BLOB,
    pseudo VARCHAR(50) UNIQUE
);
--le type de données BLOB est utilisé pour stocker de très grandes quantités de données binaires

CREATE TABLE Role (
    role_id INT AUTO_ICREMENT PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
);

CREATE TABLE Voiture (
    voiture_id INT AUTO_INCREMENT PRIMARY KEy,
    modele VARCHAR(50) NOT NULL,
    immatriculation VARCHAR(50) UNIQUE NOT NULL,
    energie VARCHAR(50),
    couleur VARCHAR(50),
    date_premiere_immatriculation DATE,
    utilisateur_id INT NOT NULL,
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(utilisateur_id)
        ON DELETE CASCADE ON UPDATE CASCADE
    --cree le lien entre les tables voiture et utilisateur la FOREIGN KEY (utilisateur_id)
    -- declare que la colonne utilisateur_id dans la table valeur est une clé etrangère 
    --puis doit correspondre à la valeur de la colonne utilisateur_id de la table Utilisateur
    --CASCADE permet de suprimer  ou mettre a jour les données dans les tables parents
);

CREATE TABLE Marque (
    marque_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
);

CREATE TABLE Covoiturage (
    covoiturage_id INT AUTO_INCREMENT PRIMARY KEY,
    date_depart DATE NOT NULL,
    heure_depart TIME NOT NULL,
    Lieu_depart VARCHAR(100) NOT NULL,
    date_arrivee DATE,
    heure_arrivee VARCHAR(100) NOT NULL,
    statue VARCHAR(50),
    nb_place INT NOT NULL, 
    prix_personne FLOAT NOT NULL,
    utilisateur_id INT NOT NULL,
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur (utilisateur_id)
        ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Avis (
    avis_id INT AUTO_INCREMENT PRIMARY KEY,
    commentaire VARCHAR(255);
    note INT,
    statut VARCHAR(50),
    utilisateur_id INT NOT NULL,
    covoiturage_id INT NOT NULL, 
    FOREIGN KEY (covoiturage_id) REFERENCES Covoiturage(covoiturage_id)
    --verifie la correspondance de la valeur coivoiturage_id et la table Covoiturage()
        ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Parametre (
    parametre_id INT AUTO_INCREMENT PRIMARY KEY,
    propriete VARCHAR(50) NOT NULL,
    valeur VARCHAR(50) NOT NULL 
);

CREATE TABLE Configuration(
    configuration_id AUTO_INCREMENT PRIMARY KEY,
);

----------------------Relation Suplementaire-----------------------------------
