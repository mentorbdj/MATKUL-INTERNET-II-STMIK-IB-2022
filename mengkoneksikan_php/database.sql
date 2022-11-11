CREATE DATABASE db_praktikum;

use db_praktikum;

CREATE TABLE tb_user (
  id int auto_increment primary key,
  username varchar(100),
  password varchar(100),
  created_at DATETIME CURRENT_TIMESTAMP
);

ALTER TABLE tb_user ADD UNIQUE KEY(username);
