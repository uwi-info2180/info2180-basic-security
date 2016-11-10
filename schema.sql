-- Sample Schema
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id int unsigned auto_increment,
    username varchar(255) not null,
    password varchar(255) not null,
    email varchar(255) not null,
    created_at datetime not null,
    primary key(id)
);

-- Add an initial user
INSERT INTO users (username, password, email, created_at) VALUES('test', 'password123', 'test@test.com', SYSDATE());