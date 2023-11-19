CREATE DATABASE IF NOT EXISTS ehcExpertise;

USE ehcExpertise;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT,
    username varchar(300),
    password varchar(300),
    PRIMARY KEY(id)
);

INSERT INTO users(username, password) VALUES('candidate', 'toBecomeAnEhcer');
