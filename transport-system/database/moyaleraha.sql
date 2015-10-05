-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2014 at 06:12 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moyaleraha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `code` varchar(25) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `active`, `code`, `date`) VALUES
(1, 'jaylo', '7914c0f27f44cf89d878f3a8d87acf31', 'jayloabdullahi@yahoo.com', 1, '12345', 'November 17,2014');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_id` int(11) NOT NULL,
  `pass_id` int(11) NOT NULL,
  `date` varchar(254) NOT NULL,
  `to` varchar(254) NOT NULL,
  `from` varchar(254) NOT NULL,
  `seats` int(60) NOT NULL,
  `booked` int(1) NOT NULL,
  `fare` int(11) NOT NULL,
  `trip_type` varchar(254) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `bus_id`, `pass_id`, `date`, `to`, `from`, `seats`, `booked`, `fare`, `trip_type`) VALUES
(84, 1, 40, '11/30/2014', 'isiolo', 'sololo', 3, 1, 9000, '2'),
(85, 1, 41, '11/30/2014', 'moyale', 'marsabit', 3, 0, 6000, '2'),
(88, 1, 44, '12/03/2014', 'moyale', 'marsabit', 2, 0, 4000, '2'),
(89, 1, 45, '12/02/2014', 'sololo', 'marsabit', 2, 0, 2000, '2'),
(90, 1, 46, '12/02/2014', 'sololo', 'marsabit', 2, 0, 2000, '2'),
(91, 1, 47, '12/02/2014', 'isiolo', 'nairobi', 2, 1, 4000, '2');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE IF NOT EXISTS `buses` (
  `bus_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_reg_no` varchar(254) NOT NULL,
  `departure_time` varchar(254) NOT NULL,
  `capacity` int(60) NOT NULL,
  `driver_name` varchar(254) NOT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`bus_id`, `bus_reg_no`, `departure_time`, `capacity`, `driver_name`) VALUES
(1, 'KCB 890K', '7.00am', 60, 'Kowido Kelvin'),
(2, 'KBB 123J', '5.00am', 60, 'Juma'),
(3, 'KKK 666J', '8.00am', 60, 'Sage Abdullahi'),
(4, 'KBH 789J', '4.30am', 60, 'Oliver Kiprono'),
(5, 'KCH 890K', '5.30am', 60, 'Justice');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(254) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `message` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(10, 'Jillo Abdullahi', 'jayloabdullahi@yahoo.com', 'I am the new boss'),
(11, 'Jillo Abdullahi', 'jayloabdullahi@yahoo.com', 'Your services are delightful'),
(12, 'df', 'jessica.alba@gmail.com', 'ldfsl'),
(13, 'Juma Abdullahi', 'jjjjjj@yahoo.com', 'I am fresh'),
(14, 'Amina', 'amisha.abdul@yahoo.com', 'I do not like the online service');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `pass_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(254) NOT NULL,
  `lastname` varchar(254) NOT NULL,
  `gender` varchar(254) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(254) NOT NULL,
  PRIMARY KEY (`pass_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pass_id`, `firstname`, `lastname`, `gender`, `phonenumber`, `email`) VALUES
(1, 'Jillo', 'Abdullahi', 'Male', '0720471303', 'jayloabdullahi@yahoo.com'),
(2, 'Daro', 'Abdullahi', 'Male', '0720090210', 'darros.abdullahi@gmail.com'),
(3, '', '', 'Male', '', ''),
(4, '', '', 'Male', '', ''),
(5, '', '', 'Male', '', ''),
(6, '', '', 'Male', '', ''),
(7, 'Amina', 'Abdullahi', 'Female', '0719692529', 'amisha.abdul@yahoo.com'),
(8, 'Juma', 'Abdullahi', 'Male', '0720090210', 'jayloabdullahi@yahoo.com'),
(9, 'Yassir', 'Ali', 'Male', '0720231456', 'yassirali@gmail.com'),
(10, 'sdfghj', 'jfbg', 'Male', '0719692529', 'jayloabdullahi@yahoo.com'),
(11, 'sdfghj', 'jfbg', 'Male', '0719692529', 'jayloabdullahi@yahoo.com'),
(12, 'sdfghj', 'jfbg', 'Male', '0719692529', 'jayloabdullahi@yahoo.com'),
(13, 'sdfghj', 'jfbg', 'Male', '0719692529', 'jayloabdullahi@yahoo.com'),
(14, 'John', 'Kariuki', 'Male', '0719692529', 'jayloabdullahi@yahoo.com'),
(15, 'John', 'Kariuki', 'Male', '0719692529', 'jayloabdullahi@yahoo.com'),
(16, 'John', 'Kariuki', 'Male', '0719692529', 'jayloabdullahi@yahoo.com'),
(17, 'Amina', 'Abdullahi', 'Female', '0720471303', 'jayloabdullahi@yahoo.com'),
(18, 'Kowido', 'Kelvin', 'Male', '0720231456', 'jayloabdullahi@yahoo.com'),
(19, 'Juma', 'Abdullahi', 'Male', '0720090210', 'jayloabdullahi@yahoo.com'),
(20, 'Juma', 'Kariuki', 'Male', '0719692529', 'jayloabdullahi@yahoo.com'),
(21, 'hb', 'jhb', 'Male', 'jb', 'jh@b.com'),
(22, 'hb', 'jhb', 'Male', 'jb', 'jh@b.com'),
(23, 'hb', 'jhb', 'Male', 'jb', 'jh@b.com'),
(24, 'Victor', 'Jambo', 'Male', '0734363231', 'vicj@yahoo.com'),
(25, 'Denyque', 'Hermione', 'Female', '0716169594', 'darros.abdullahi@gmail.com'),
(26, 'Ali', 'Guracha', 'Male', '0720369852', 'gurachaAli@yahoo.com'),
(27, 'Halima', 'Denyque', 'Female', '0720369852', 'darros.abdullahi@gmail.com'),
(28, 'Juma', 'Abdullahi', 'Male', '0720471303', 'jayloabdullahi@gmail.com'),
(29, 'Juma', 'Abdullahi', 'Male', '0720090210', 'darros.abdullahi@gmail.com'),
(30, 'juma', 'Abdullahi', 'Female', '0705125643', 'jayloabdullahi@gmail.com'),
(31, 'jbhj', 'vhgqm', 'Male', '0721949259', 'john@g.com'),
(32, 'jbhj', 'vhgqm', 'Male', '0721949259', 'john@g.com'),
(33, 'yassir', 'Ali', 'Male', '0720369831', 'jayloabdullahi@yahoo.com'),
(34, 'Jillo', 'Abdullahi', 'Male', '0720471303', 'jaylo@yahoo.com'),
(35, 'kdjk', 'lsdf', 'Female', 'sdkf', 'dfkj@ksd.com'),
(36, 'Abdi', 'Tune', 'Male', '0720456123', 'abditune@gmail.com'),
(37, 'Abdullahi', 'Jirma', 'Male', '0728369123', 'abdullahi@yahoo.com'),
(38, 'Juma', 'Abdullahi', 'Male', '0720476191', 'juma.abdullahi@yahoo.com'),
(39, 'Jillo', 'Abdullahi', 'Male', '0720476191', 'jayloabdullahi@gmail.com'),
(40, 'Amina', 'Abdullahi', 'Female', '0719692529', 'amish.abdul@yahoo.com'),
(41, 'Jillo', 'Abdullahi', 'Female', '075', 'jayloabdullahi@gmail.com'),
(42, 'Juma', 'Abdullahi', 'Male', '0728137835', 'jayloabdullahi@yahoo.com'),
(43, 'Juma', 'Abdullahi', 'Male', '08988', 'jaylo@yahoo'),
(44, 'Jillo', 'Abdullahi', 'Male', '0726123654', 'jillo@gmail.com'),
(45, 'Jillo', 'Abdullahi', 'Male', '0726123654', 'jayloabdullahi@yahoo.com'),
(46, 'Jillo', 'Abdullahi', 'Male', '0726123654', 'jillo@gmail.com'),
(47, 'Juma', 'Abdullahi', 'Male', '0728137835', 'jayloabdullahi@yahoo.com'),
(48, 'jillo', 'abdullahi', 'Male', '0720471303', 'jayloabdullahi@yahoo.com'),
(49, 'Abdullahi', 'Woche', 'Male', '0720471303', 'juma.abdullahi@yahoo.com'),
(50, 'Juma', 'Abdullahi', 'Male', '07', 'juma.abdullahi@yahoo.com'),
(51, 'Jillo', 'Abdullahi', 'Female', '0720471303', 'jayloabdullahi@gmail.com'),
(52, 'Jillo', 'Abdullahi', 'Male', '0720471303', 'jayloabdullahi@gmail.com'),
(53, 'Jillo', 'Abdullahi', 'Male', '0720476191', 'juma.abdullahi@yahoo.com'),
(54, 'Abd', 'Jillo', 'Male', '0719692529', 'jayloabdullahi@gmail.com'),
(55, 'Jillo', 'Abdullahi', 'Male', '0720471303', 'jayloabdullahi@gmail.com'),
(56, 'Jillo', 'Abdullahi', 'Male', '0720471303', 'jayloabdullahi@gmail.com'),
(57, 'Jillo', 'Abdullahi', 'Male', '0728137835', 'jayloabdullahi@yahoo.com'),
(58, 'Jillo', 'Abdullahi', 'Male', '0719692529', 'jayloabdullahi@live.com'),
(59, 'Jillo', 'Abdullahi', 'Male', '0720471303', 'jayloabdullahi@live.com'),
(60, 'Juma', 'Abdullahi', 'Male', '0720471303', 'jayloabdullahi@gmail.com'),
(61, 'John', 'Kariuki', 'Male', '0721949259', 'j@g.com'),
(62, 'Juma', 'Abdullahi', 'Male', '0720471303', 'juma.abdullahi@yahoo.com'),
(63, 'Juma', 'Abdullahi', 'Male', '0720471303', 'juma.abdullahi@yahoo.com'),
(64, 'Shukri', 'Osman', 'Male', '0702564987', 'shukriosman@yahoo.com'),
(65, 'Shukri', 'Osman', 'Male', '0702564987', 'shukriosman@yahoo.com'),
(66, 'Amina', 'Abdullahi', 'Male', '0719692529', 'amish.abdul@yahoo.com'),
(67, 'Amina', 'Abdullahi', 'Male', '0719692529', 'amish.abdul@yahoo.com'),
(68, 'Gite', 'Abdullahi', 'Male', '0721949259', 'jayloabdullahi@gmail.com'),
(69, 'Juma', 'Abdullahi', 'Male', '0720471303', 'jayloabdullahi@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `route_id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(254) NOT NULL,
  `to` varchar(254) NOT NULL,
  `fare` varchar(254) NOT NULL,
  PRIMARY KEY (`route_id`),
  UNIQUE KEY `route_id` (`route_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`route_id`, `from`, `to`, `fare`) VALUES
(2, 'Nairobi', 'Sololo', '1500'),
(3, 'Nairobi', 'Marsabit', '1500'),
(4, 'Nairobi', 'Isiolo', '1000'),
(5, 'Moyale', 'Sololo', '500'),
(6, 'Moyale', 'Marsabit', '1000'),
(7, 'Moyale', 'Isiolo', '1500'),
(10, 'Moyale', 'Merille', '1500'),
(11, 'Moyale', 'Merille', '600'),
(19, 'Nairobi', 'Achers post', '1800');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
