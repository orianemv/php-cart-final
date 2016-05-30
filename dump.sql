CREATE TABLE `customers` (
	`id` int PRIMARY KEY AUTO_INCREMENT,
	`first_name` varchar(255),
	`last_name` varchar(255),
	`address` longtext,
	`postcode` varchar(255),
	`phone` varchar(255)
);
CREATE TABLE `products` (
	`id` int PRIMARY KEY AUTO_INCREMENT,
	`name` varchar(255),
	`picture` varchar(255),
	`price` numeric(15,2)
);
CREATE TABLE `orders` (
	`id` int PRIMARY KEY AUTO_INCREMENT,
	`customer_id` int,
	`created_at` date,
	`amount` numeric(15,2),
	`shipped` bool,
	FOREIGN KEY(`customer_id`) REFERENCES `customers` (`id`)
);
CREATE TABLE `order_product` (
	`id` int PRIMARY KEY AUTO_INCREMENT,
	`product_id` int,
	`order_id` int,
	`price` numeric(15,2),
	FOREIGN KEY(`product_id`) REFERENCES `products` (`id`),
	FOREIGN KEY(`order_id`) REFERENCES `orders` (`id`)
);

INSERT INTO `kart`.`products` (`name`, `picture`, `price`) VALUES ('Awesome product', '/img/p1.jpg', '132.99');
INSERT INTO `kart`.`products` (`name`, `picture`, `price`) VALUES ('Regular Product', '/img/p2.jpg', '58.59');
INSERT INTO `kart`.`products` (`name`, `picture`, `price`) VALUES ('So-so Product', '/img/p3.jpg', '8.99');
INSERT INTO `kart`.`products` (`name`, `picture`, `price`) VALUES ('Cheap Product', '/img/p4.jpg', '3.99');
