CREATE TABLE users (
    id          SERIAL PRIMARY KEY NOT NULL,
    first_name  TEXT,
    last_name   TEXT,
    emial       TEXT,
    password    TEXT,
    level       INTEGER);

CREATE TABLE brand (
    id          SERIAL PRIMARY KEY NOT NULL,
    name        TEXT);

CREATE TABLE cars (
    id          SERIAL PRIMARY KEY NOT NULL,
    name        DATE,
    description TEXT,
    image       TEXT,
    thumbnail 	TEXT,
    stock     INTEGER,
    location  TEXT,
    brand     INTEGER REFERENCES brand(id),
    notes     TEXT);

CREATE TABLE image (
    id         SERIAL PRIMARY KEY NOT NULL,
    productId  INTEGER REFERENCES cars(id),
    name       TEXT,
    path       TEXT,
    date       DATE);
