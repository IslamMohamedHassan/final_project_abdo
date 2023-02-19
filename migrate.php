<?php
require('init.php') ;

if (!getConfig('MIGRATE')){
    echo "<h1>Access Denied ! </h1>";
    echo "<h3>This Page is disabled by Administrator</h3>";
    die;
}

echo "Creating Database ... <br><br>";
$tables =[
    "CREATE TABLE users (
        id int PRIMARY KEY AUTO_INCREMENT,
        fullname varchar(255) NOT null,
        email varchar(255) UNIQUE NOT Null,
        password varchar(255) NOT Null,
        image varchar(255) ,
        user_type ENUM('user','admin','vendor'),
        city varchar(255),
        street varchar(255)
        );",

    "CREATE TABLE items (
        id int PRIMARY KEY AUTO_INCREMENT,
        name varchar(255),
        description varchar(255),
        points varchar(255) ,
        image varchar(255) UNIQUE NOT null,
        address varchar(255) NOT null,
        item_status ENUM('pending','approved','rejected'),
        user_id int ,
        FOREIGN KEY (user_id) REFERENCES users(id)
        );",

    "CREATE TABLE phones (
        id int PRIMARY KEY AUTO_INCREMENT,
        user_id int ,
        phone varchar(255) UNIQUE NOT null,
        FOREIGN KEY (user_id) REFERENCES users(id)
        );",

    "CREATE TABLE Product_category	 (
        id int PRIMARY KEY AUTO_INCREMENT,
        name varchar(255) UNIQUE NOT null 
        );",

     "CREATE TABLE products (
        id int PRIMARY KEY AUTO_INCREMENT,
        name varchar(255) NOT null,
        description varchar(255) NOT null,
        price varchar(255) NOT null,
        image varchar(255) UNIQUE NOT null,
        quantity int,
        category_id int UNIQUE,
        user_id int,
        FOREIGN KEY (category_id) REFERENCES Product_category(id),
        FOREIGN KEY (user_id) REFERENCES users(id)
        );",

    "CREATE TABLE orders (
        id int PRIMARY KEY AUTO_INCREMENT,
        order_date DATETIME NOT null,
        price float NOT null,
        user_id int NOT null,
        FOREIGN KEY (user_id) REFERENCES users(id)
        );",

    "CREATE TABLE product_orders (
        id int PRIMARY KEY AUTO_INCREMENT,
        order_id int NOT null,
        product_id int NOT null,
        discount int,
        quantity int NOT null,
        FOREIGN KEY (order_id) REFERENCES orders(id),
        FOREIGN KEY (product_id) REFERENCES products(id)
        );",
    
    "CREATE TABLE cart(
        id int PRIMARY KEY AUTO_INCREMENT,
        user_id int NOT null,
        product_id int NOT null,
        price float NOT null,
        FOREIGN KEY (user_id) REFERENCES users(id),
        FOREIGN KEY (product_id) REFERENCES products(id)
        );",
    
    "CREATE TABLE message(
        id int PRIMARY KEY AUTO_INCREMENT,
        name varchar(255) NOT null,
        email varchar(255) NOT null,
        message varchar(255) NOT null
        );"
];


DB::createDatabase('recycle' ,$tables); 
echo "<h4>[ OK ] Drop Old Database ( ",getConfig('DATABASE')->DATABASE , " ) </h4>";
echo "<h4>[ OK ] Creating ",count($tables) , " Tables</h4>";
echo "<pre>"; 
print_r($tables); 
