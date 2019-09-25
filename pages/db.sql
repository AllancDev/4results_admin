-- Script para criação de tabela no banco de dados Mysql

CREATE DATABASE db_4results;
USE db_4results;

CREATE TABLE tb_users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(80) NOT NULL,
    u_password VARCHAR(32) NOT NULL 
) COLLATE=utf8_unicode_ci;



INSERT INTO tb_users (username, email, u_password) VALUES ('allan.camargo', 'allan.camargo@4results.com.br', MD5('123'));