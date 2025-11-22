-- Coffee Shop Database Setup
-- This SQL file contains the database structure for the Coffee Shop Admin Template

-- Create database
CREATE DATABASE IF NOT EXISTS coffee_shop;
USE coffee_shop;

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    status VARCHAR(50) NOT NULL DEFAULT 'available',
    image VARCHAR(255),
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_category (category),
    INDEX idx_status (status)
);

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    shop_name VARCHAR(255),
    role VARCHAR(50) DEFAULT 'admin',
    status VARCHAR(50) DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email)
);

-- Orders table
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_number VARCHAR(50) NOT NULL UNIQUE,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255),
    customer_phone VARCHAR(20),
    total_amount DECIMAL(10, 2) NOT NULL,
    status VARCHAR(50) DEFAULT 'pending',
    payment_method VARCHAR(50),
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_order_number (order_number),
    INDEX idx_status (status)
);

-- Order items table
CREATE TABLE IF NOT EXISTS order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    product_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE RESTRICT
);

-- Customers table
CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE,
    phone VARCHAR(20),
    address TEXT,
    notes TEXT,
    total_orders INT DEFAULT 0,
    total_spent DECIMAL(10, 2) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email)
);

-- Insert sample products
INSERT INTO products (name, category, price, stock, status, description) VALUES
('Cappuccino', 'coffee', 4.50, 150, 'available', 'Rich espresso with steamed milk and foam'),
('Espresso', 'coffee', 3.00, 200, 'available', 'Strong and bold coffee shot'),
('Latte', 'coffee', 4.00, 180, 'available', 'Smooth espresso with steamed milk'),
('Green Tea', 'tea', 3.50, 120, 'available', 'Fresh and healthy green tea'),
('Mocha', 'coffee', 4.80, 0, 'out-of-stock', 'Chocolate flavored coffee'),
('Croissant', 'pastries', 2.50, 80, 'available', 'Buttery and flaky French pastry'),
('Americano', 'coffee', 3.50, 170, 'available', 'Espresso with hot water'),
('Earl Grey Tea', 'tea', 3.50, 100, 'available', 'Classic black tea with bergamot'),
('Muffin', 'pastries', 3.00, 60, 'available', 'Freshly baked muffin'),
('Smoothie', 'smoothies', 5.00, 90, 'available', 'Fresh fruit smoothie');

-- Insert sample user (password: admin123)
INSERT INTO users (first_name, last_name, email, password, shop_name, role) VALUES
('Admin', 'User', 'admin@coffeeshop.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Coffee Shop Demo', 'admin');

-- Insert sample orders
INSERT INTO orders (order_number, customer_name, customer_email, total_amount, status) VALUES
('ORD001', 'John Doe', 'john@example.com', 4.50, 'completed'),
('ORD002', 'Jane Smith', 'jane@example.com', 3.00, 'pending'),
('ORD003', 'Mike Johnson', 'mike@example.com', 4.00, 'completed'),
('ORD004', 'Sarah Williams', 'sarah@example.com', 4.80, 'completed'),
('ORD005', 'David Brown', 'david@example.com', 3.50, 'cancelled');

-- Insert sample customers
INSERT INTO customers (name, email, phone, total_orders, total_spent) VALUES
('John Doe', 'john@example.com', '+1234567890', 15, 67.50),
('Jane Smith', 'jane@example.com', '+1234567891', 8, 32.00),
('Mike Johnson', 'mike@example.com', '+1234567892', 12, 48.00),
('Sarah Williams', 'sarah@example.com', '+1234567893', 20, 96.00),
('David Brown', 'david@example.com', '+1234567894', 5, 17.50);
