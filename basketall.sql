-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 07:44 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `basketall`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `username` varchar(10) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `imgname` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`username`, `prod_id`, `prod_name`, `imgname`, `quantity`, `cost`) VALUES
('sami', 26, 'Almondmilk', 'Almondmilk.png', 5, 750),
('sami', 16, 'Cabbage', 'Cabbage.png', 1, 50),
('admin', 23, 'Baguette', 'Baguette.png', 5, 275),
('admin', 15, 'Brinjal', 'Brinjal.png', 6, 450),
('admin', 23, 'Baguette', 'Baguette.png', 0, 0),
('', 9, 'Pomogranate', 'pomogranate.png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_type` varchar(10) NOT NULL,
  `p_des` text NOT NULL,
  `p_cost` int(11) NOT NULL,
  `img_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_type`, `p_des`, `p_cost`, `img_name`) VALUES
(1, 'Apples', 'fruits', 'Kashmir apples are the best ones known for their rich taste and high nutrition value.', 50, 'Apples.png'),
(2, 'Bananas', 'fruits', 'These bananas are extremely fresh and are organically grown in enriched soil.', 60, 'banana.png'),
(3, 'Chikoo', 'fruits', 'Mouth-watering chikoo a perfect visual treat for the consumer.', 70, 'Chikoo.png'),
(4, 'Custardapples', 'fruits', 'Delectable custard apples that provides you with a unforgettable experience.', 100, 'Custardapples.png'),
(5, 'Kiwi', 'fruits', 'These kiwis are rich in nutritional values and provide a finger licking experriance.', 80, 'kiwi.png'),
(6, 'Mango', 'fruits', 'This king of fruit is juicy, ready to eat and a wholesome experience for summer. ', 60, 'Mango.png'),
(7, 'Oranges', 'fruits', 'These oranges are primarily grown in nagpur and extremely appetizing.', 40, 'Oranges.png'),
(8, 'Papaya', 'fruits', 'Papayas are rich in vitamin A and C and are fresh looking and scrumptious in taste. ', 60, 'Papaya.png'),
(9, 'Pomogranate', 'fruits', 'Pomegranate are rich in iron supplement and juicy and a delightful experience. ', 120, 'pomogranate.png'),
(10, 'Strawberry', 'fruits', 'These strawberries are specially grown in shimla and is fully flavored and colorful.', 90, 'Strawberry.png'),
(11, 'Potato', 'vegetables', 'These potatoes are rich in fats and starch and give you a soulful experience.', 50, 'Potato.png'),
(12, 'Ladyfinger', 'vegetables', 'Ladyfinger rich in vitamin C and K provide you a delightful experience.', 150, 'Ladiesfinger.png'),
(13, 'Bittergourd', 'vegetables', 'Bitter gourd,rich in iron and magnesium provide you a wholesome experience.', 40, 'Bittergourd.png '),
(14, 'Bottlegourd', 'vegetables', 'Bottle gourd gives you a healthy heart and brings down bad cholesterol levels. ', 60, 'Bottlegourd.png'),
(15, 'Brinjal', 'vegetables', 'Brinjal ,rich in fiber and vitamin B3 lowers the risk of heart disease.', 75, 'Brinjal.png'),
(16, 'Cabbage', 'vegetables', 'Green and leafy, a complete visual treat for the consumer.', 50, 'Cabbage.png'),
(17, 'Carrot', 'vegetables', 'Carrots, rich in vitamin A are a perfect help to improve your eyesight and juicy in taste.', 85, 'Carrot.png'),
(18, 'Cauliflower', 'vegetables', 'Leafy and freshly harvested are a rich source of protein and magnesium.', 78, 'Cauliflower.png'),
(19, 'Peas', 'vegetables', 'Peas rich in calcium,iron and magnesium and completely fresh.', 40, 'Peas.png'),
(20, 'Broccoli', 'vegetables', 'Aromatic and fresh, a rich source of zinc ,calcium and iron are a visual delight.', 30, 'Broccoli.png'),
(21, 'Toast', 'bread', 'Toast is a crunchy form of bread made by exposing bread to radiant heat.', 50, 'Toast.png'),
(22, 'Challah', 'bread', 'This bread is spongy and sweet to taste and enriched with eggs and oil.', 60, 'challah.png'),
(23, 'Baguette', 'bread', 'This bread is a long and thin loaf of french bread made from basic lean dough.', 55, 'Baguette.png'),
(24, 'Brioche', 'bread', 'This bread is of french origin and has a high egg and content with a tender crumb.', 70, 'Brioche.png'),
(25, 'Pita', 'bread', 'Pita is a soft, slightly leavened flatbread baked from wheat flour.', 30, 'pita.png'),
(26, 'Almondmilk', 'milk', 'Pasteurized and available in various flavors contain neither lactose or cholesterol. ', 150, 'Almondmilk.png'),
(27, 'Soymilk', 'milk', 'A plant based drink extracted from soybeans , rich in oil and proteins.', 180, 'soymilk.png'),
(28, 'Coconutmilk', 'milk', 'The opacity and rich taste of coconut milk is attributed to its high oil content.', 120, 'Coconutmilk.png'),
(29, 'Hazelnutmilk', 'milk', 'This variety is highly colorful and rich in taste and has a high nutritional value.  ', 70, 'Hazelnutmilk.png'),
(30, 'Flaxmilk', 'milk', 'Flax milk is simply a cold pressed flax oil mixed with filtered water and contains no cholesterol.', 65, 'flaxmilk.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `addr` text NOT NULL,
  `dob` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `uname`, `email`, `mno`, `addr`, `dob`, `pass`) VALUES
('Vadali Rohit', 'admin', 'v@gmail.com', '9821209021', '503, neelgiri apts , goregaon(e)', '1998-02-01', 'admin'),
('samidha', 'sami', 'sami@g.com', '1234567890', 'flat 6, shree tower, nerul(E)', '1997-09-13', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `mno` (`mno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
