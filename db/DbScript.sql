CREATE TABLE `user`(
 	`id` int(6) AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL
);

INSERT INTO `user`(`email`, `password`) VALUES('admin@gmail.com', 'admin');
ALTER TABLE `user` ADD UNIQUE(`email`);