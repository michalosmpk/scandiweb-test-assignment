DROP DATABASE scandiweb;
CREATE DATABASE scandiweb;
USE scandiweb;

CREATE TABLE `product_type` (
	`type_id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`type_value` VARCHAR(255) NOT NULL,
	`attribute_name` VARCHAR(255) NOT NULL,
	`attribute_unit` VARCHAR(255)
);
CREATE TABLE `product_list` (
	`product_id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`sku` VARCHAR(255) NOT NULL,
	`product_name` VARCHAR(255) NOT NULL,
	`price` decimal(10,2),
	`type_id` INT,
	`attribute_value` VARCHAR(255),
	CONSTRAINT FK_product_list_type_id FOREIGN KEY (`type_id`) REFERENCES `product_type`(`type_id`)
);