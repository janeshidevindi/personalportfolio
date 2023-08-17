create database `myprograming`;

use `myprograming`;

CREATE TABLE `reg` (
  `id` int(6) NOT NULL auto_increment,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;