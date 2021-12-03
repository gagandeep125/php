-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 08:59 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) NOT NULL,
  `brand_img` varchar(100) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_img`) VALUES
(1, 'BO&Play', 'images/brands_1.jpg'),
(2, 'Google', 'images/brands_2.jpg'),
(3, 'MI', 'images/brands_3.jpg'),
(4, 'Samsung', 'images/brands_4.jpg'),
(5, 'Apple', 'images/brands_5.jpg'),
(6, 'Sony', 'images/brands_6.jpg'),
(7, '1+', 'images/brands_7.jpg'),
(8, 'MEIZU', 'images/brands_8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `tex` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `tex`) VALUES
(1, 'jjjdjjd', 'hhhh@jaja.com', 3939993, ''),
(2, 'vvnb', 'gaganminhas1999@gmail.com', 2147483647, 'gjhhjbnbbbbbbbbbbbbbbbbm'),
(3, 'g', 'gaganminhas1999@gmail.com', 555, 'bbbbbbbbnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn'),
(4, 'j', 'gaganminhas1999@gmail.com', 444, 'hhhh'),
(5, 'j', 'gaganminhas1999@gmail.com', 444, 'hhhh'),
(6, 'n', 'gaganminhas1999@gmail.com', 6, 'bbbbbbbbbbb'),
(7, 'jj', 'gaganminhas1999@gmail.com', 2147483647, 'fffffffffffff'),
(8, 'mcm', 'gaganminhas1999@gmail.com', 345, 'dsjkkkkkkkkkkkk'),
(9, 'gggd', 'gaganminhas1999@gmail.com', 2147483647, 'dcnbn'),
(10, 'gg', 'gagan123minhas1999@gmail.com', 22, 'sdddddd');

-- --------------------------------------------------------

--
-- Table structure for table `deal_of_week`
--

CREATE TABLE IF NOT EXISTS `deal_of_week` (
  `d_id` int(100) NOT NULL AUTO_INCREMENT,
  `d_img` varchar(100) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `c_price` int(100) NOT NULL,
  `o_price` int(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `d_link` varchar(110) NOT NULL,
  `t_time` date NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `deal_of_week`
--

INSERT INTO `deal_of_week` (`d_id`, `d_img`, `d_name`, `c_price`, `o_price`, `stock`, `cat_name`, `d_link`, `t_time`, `brand_name`) VALUES
(1, 'images/deals.png', 'Beoplay H7', 200, 400, 8, 'Headphones', '', '2018-05-12', ''),
(2, 'images/featured_2.png', 'Apple iPod shuffle', 2000, 34445, 5, 'Cameras', '', '2018-05-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `p_price` int(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_link` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `cat_name`, `p_price`, `stock`, `p_img`, `p_link`, `brand_name`) VALUES
(1, 'Huawei MediaPad', 'Tablets', 3450, 12, 'images/featured_1.png', '', ''),
(3, 'Apple iPod shuffle', 'Gadgets', 2345, 22, 'images/featured_2.png', '', ''),
(4, 'Sony MDRZX310W', 'Headphones', 3332, 33, 'images/featured_3.png', '', ''),
(5, 'LUNA Smartphone', 'Smartphones', 33333, 33, 'images/featured_4.png', '', ''),
(6, 'Canon STM Kit', 'Cameras', 456, 33, 'images/featured_5.png', '', ''),
(7, 'Lenovo IdeaPad', 'Computers and Laptops', 666, 3, 'images/featured_7.png', '', ''),
(8, 'Digitus EDNET', 'Gadgets', 335, 5, 'images/featured_8.png', '', ''),
(9, 'Samsung J330F', 'Smartphones', 5555, 3, 'images/featured_6.png', '', ''),
(10, 'Xiaomi Redmi Note 4', 'Headphones', 4444, 4, 'images/best_6.png', '', ''),
(12, 'Samsung J730F', 'Headphones', 333, 3, 'images/best_2.png', '', ''),
(13, 'Nomi Black White', 'Headphones', 33, 3, 'images/best_3.png', '', ''),
(14, 'Samsung Charm Gold', 'Smartphones', 444, 6, 'images/best_4.png', '', ''),
(15, 'Canon EF', 'Cameras', 55, 5, 'images/new_8.jpg', '', ''),
(16, 'DJI Phantom 3', 'Gadgets', 6666666, 6, 'images/trends_3.jpg', '', ''),
(17, 'Sony PS4 Slim', 'Gadgets', 666, 222, 'images/view_5.jpg', '', ''),
(18, 'Speedlink', 'Accessories', 333, 3, 'images/view_6.jpg', '', ''),
(19, 'Astro M2 Black', 'Accessories', 5555, 55, 'images/new_1.jpg', '', ''),
(20, 'Transcend T.Sonic', 'Smartphones', 666, 66, 'images/new_2.jpg', '', ''),
(21, 'Xiaomi Band 2', 'Accessories', 666, 6, 'images/new_3.jpg', '', ''),
(22, 'Rapoo T8 White', 'Computers & Laptops', 10222, 22, 'images/new_4.jpg', '', ''),
(23, 'Philips BT6900A', 'Headphones', 66, 6, 'images/new_5.jpg', '', ''),
(24, 'Nokia 3310(2017)', 'Smartphones', 5, 100, 'images/new_6.jpg', '', ''),
(25, 'Rapoo 7100p Gray', 'Computers & Laptops', 5, 55, 'images/new_7.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE IF NOT EXISTS `product_cat` (
  `cat_id` int(50) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`cat_id`, `cat_name`, `link`) VALUES
(1, 'Computers & Laptops', ''),
(2, 'Cameras ', ''),
(3, 'Smartphones', ''),
(4, 'Gadgets', ''),
(8, 'Tablets', ''),
(9, 'Headphones', ''),
(10, 'Accessories', '');

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE IF NOT EXISTS `subs` (
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`email`) VALUES
('gaganminhas1999@gmail.com'),
('gagan123minhas1999@gmail.com'),
('as!@m.nnn'),
('as!@m.nnn');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'gagan', 'gaganminhas1999@gmail.com', 1234567890, '123'),
(38, 'palak', 'palak123@g.com', 2983910, '567'),
(39, 'avi', 'avi@g.com', 1234, '123'),
(40, 'sherry', 'sherry@gmail.com', 3456, '123'),
(41, 'hjjjj', 'j@gmial.com', 63, '90'),
(42, 'asdfghjkl;', 'a@k.com', 52, 'asdfghjkl;'),
(43, 'jjj', 'jj@ff.com', 56, 'vbnm,'),
(44, 'fghjk', 'a@e.com', 123456789, 'sdfghjkl;'),
(45, 'dfghjk', 's@g.com', 1234567890, 'asdfghjkl;');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
