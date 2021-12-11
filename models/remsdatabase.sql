DROP DATABASE IF EXISTS REMS_DATABASE;

CREATE DATABASE REMS_DATABASE;

USE REMS_DATABASE;

CREATE TABLE CUSTOMERS_TABLE (
    fullname varchar(100) not null,
    email varchar(100) not null,
    password varchar(100)  not null,
    PRIMARY KEY (email) #This because no person can have the same emails
);

CREATE TABLE PRODUCT_TABLE (
    productname varchar(100),
    quantity int,
    price_per_product float,
    image_of_product varchar(100),
    product_des varchar(400),
    PRIMARY KEY (productname)
);

CREATE TABLE REVIEWS (
    username varchar(50) not null,
    review varchar(400) not null
)
