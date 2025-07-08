
CREATE DATABASE IF NOT EXISTS moneychanger;
USE moneychanger;

CREATE TABLE tbl_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE tbl_currencies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(10),
    name VARCHAR(50),
    symbol VARCHAR(5)
);

CREATE TABLE tbl_transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    currency_id INT,
    type ENUM('buy','sell'),
    amount_foreign DECIMAL(12,2),
    rate DECIMAL(12,2),
    total_idr DECIMAL(12,2),
    date DATETIME
);

CREATE TABLE tbl_exchange_rates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    currency_id INT,
    date DATE,
    buy_rate DECIMAL(12,2),
    sell_rate DECIMAL(12,2)
);

CREATE TABLE tbl_cash_stock (
    id INT AUTO_INCREMENT PRIMARY KEY,
    currency_id INT,
    balance DECIMAL(12,2)
);

INSERT INTO tbl_users (username, password) VALUES ('admin', 'admin');
INSERT INTO tbl_currencies (code, name, symbol) VALUES 
    ('USD', 'US Dollar', '$'), 
    ('EUR', 'Euro', '€');

INSERT INTO tbl_cash_stock (currency_id, balance) VALUES 
    (1, 10000.00),
    (2, 5000.00);
