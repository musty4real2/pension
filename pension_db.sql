-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2001 at 12:39 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pension`
--

-- --------------------------------------------------------

--
-- Table structure for table `lgs`
--

CREATE TABLE `lgs` (
  `id` int(10) NOT NULL auto_increment,
  `lg` varchar(200) NOT NULL,
  `lgcode` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `lgs`
--

INSERT INTO `lgs` (`id`, `lg`, `lgcode`) VALUES
(1, 'Agaie', 'NIG001'),
(2, 'Agwara', 'NIG002'),
(3, 'Bida', 'NIG003'),
(4, 'Borgu', 'NIG004'),
(5, 'Bosso', 'NIG005'),
(6, 'Chanchanga', 'NIG006'),
(7, 'Edata', 'NIG007'),
(8, 'Gbako', 'NIG008'),
(9, 'Gurara', 'NIG009'),
(10, 'Katcha', 'NIG010'),
(11, 'Kontangora', 'NIG011'),
(12, 'Lapai', 'NIG012'),
(13, 'Lavun', 'NIG013'),
(14, 'Magama', 'NIG014'),
(15, 'Mariga', 'NIG015'),
(16, 'Mashegu', 'NIG016'),
(17, 'Mokwa', 'NIG017'),
(18, 'Munya', 'NIG018'),
(19, 'Paiko', 'NIG019'),
(20, 'Rafi', 'NIG020'),
(21, 'Rijan', 'NIG021'),
(22, 'Suleja', 'NIG022'),
(23, 'Tafa', 'NIG023'),
(24, 'Wusihshi', 'NIG024'),
(25, 'Shiroro', 'NIG025');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(200) NOT NULL auto_increment,
  `account_number` varchar(200) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sort_code` varchar(200) NOT NULL,
  `naration` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `account_number`, `bank`, `amount`, `name`, `sort_code`, `naration`) VALUES
(1, '001', 'gtb', '100000', 'mustapha', '003', '10020120');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(10) NOT NULL auto_increment,
  `lg_to_vote` varchar(200) NOT NULL,
  `date_of_first_appointment` varchar(20) NOT NULL,
  `date_of_rtd` varchar(20) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `fileno` varchar(200) NOT NULL,
  `name_of_beneficiary` varchar(200) NOT NULL,
  `type_of_benefit` varchar(200) NOT NULL,
  `payment_no` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `payment_status` varchar(200) NOT NULL,
  `date` int(5) NOT NULL,
  `diff` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `lg_to_vote`, `date_of_first_appointment`, `date_of_rtd`, `amount`, `fileno`, `name_of_beneficiary`, `type_of_benefit`, `payment_no`, `remark`, `payment_status`, `date`, `diff`) VALUES
(1, 'Magama', '3/6/2015', '5/2/2014', '3891212313', '001', 'MUSTAPHA SULEIMAN', 'RETIREMENT BENEFIT', '00012', '', 'paid', 2021, '2001-05-25'),
(2, 'Bosso', '3/6/2015', '5/2/2014', '3891212313', '001', 'MUSTAPHA SULEIMAN', 'RETIREMENT BENEFIT', '00012', '', 'paid', 2021, '2001-05-25'),
(3, 'Agaie', '3/6/2015', '5/2/2014', '3891212313', '001', 'MUSTAPHA SULEIMAN', 'RETIREMENT BENEFIT', '00012', '', 'paid', 2021, '2001-05-25'),
(4, 'Agaie', '3/6/2015', '5/2/2014', '3891212313', '001', 'MUSTAPHA SULEIMAN', 'RETIREMENT BENEFIT', '00012', '', 'paid', 2021, '2001-05-25'),
(5, 'Agaie', '3/6/2015', '5/2/2014', '3', '001', 'MUSTAPHA SULEIMAN', 'RETIREMENT BENEFIT', '00012', '', 'paid', 2021, '2001-05-25'),
(6, 'Agaie', '3/6/2015', '5/2/2014', '3', '001', 'MUSTAPHA SULEIMAN', 'RETIREMENT BENEFIT', '00012', '', 'paid', 2021, '2001-05-25'),
(7, 'Agaie', '3/6/2015', '5/2/2014', '3', '001', 'MUSTAPHA SULEIMAN', 'RETIREMENT BENEFIT', '00012', '', 'paid', 2021, '2001-05-25'),
(8, 'Agaie', '5/2/2013', '3/3/2015', '86767', '001', 'MUSA', 'DEATH BENEFIT', '9', '', 'paid', 2021, '2001-05-25'),
(9, 'Agaie', '1/2/2020', '1/1/2020', '90000', '0023', 'MOHAMMED', 'RETIREMENT BENEFIT', '003', '', 'paid', 2020, '0000-00-00'),
(10, 'Agaie', '1/2/2020', '1/1/2020', '90000', '0023', 'MOHAMMED', 'RETIREMENT BENEFIT', '003', '', 'paid', 2020, '0000-00-00'),
(11, 'Agaie', '1/2/2020', '1/1/2020', '90000', '0023', 'MOHAMMED', 'RETIREMENT BENEFIT', '003', '', 'paid', 2020, '0000-00-00'),
(12, 'Agaie', '4/4/2016', '1/3/2015', '1000000', '001', 'MUSAAASA', 'DEATH BENEFIT', '313', '', 'paid', 2019, '2001-05-26');
