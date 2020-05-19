
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

--
-- Birthday Package Query
--
CREATE TABLE IF NOT EXISTS `bd_stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(200),
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `bd_stage` (`id`, `group`, `name`, `details` ,`image`, `price`) VALUES
(1001, 'birthay stage', 'STAGE 1', ' ', 'bd_stage1.jpg', 5000.00),
(1002, 'birthay stage', 'STAGE 2', ' ', 'bd_stage2.jpg', 7000.00),
(1003, 'birthay stage', 'STAGE 3', ' ', 'bd_stage3.jpg', 9000.00);
 
 
CREATE TABLE IF NOT EXISTS `bd_cake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(200),
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `bd_cake` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(1011, 'birthay cake', 'CAKE 1', 'Vanilla Cake (1 Pound)', 'cake1.jpg', 2000.00),
(1012, 'birthay cake', 'CAKE 2', 'Vanilla+Chocolate Cake (2 Pound)', 'cake2.jpg', 3500.00),
(1013, 'birthay cake', 'CAKE 3', 'Chocolate Cake(2 Pound)', 'cake3.jpg', 5000.00);

  

CREATE TABLE IF NOT EXISTS `bd_Photography` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(200),  
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `bd_photography` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(1021,'Birthday Photography', 'PACKAGE 1', '1 Hour Shoot', 'bd_photography1.jpg', 1000.00),
(1022, 'Birthday Photography', 'PACKAGE 2', '2 Hour Shoot', 'bd_photography2.jpg', 1800.00),
(1023, 'Birthday Photography', 'PACKAGE 3', 'Full event shoot', 'bd_photography3.jpg', 3000.00);
 
  
 CREATE TABLE IF NOT EXISTS `bd_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(200),
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `bd_food` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(1031, 'Birthday Food', 'Fast-Food 1', 'Chowmin,Pasta,Drinks(1 People)', 'bd_food1.jpg', 250.00),
(1032, 'Birthday Food', 'Fast-Food 2', 'Burger,Pizza,nachos,Drinks(1 People)', 'bd_food2.jpg', 450.00),
(1033, 'Birthday Food', 'Set Menu', 'Set Menu,Water,Drinks(1 people)', 'bd_food3.jpg', 500.00);


CREATE TABLE IF NOT EXISTS `bd_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(200),
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `bd_card` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(1041, 'Birthday Card', 'CARD 1', ' ', 'bd_card1.png', 100.00),
(1042, 'Birthday Card', 'CARD 2', ' ', 'bd_card2.png', 140.00),
(1043, 'Birthday Card', 'CARD 3', ' ', 'bd_card3.png', 200.00);


--
-- Weeding Package Query
--

CREATE TABLE IF NOT EXISTS `wd_stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(200),
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `wd_stage` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(2001, 'Weeding Stage', 'STAGE 1', '1000sqft', 'wd_stage1.jpg', 5000.00),
(2002, 'Weeding Stage', 'STAGE 2', '1500sqft', 'wd_stage2.jpg', 7000.00),
(2003, 'Weeding Stage', 'STAGE 3', '1000sqft', 'wd_stage3.jpg', 9000.00);


CREATE TABLE IF NOT EXISTS `wd_Photography` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(200),
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


INSERT INTO `wd_photography` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(2011, 'weeding photography', 'Shutter-1', '1 Day Shoot(1 photographers)', 'wd_photography1.jpg', 4000.00),
(2012, 'weeding photography', 'Shutter-2', '1 Day Shoot(2 photographers)', 'wd_photography2.jpg', 7000.00),
(2013, 'weeding photography', 'Shutter-3', '2 Day Shoot(2 photographers)', 'wd_photography3.jpg', 10000.00),
(2014, 'weeding photography', 'Lens', 'Full Event(3 Photograpers)', 'wd_photography4.jpg', 19000.00),
(2015, 'weeding photography', 'Zoom','2 Day Shoot(3 Photograpers)', 'wd_photography5.jpg', 12000.00),
(2016, 'weeding photography', 'Flash', 'Full Event(2 photographer)', 'wd_photography6.jpg', 15000.00);



CREATE TABLE IF NOT EXISTS `wd_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(200),
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `wd_card` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(2021, 'weeding card', 'CARD 1', ' ', 'wd_card1.png', 100.00),
(2022, 'weeding card', 'CARD 2', ' ', 'wd_card2.png', 160.00),
(2023, 'weeding card', 'CARD 3', ' ', 'wd_card3.png', 400.00);


CREATE TABLE IF NOT EXISTS `wd_transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(200),
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


INSERT INTO `wd_transport` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(2031, 'weeding transport', 'Car', ' ', 'wd_transport1.jpg', 5000.00),
(2032, 'weeding transport', 'Hiece', ' ', 'wd_transport2.jpg', 10000.00),
(2033, 'weeding transport', 'Helicaptar', ' ', 'wd_transport3.jpg', 1000000.00);


CREATE TABLE IF NOT EXISTS `wd_catering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(200) Not NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


INSERT INTO `wd_catering` (`id`, `group`, `name`, `details`, `image`, `price`) VALUES
(2041, 'weeding catering', 'PACKAGE 1', '1 Days Service', 'wd_catering1.jpg', 10000.00),
(2042, 'weeding catering', 'PACKAGE 2', '2 Days Service', 'wd_catering2.jpg', 18000.00),
(2043, 'weeding catering', 'PACKAGE 3', '3 Days Service','wd_catering13.jpg', 27000.00);



CREATE TABLE IF NOT EXISTS `accounts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES (1, 'admin', 'admin123', 'test@test.com');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE `customer` (
  `customer_id` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_contact` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_dob` varchar(100) NOT NULL,
  `customer_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_contact`, `customer_address`, `customer_email`, `customer_dob`, `customer_password`) VALUES
('101', '', '01903028309', 'rampura', 'harunk873@gmail.com', '23/5/2019', '12345');

ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);
 
CREATE TABLE IF NOT EXISTS `corpo_silver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `details` varchar(200) Not NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `corpo_silver` (`id`, `name`, `details`, `image`, `price`) VALUES
(3001, 'PACKAGE 1', '2000 sqft hall room,sound and light,one projector,photography,250-280 peoples food ', 'cor_sil1.jpg', 500000.00),
(3002, 'PACKAGE 2', '2500 sqft hall room,sound and light,one projector,photography,concert,270-290 peoples food', 'cor_sil2.jpg', 750000.00),
(3003, 'PACKAGE 3', '3000 sqft hall room,sound and light,one projector,photography,300-320 peoples food,photo wall', 'cor_sil3.jpg', 1000000.00);

CREATE TABLE IF NOT EXISTS `corpo_gold` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `details` varchar(200) Not NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `corpo_gold` (`id`, `name`, `details`, `image`, `price`) VALUES
(3010, 'PACKAGE 1', '2000 sqft hall room,sound and light,one projector,photography,250-280 peoples food,video ', 'cor_gold1.jpg', 500000.00),
(3011, 'PACKAGE 2', '2500 sqft hall room,sound and light,one projector,photography,concert,270-290 peoples food', 'cor_gold2.jpg', 750000.00),
(3012, 'PACKAGE 3', '3000 sqft hall room,sound and light,two projector,photography,300-320 peoples food,photo wall,dance', 'cor_gold3.jpg', 1000000.00);

CREATE TABLE IF NOT EXISTS `corpo_platinum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `details` varchar(200) Not NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `corpo_platinum` (`id`, `name`, `details`, `image`, `price`) VALUES
(3031, 'PACKAGE 1', '3000 sqft hall room,sound and light,two projector,photography,250-280 peoples food, ', 'cor_plat1.jpg', 200000.00),
(3032, 'PACKAGE 2', '3800 sqft hall room,sound and light,one projector,photography,concert,270-290 peoples food', 'cor_plat2.jpg', 250000.00),
(3033, 'PACKAGE 3', '4200 sqft hall room,sound and light,one projector,photography,300-320 peoples food,photo wall', 'cor_plat3.jpg', 3000000.00); 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
