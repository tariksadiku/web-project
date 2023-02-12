-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 06:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(3, 'Tarik', 'tarik123@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` varchar(255) NOT NULL,
  `faq_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(2, 'What is a healthy diet??', 'The fundamental principle to a healthy diet comes down to one word; balance. Many other factors are included to ensure a balanced diet, but essentially eating enough food that provides the range of nutrients your body requires encourages the promotion of '),
(3, 'How can you benefit from a healthy diet?', 'Eating a healthy diet most obviously will assist you in losing weight, but healthy eating has many other benefits. Changing your diet can significantly improve your general health, tackling diseases associated with heart conditions and cholesterol, as wel'),
(4, 'How can you achieve a healthy diet?', 'The general rules for healthy eating is that natural foods are generally healthy, and if a product has been overly processed it may contain unhealthy ingredient such as added sugars or ‘bad’ fats. Cutting down on sugars, fats and salts is usually a good p'),
(5, 'What is the relationship between eating healthily and calories?', 'Calories are your body’s source of fuel. We need to refuel our energy supply by eating food, yet many diets have branded calories as our enemy for weight, yet calories are a necessary part of our lives. A regular man should aim for around 2500 calories, a'),
(6, 'Are carbs unhealthy?', 'Many popular diets brand carbs as bad for your waistline and therefore your health, which when consumed excessively with other nutrients can have a negative effect, but carbs are an essential element to your diet. Many different foods contain carbs, inclu'),
(7, 'Are foods that contain sugar unhealthy? ?', 'Sugar can be an enemy to a healthy diet, tasting so delicious in a variety of food and even hidden in foods that you wouldn’t suspect. Yet it is important to address the difference between natural and added sugars for a healthy diet. Sugars are carbs whic'),
(8, 'How can a healthy diet affect cholesterol?', 'Cholesterol is a fat based substance that is needed within the body, but when present in excessive amounts can cause serious health problems. Low density cholesterol will cause blocks in the arteries, significantly increasing the risk of heart disease, al'),
(9, 'What is omega-3 and why should you eat it?', 'As healthy eating and fitness become more present in the consciousness of society, much debate has surrounded whether fats should be included into a healthy diet and if so which fats. As the tag word ‘superfood’ has emerged, omega-3 has been branded as th'),
(10, 'How important are fruit and veg?', 'To achieve a healthy diet, vegetables and fruit must be a vital feature to ensure the access to a mixture of vitamins and minerals that are abundant within them. Not only do fruit and veg provide a rich source of vitamins, minerals and antioxidants, they ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `totalCalories` int(255) NOT NULL,
  `age` int(255) NOT NULL,
  `height` int(255) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`, `totalCalories`, `age`, `height`, `weight`, `gender`) VALUES
(273, 'Tarik', 'Sadiku', 'tarik123@gmail.com', '123', 0, 0, 0, '', ''),
(441, 't', 'Sadikuu', 'tarik1234@gmail.com', '1234', 0, 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=945;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
