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
    debitCard VARCHAR(16)
);

CREATE TABLE IF NOT EXISTS Products (
    p_productId INT PRIMARY KEY,
    p_isActive BOOLEAN,
    p_name VARCHAR(100),
    p_description TEXT,
    p_quantity INT,
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
    productmediaId INT,
    p_photo VARCHAR(255),
    p_video VARCHAR(255),
    FOREIGN KEY (p_clientId) REFERENCES Users(userId),
    FOREIGN KEY (p_sellerId) REFERENCES Users(userId),
    FOREIGN KEY (p_adminId) REFERENCES Users(userId)
    -- FOREIGN KEY (p_categoryId) REFERENCES Categories(p_categoryId),
    -- FOREIGN KEY (productmediaId) REFERENCES ProductPhotos(productmediaId)
);

CREATE TABLE IF NOT EXISTS Wishlists (
    p_listwishId INT PRIMARY KEY,
    listname VARCHAR(100),
    listphoto BLOB,
    listdesc TEXT,
    p_name VARCHAR(100),
    p_price DECIMAL(10, 2),
    p_photo VARCHAR(255),
    p_listType VARCHAR(20),
    p_clientId INT,
    p_productId INT,
    FOREIGN KEY (p_clientId) REFERENCES Users(userId),
    FOREIGN KEY (p_productId) REFERENCES Products(p_productId)
);

CREATE TABLE IF NOT EXISTS Carts (
    p_cartId INT PRIMARY KEY,
    p_clientId INT,
    p_quantity INT,
    p_productId INT,
    p_name VARCHAR(100),
    p_price DECIMAL(10, 2),
    p_sellerId INT,
    cartsubtotal DECIMAL(10, 2),
    carttotal DECIMAL(10, 2),
    FOREIGN KEY (p_clientId) REFERENCES Users(userId),
    FOREIGN KEY (p_sellerId) REFERENCES Users(userId),
    FOREIGN KEY (p_productId) REFERENCES Products(p_productId)
);

CREATE TABLE IF NOT EXISTS Ticket (
    ticketId INT PRIMARY KEY,
    p_sellerId INT,
    dateof TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10, 2),
    methodpay VARCHAR(50), 
    FOREIGN KEY (p_sellerId) REFERENCES Users(userId)
);

CREATE TABLE IF NOT EXISTS DetailTicket (
    detailId INT PRIMARY KEY,
    ticketId INT,
    p_productId INT,
    p_quantity INT,
    p_price DECIMAL(10, 2),
    subtotal DECIMAL(10, 2),
    FOREIGN KEY (ticketId) REFERENCES Ticket(ticketId),
    FOREIGN KEY (p_productId) REFERENCES Products(p_productId)
);

CREATE TABLE IF NOT EXISTS QuotationClient (
    quClientId INT PRIMARY KEY,
    p_clientId INT, -- Clave foránea que hace referencia al cliente que solicita la cotización
    dateQu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10, 2), -- El costo total de la cotización
    q_status VARCHAR(50), -- El estado de la cotización (por ejemplo, pendiente, aprobada, rechazada)
    FOREIGN KEY (p_clientId) REFERENCES Users(userId)
);

CREATE TABLE IF NOT EXISTS DetailQuotationClient (
    detailQuClientId INT PRIMARY KEY,
    quClientId INT, -- Clave foránea que hace referencia a la cotización de cliente
    p_productId INT, -- Clave foránea que hace referencia al producto cotizado
    p_quantity INT,
    p_price DECIMAL(10, 2),
    subtotal DECIMAL(10, 2), -- El costo subtotal del producto en la cotización
    FOREIGN KEY (quClientId) REFERENCES QuotationClient(quClientId),
    FOREIGN KEY (p_productId) REFERENCES Products(p_productId)
);

CREATE TABLE IF NOT EXISTS QuotationSeller (
    quSellerId INT PRIMARY KEY,
    p_sellerId INT, -- Clave foránea que hace referencia al vendedor que responde a la cotización
    dateQu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10, 2), -- El costo total de la cotización
    q_status VARCHAR(50), -- El estado de la cotización (por ejemplo, pendiente, aprobada, rechazada)
    FOREIGN KEY (p_sellerId) REFERENCES Users(userId)
);

CREATE TABLE IF NOT EXISTS DetailQuotationSeller (
    detailQuSellerrId INT PRIMARY KEY,
    quSellerId INT, -- Clave foránea que hace referencia a la cotización de vendedor
    p_productId INT, -- Clave foránea que hace referencia al producto cotizado
    p_quantity INT,
    p_price DECIMAL(10, 2),
    subtotal DECIMAL(10, 2), -- El costo subtotal del producto en la cotización
    FOREIGN KEY (quSellerId) REFERENCES QuotationSeller(quSellerId),
    FOREIGN KEY (p_productId) REFERENCES Products(p_productId)
);

CREATE TABLE IF NOT EXISTS Categories (
    p_categoryId INT PRIMARY KEY,
    p_isActive BOOLEAN,
    category_name VARCHAR(50),
    c_description TEXT,
    c_photo VARCHAR(255),
    p_adminId INT,
    FOREIGN KEY (p_adminId) REFERENCES Users(userId)
);

CREATE TABLE ProductPhotos (
    productmediaId INT PRIMARY KEY,
    p_productId INT, 
    p_photo VARCHAR(255),
    p_video VARCHAR(255),
    FOREIGN KEY (p_productId) REFERENCES Products(p_productId)
);

ALTER TABLE Products
ADD FOREIGN KEY (p_categoryId) REFERENCES Categories(p_categoryId),
ADD FOREIGN KEY (productmediaId) REFERENCES ProductPhotos(productmediaId);