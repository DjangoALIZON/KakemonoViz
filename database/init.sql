CREATE TYPE statut AS ENUM (
    DEFAULT 'En attente',
    'Validé',
    'En cours',
    'Prêt',
    'Livré',
    'Refusé'
);

CREATE TABLE devis (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telephone VARCHAR(10),
    type_support VARCHAR(255),
    largeur SMALLINT CHECK (largeur BETWEEN 1 AND 5000),
    hauteur SMALLINT CHECK (hauteur BETWEEN 1 AND 5000),
    description VARCHAR(2048),
    fichier BYTEA NOT NULL,
    statut_kakemono statut,
    cree_le TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE portfolio (
    id SERIAL PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description VARCHAR(2048),
    image BYTEA,
    categorie VARCHAR(255),
    cree_le TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admins (
    id SERIAL PRIMARY KEY,
    login VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);