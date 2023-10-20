create database if not exists bdm;
use bdm;

CREATE TABLE IF NOT EXISTS Users (
    userId INT PRIMARY KEY,
    isActive BOOLEAN,
    userName VARCHAR(50),
    password VARCHAR(255),
    email VARCHAR(100),
    profilePhoto VARCHAR(255),
    description TEXT,
    userType VARCHAR(20),
    name VARCHAR(50),
    lastName VARCHAR(50),
    birthDay DATE,
    gender VARCHAR(10),
    address VARCHAR(255),
    postalCode VARCHAR(10),
    city VARCHAR(50),
    state VARCHAR(50),
    debitCard VARCHAR(16),
    isDebitCard BOOLEAN,
    isPaypal BOOLEAN,
    isOxxo BOOLEAN,
    superAdminId INT,
    nameSearch VARCHAR(255),
    action VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS Products (
    p_productId INT PRIMARY KEY,
    p_isActive BOOLEAN,
    p_name VARCHAR(100),
    p_description TEXT,
    p_quantity INT,
    p_method VARCHAR(20),
    p_price DECIMAL(10, 2),
    p_status VARCHAR(20),
    p_views INT,
    p_buying INT,
    p_valoration DECIMAL(3, 2),
    p_clientId INT,
    p_sellerId INT,
    p_adminId INT,
    p_categoryId INT,
    p_categoriesIds VARCHAR(255),
    productCategoryId INT,
    productmediaId INT,
    p_photo VARCHAR(255),
    p_video VARCHAR(255),
    p_nameSearch VARCHAR(255),
    p_limitSearch INT,
    p_action VARCHAR(50),
    FOREIGN KEY (p_clientId) REFERENCES Users(userId),
    FOREIGN KEY (p_sellerId) REFERENCES Users(userId),
    FOREIGN KEY (p_adminId) REFERENCES Users(userId),
    FOREIGN KEY (p_categoryId) REFERENCES Categories(p_categoryId)
);

CREATE TABLE IF NOT EXISTS Wishlists (
    p_listwishId INT PRIMARY KEY,
    p_name VARCHAR(100),
    p_description TEXT,
    p_photo VARCHAR(255),
    p_listType VARCHAR(20),
    p_clientId INT,
    p_productId INT,
    p_action VARCHAR(50),
    FOREIGN KEY (p_clientId) REFERENCES Users(userId),
    FOREIGN KEY (p_name) REFERENCES Products(p_name)
    
);

CREATE TABLE IF NOT EXISTS Carts (
    p_cartId INT PRIMARY KEY,
    p_isActive BOOLEAN,
    p_clientId INT,
    p_cartProductId INT,
    p_quantity INT,
    p_productId INT,
    p_price DECIMAL(10, 2),
    p_payMethod VARCHAR(20),
    p_recordId INT,
    p_sellerId INT,
    p_comment TEXT,
    p_valoration DECIMAL(3, 2),
    p_recordProductId INT,
    p_orderBy VARCHAR(20),
    p_categories VARCHAR(255),
    p_cuotationId INT,
    p_status VARCHAR(20),
    p_action VARCHAR(50),
    FOREIGN KEY (p_clientId) REFERENCES Users(userId),
    FOREIGN KEY (p_sellerId) REFERENCES Users(userId),
    FOREIGN KEY (p_productId) REFERENCES Products(p_productId),
    FOREIGN KEY (p_cartProductId) REFERENCES Wishlists(p_listwishId)
);

CREATE TABLE IF NOT EXISTS Categories (
    p_categoryId INT PRIMARY KEY,
    p_isActive BOOLEAN,
    p_name VARCHAR(50),
    p_description TEXT,
    p_photo VARCHAR(255),
    p_adminId INT,
    p_action VARCHAR(50),

);
