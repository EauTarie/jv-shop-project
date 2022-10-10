mysqldump -username root -p '' --databases bowser_shop > retrogame.sql

mysqlimport -u root -p '' bowser_shop < bowser_shop.sql
   
    DROP DATABASE IF EXISTS bowser_shop;
    CREATE DATABASE bowser_shop;

    USE bowser_shop;


CREATE TABLE moderators {
    id INT UNIQUE KEY NOT NULL AUTO_INCREMENT,
    last_name VARCHAR(20) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    age INT,
    phone VARCHAR(15) NOT NULL,
    mail NVARCHAR(255) NOT NULL,
    pass NVARCHAR(255) NOT NULL,
}

CREATE TABLE sellers {
    id INT UNIQUE KEY NOT NULL AUTO_INCREMENT,
    last_name VARCHAR(20) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    age INT,
    phone VARCHAR(15) NOT NULL,
    mail NVARCHAR(255) NOT NULL,
    pass NVARCHAR(255) NOT NULL,
    moderators_id INT,
        CONSTRAINT fkMSeller_moderator_id FOREIGN KEY(moderators_id) REFERENCES moderators(id)
}

CREATE TABLE products {
    id INT UNIQUE KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(255),
    describe TEXT,
    added_date DATE,
    supressed_date DATE,
    command_id INT,
        CONSTRAINT fkProduct_command_id FOREIGN KEY(command_id) REFERENCES commands(id)
}

CREATE TABLE sellers_products {
    id INT UNIQUE KEY NOT NULL AUTO_INCREMENT,
    seller_id INT,
        CONSTRAINT fkSeller_id FOREIGN KEY(seller_id) REFERENCES sellers(id),
    product_id INT,
        CONSTRAINT fkProduct_id FOREIGN KEY(product_id) REFERENCES products(id)
}

CREATE TABLE prices {
    id INT UNIQUE KEY NOT NULL AUTO_INCREMENT,
    price FLOAT,
    reducted_price FLOAT,
}


CREATE TABLE products_prices {
    id INT UNIQUE KEY NOT NULL AUTO8INCREMENT,
    product_id INT,
        CONSTRAINT fkProduct_id FOREIGN KEY(product_id) REFERENCES products(id),
    price_id INT,
        CONSTRAINT fkPrice_id FOREIGN KEY(price_id) REFERENCES prices(id)
}

CREATE TABLE commands {
    id INT UNIQUE KEY NOT NULL AUTO_INCREMENT,
    command_date DATE,
    customer_id INT,
        CONSTRAINT fkCommand_customer_id FOREIGN KEY(customer_id) REFERENCES customers(id)
}

CREATE TABLE customers {
    id INT UNIQUE KEY NOT NULL AUTO_INCREMENT,
    last_name VARCHAR(20) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    age INT,
    phone VARCHAR(15),
    mail NVARCHAR(255) NOT NULL,
    pass NVARCHAR(255) NOT NULL,
}

CREATE TABLE msg {
    id INT UNIQUE KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(20) NOT NULL,
    resume_msg TEXT,
    date_msg DATE,
    customer_id INT,
        CONSTRAINT fkMsg_customer_id FOREIGN KEY(customer_id) REFERENCES customers(id),
    moderator_id INT,
        CONSTRAINT fkMsg_moderator_id FOREIGN KEY(moderator_id) REFERENCES moderators(id)
}