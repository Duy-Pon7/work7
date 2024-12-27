-- Create the database
CREATE DATABASE work7;

-- Use the database
USE work7;

-- Create the table learn
CREATE TABLE university (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    release_date DATE NOT NULL,
    update_date DATE NOT NULL,
    content TEXT NOT NULL,
    scrollspy TEXT
);

-- Create the table learn
CREATE TABLE language_market (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    release_date DATE NOT NULL,
    update_date DATE NOT NULL,
    content TEXT NOT NULL,
    scrollspy TEXT
);

-- Create the table learn
CREATE TABLE position_market (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    release_date DATE NOT NULL,
    update_date DATE NOT NULL,
    content TEXT NOT NULL,
    scrollspy TEXT
);

-- Create the table learn
CREATE TABLE mindset (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    release_date DATE NOT NULL,
    update_date DATE NOT NULL,
    content TEXT NOT NULL,
    scrollspy TEXT
);

