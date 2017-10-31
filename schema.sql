-- Sample Schema

-- Users
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


-- Bank Accounts
DROP TABLE IF EXISTS bank_accounts;
CREATE TABLE bank_accounts (
    id int unsigned auto_increment,
    account_number varchar(255) not null,
    balance decimal(50, 2) not null,
    created_at datetime not null,
    updated_at datetime not null,
    primary key(id)
);

-- Add initial accounts
INSERT INTO bank_accounts (account_number, balance, created_at, updated_at) VALUES('AB12345', 12000.00, SYSDATE(), SYSDATE());
INSERT INTO bank_accounts (account_number, balance, created_at, updated_at) VALUES('XY09876', 100.00, SYSDATE(), SYSDATE());