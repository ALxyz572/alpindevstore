
CREATE DATABASE IF NOT EXISTS store_alpin_developer;
USE store_alpin_developer;
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(100) NOT NULL
);
