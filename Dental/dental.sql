-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2015 at 08:27 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpatient`
--

CREATE TABLE IF NOT EXISTS `addpatient` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `patientname` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `housenumber` varchar(200) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contactnumber` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `addpatient`
--

INSERT INTO `addpatient` (`id`, `patientname`, `age`, `housenumber`, `fathername`, `address`, `contactnumber`, `email`) VALUES
(1, 'Amit', 22, 'C-671 motinagar new delhi', 'Bansilal', 'Delhi', 2147483647, 'rr@gmail.com'),
(2, 'abc', 11, 'dd', 'jk', 'sns', 454123, 'rk@mail.com'),
(3, 'aaa1', 26, 'C-671 motinagar new delhi', 'Bansilal', 'Delhi', 2147483647, 'rr@gmail.com'),
(4, 'praveen', 24, 'C-671 motinagar new delhi', 'Bansilal', 'Delhi', 2147483647, 'rr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dental`
--

CREATE TABLE IF NOT EXISTS `dental` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `housenumber` varchar(100) NOT NULL,
  `fatehrname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `dental`
--

INSERT INTO `dental` (`id`, `name`, `address`, `housenumber`, `fatehrname`) VALUES
(1, 'ritesh', 'delhi', 'ded', '2015-07-01'),
(2, 'hgfd', 'gjkk', 'vhbjk', '2015-07-02'),
(4, 'Raj', 'delhi', '45', 'ranu'),
(5, 'Sumit', 'jaipur', '85', 'sonu ray'),
(6, 'sunil', 'delhi', 'c-456', 'vishal'),
(7, 'sunit', 'delhi', 'c-456', 'vishal'),
(8, 'jyoti', 'jpr', 'c-8', 'rakesh pratap'),
(9, 'kishore', 'jpr', 'c-8', 'rakesh pratap'),
(10, 'rajeev', 'jpr', 'c-8', 'jikltap'),
(11, 'prabhash', 'dls', 'c-8', 'jikltap'),
(12, 'monika', 'alwar', 'c-8', 'charan'),
(13, 'asutosh', 'alwar', 'c-8', 'charan'),
(14, 'pratap', 'alwar', 'c-8', 'charan'),
(15, 'asd', 'alwar', 'c-8', 'charan'),
(16, 'vikas', 'alwar', 'c-8', 'charan'),
(17, 'manish', 'delhi', 't-2 33', 'virendra'),
(18, 'saif', 'pnt', '52', 'jawed'),
(19, 'khushboo', 'delhi', 't-2 33', 'bnkumar'),
(20, 'kaif', 'pnt', '52', 'jawed'),
(21, 'sahalini', 'delhi', 't-2 33', 'bnkumar'),
(22, 'fauzia', 'pnt', '52', 'jawed'),
(23, 'amit', 'delhi', 't-2 33', 'bansli lal'),
(24, 'rukshaar', 'pnt', '52', 'jawed'),
(25, 'jatin', 'delhi', 't-2 33', 'bansli lal'),
(26, 'faiz', 'pnt', '52', 'jawed'),
(27, 'praveen', 'bikaneer', 'g-41', 'akadhy'),
(28, 'sahil', 'MOTINAGAR', 'l45', 'kmalnath');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
