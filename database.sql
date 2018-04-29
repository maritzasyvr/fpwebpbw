create database crud_web;
 
use crud_web;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `number` varchar(100),
  `phone` varchar(15),
`datepicker` varchar(15),
  `message` varchar(150),
  PRIMARY KEY  (`id`)
);