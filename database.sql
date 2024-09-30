CREATE DATABASE sistema_usuários;

USE sistema_usuários;

CREATE TABLE usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL,
perfil ENUM('admin', 'gestor', 'colaborador')NOT NULL, 
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);