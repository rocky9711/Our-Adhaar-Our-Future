-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 08:15 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myway`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnews`
--

CREATE TABLE IF NOT EXISTS `addnews` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `dateofnews` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnews`
--

INSERT INTO `addnews` (`news_id`, `news_title`, `description`, `dateofnews`) VALUES
(1, 'Digital India', 'PM Modi.......', '2015-07-31'),
(2, 'Selfie with Daughter', 'PM Modi launches the selfie with daughter to promote Beti Bachao Beti Padhao', '2015-07-29'),
(3, 'Greece crisis', 'Economic meltdown in Greece,faces the threat of losing the status of a European nation', '2015-07-28'),
(4, 'Terrorists post a pic on FB', '12 youngsters who joined the terrorist group posted their photo on the social network', '2015-07-30'),
(5, 'Bangladesh win series', 'Bangladesh win the ODI series 2-1 against India.', '2015-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `first_name`, `type`) VALUES
('anmol_kang1@yahoo.co.in', '1234', 'Anmol1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `cand_id` int(6) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `cphoto` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `haddress` varchar(250) NOT NULL,
  `oaddress` varchar(250) NOT NULL,
  `pphoto` varchar(100) NOT NULL,
  `party` varchar(30) NOT NULL,
  `const` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `count` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cand_id`, `cname`, `fname`, `cphoto`, `email`, `mob`, `haddress`, `oaddress`, `pphoto`, `party`, `const`, `state`, `count`) VALUES
(1, 'Narendra Modi', 'Modi ke papa', 'candimages/fU6NY-EI_400x400.jpeg', 'anmoldeep.kang@gmail.com', 7508293475, 'Gujarat', 'PMO,New Delhi', 'electionsymbols/download.jpg', 'BJP', 'Jalandhar', 'Punjab', 5),
(2, 'Amarinder Singh', 'Yadavindra Singh', 'candimages/captain.jpg', 'amarinder_singh@gmail.com', 9845678945, 'Patiala', 'Patiala', 'electionsymbols/congress.gif', 'Indian National Congress', 'Amritsar', 'Punjab', 33),
(3, 'Arun Jaitley', 'Kishen Jaitley', 'candimages/Arun-Jaitley.jpg', 'arun_jaitley@gmail.com', 9888754123, 'New Delhi', 'New Delhi', 'electionsymbols/bjp.jpg', 'BJP', 'Amritsar', 'Punjab', 16),
(4, 'Harsimrat Kaur Badal', 'Parkash Singh Badal', 'candimages/harsimrat.jpg', 'harsimrat_badal@gmail.com', 9874565478, 'Bathinda', 'New Delhi', 'electionsymbols/bjp.jpg', 'BJP', 'Bathinda', 'Punjab', 1),
(5, 'Vinod Khanna', 'Kishanchand Khanna', 'candimages/vinod.jpg', 'vinod_khanna@gmail.com', 9874587459, 'Mumbai', 'Delhi', 'electionsymbols/bjp.jpg', 'BJP', 'Gurdaspur', 'Punjab', 0),
(6, 'Santokh Singh Chaudhary', 'Tarlok Singh Chaudhary', 'candimages/santokh.jpg', 'santokh_chaudhary@yahoo.com', 9875412589, 'Jalandhar', 'New Delhi', 'electionsymbols/congress.gif', 'Indian National Congress', 'Jalandhar', 'Punjab', 2),
(8, 'Dharam Vira Gandhi', 'Rajvir Gandhi', 'candimages/dharmvir.jpg', 'dharam_vir@gmail.com', 9874157469, 'Patiala', 'Patiala', 'electionsymbols/aap.jpg', 'Aam Aadmi Party', 'Patiala', 'Punjab', 3),
(9, 'Preneet Kaur', 'Harjit Singh', 'candimages/preneet.jpg', 'preneet_kar@gmail.com', 9875414569, 'Patiala', 'New Delhi', 'electionsymbols/congress.gif', 'Indian National Congress', 'Patiala', 'Punjab', 0),
(10, 'Bhagwant Maan', 'Harpreet Singh Maan', 'candimages/bhagwant.jpg', 'bhagwant_aap@yahoo.com', 7845985215, 'Sangrur', 'New Delhi', 'electionsymbols/aap.jpg', 'Aam Aadmi Party', 'Sangrur', 'Punjab', 1),
(11, 'Sukhdev Singh Dhindsa', 'Hardev Singh', 'candimages/dhindsa.jpg', 'dhindsa_sukhdev@gmail.com', 8547512364, 'Ludhiana', 'Chandigarh', 'electionsymbols/sad.png', 'Shiromani Akaali Dal', 'Sangrur', 'Punjab', 0),
(12, 'Partap Singh Bajwa', 'Kamaljeet Singh Bajwa', 'candimages/partap.jpg', 'partap_bajwa@hotmail.com', 8547512365, 'Jalandhar', 'Chandigarh', 'electionsymbols/congress.gif', 'Indian National Congress', 'Gurdaspur', 'Punjab', 0),
(13, 'Ranjit Singh Brahmpura', 'Sukhdev Singh', 'candimages/brahmpura.jpg', 'ranjit_brahmpura@rediff.com', 9875125469, 'Ropar', 'Chandigarh', 'electionsymbols/sad.png', 'Shiromani Akaali Dal', 'Khadoor Sahib', 'Punjab', 0),
(14, 'Harminder Singh Gill', 'Rupinder Singh', 'candimages/Harminder-Gill.jpg', 'harminder.gill@yahoo.co.in', 9658745126, 'Jalandhar\r\n', 'Ludhiana', 'electionsymbols/congress.gif', 'Indian National Congress', 'Khadoor Sahib', 'Punjab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `constituency`
--

CREATE TABLE IF NOT EXISTS `constituency` (
  `const_id` int(10) NOT NULL,
  `const_name` varchar(50) NOT NULL,
  `population` int(10) NOT NULL,
  `wards` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constituency`
--

INSERT INTO `constituency` (`const_id`, `const_name`, `population`, `wards`, `state`) VALUES
(3, 'Jalandhar', 20000, '1,2,3', 'Punjab'),
(4, 'Cheeka', 10000, '1,2,3', 'Haryana'),
(5, 'Amritsar', 1500000, '1,2,3,4', 'Punjab'),
(6, 'Varanasi', 100000, '1,2,3,4', 'Uttar Pradesh'),
(8, 'Bathinda', 1000000, '1,2,3,4,5', 'Punjab'),
(9, 'Patiala', 1500000, '1-20', 'Punjab'),
(10, 'Ludhiana', 3000000, '1-30', 'Punjab'),
(11, 'Gurdaspur', 1000000, '1-15', 'Punjab'),
(12, 'Sangrur', 800000, '1,2,4,5,6', 'Punjab'),
(13, 'Khadoor Sahib', 1015624, '1,2,5,3,4', 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `const_login`
--

CREATE TABLE IF NOT EXISTS `const_login` (
  `id` int(10) NOT NULL,
  `const_id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `off_name` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `const_login`
--

INSERT INTO `const_login` (`id`, `const_id`, `email`, `off_name`, `mob`, `password`) VALUES
(10000, 3, 'jalandhar@gmail.com', 'Anmoldeep', 7508293475, '123456'),
(10001, 5, 'amritsar@gmail.com', 'Abhishek', 7894587560, '1234'),
(10002, 8, 'bathinda123', 'Anmoldeep Singh', 7508293475, '1234'),
(10003, 12, 'sangrur123', 'Akshay Kumar', 7508293475, '1234'),
(10004, 9, 'patiala123', 'ABC', 7508293475, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE IF NOT EXISTS `voter` (
  `vid` int(10) NOT NULL,
  `adhaar` bigint(12) NOT NULL,
  `electno` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `s_pin` int(15) NOT NULL,
  `pin1` int(6) NOT NULL,
  `pin2` varchar(10) DEFAULT NULL,
  `cand_id` int(10) DEFAULT NULL,
  `date_vote` varchar(20) DEFAULT NULL,
  `time_vote` varchar(20) DEFAULT NULL,
  `register_date` varchar(20) NOT NULL,
  `register_time` varchar(20) NOT NULL,
  `off_login` varchar(30) NOT NULL,
  `const_id` int(10) NOT NULL,
  `check` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`vid`, `adhaar`, `electno`, `name`, `fname`, `reason`, `mob`, `email`, `s_pin`, `pin1`, `pin2`, `cand_id`, `date_vote`, `time_vote`, `register_date`, `register_time`, `off_login`, `const_id`, `check`) VALUES
(7, 9988787876667676, '1355623', 'Tania Ahuja', 'Navinder Ahuja', 'N.A.', 9988278402, 'email2@gmail.com', 23, 10210653, '7ZK9OD', NULL, NULL, NULL, '05-Jul-2015', '04:32:15 PM', 'jalandhar@gmail.com', 3, 'N'),
(8, 1234567891234587, 'HZS342', 'shubham', 'Janak Raj', 'NA', 1234567, 'shubham.mainai@gmail.com', 123, 687453, 'R672A6', NULL, NULL, NULL, '06-Jul-2015', '03:26:23 PM', 'jalandhar@gmail.com', 3, 'Y'),
(9, 4578965414598753, 'HXG5462', 'Vikramjeet Singh', 'Harjinder Singh', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 12345, 164632, '80B1Y7', NULL, NULL, NULL, '07-Jul-2015', '10:12:34 AM', 'jalandhar@gmail.com', 3, 'Y'),
(10, 7894145712578945, 'HGS2838', 'PK', 'PK ke papa', 'doosra gola ka hoon', 7508293475, 'anmol_kang1@yahoo.co.in', 2589, 124291, 'P8QBU9', NULL, NULL, NULL, '07-Jul-2015', '01:27:46 PM', 'jalandhar@gmail.com', 3, 'Y'),
(11, 124375873526, 'HAS4356', 'Akshay Kumar', 'Ravinder Kumar', 'NA', 9875412684, 'anmol_kang1@yahoo.co.in', 1234, 623559, '5GXXE8', NULL, NULL, NULL, '07-Jul-2015', '01:57:25 PM', 'jalandhar@gmail.com', 3, 'Y'),
(12, 452724359856, 'HAW26484', 'Navrinder Singh', 'Maninder Singh', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 723174, '7FW3MJ', NULL, NULL, NULL, '07-Jul-2015', '02:24:25 PM', 'jalandhar@gmail.com', 3, 'Y'),
(13, 452724359856, 'HAW26484', 'Navrinder Singh', 'Maninder Singh', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 683679, '7FW3MJ', NULL, NULL, NULL, '07-Jul-2015', '02:26:45 PM', 'jalandhar@gmail.com', 3, 'Y'),
(14, 452724359856, 'Hfdsxk', 'Anmoldeep', 'LS Kang', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 9812, 179394, '7FW3MJ', NULL, NULL, NULL, '07-Jul-2015', '02:27:32 PM', 'jalandhar@gmail.com', 3, 'Y'),
(15, 452724359856, 'Hfdsxk', 'Anmoldeep', 'LS Kang', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 9812, 149383, '7FW3MJ', NULL, NULL, NULL, '07-Jul-2015', '02:28:34 PM', 'jalandhar@gmail.com', 3, 'Y'),
(16, 3651689, 'Hfdsxk', 'Anmoldeep', 'LS Kang', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 8756, 554263, 'WG8996', NULL, '07-Jul-2015', '08:02:54 PM', '07-Jul-2015', '02:29:18 PM', 'jalandhar@gmail.com', 3, 'Y'),
(17, 9873987, 'Hfdsxk', 'Anmoldeep', 'LS Kang', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 5478, 593453, 'BV8R8P', NULL, NULL, NULL, '07-Jul-2015', '02:31:28 PM', 'jalandhar@gmail.com', 3, 'Y'),
(18, 1273876378398, 'whdkjl', 'anmol', 'NA', 'jks', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 837555, 'J2S7UJ', NULL, NULL, NULL, '07-Jul-2015', '02:39:28 PM', 'jalandhar@gmail.com', 3, 'Y'),
(19, 2635478956, 'HSD2536', 'Parth Sharma', 'Sharma', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 1258, 279284, 'I4SM8U', NULL, NULL, NULL, '07-Jul-2015', '03:23:53 PM', 'jalandhar@gmail.com', 3, 'Y'),
(21, 341754896574, 'HKS87365', 'Abhishek Bachchan', 'Amitabh Bachchan', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 988193, '3L49D1', 2, '08-Jul-2015', '10:07:18 PM', '08-Jul-2015', '03:10:32 PM', 'amritsar@gmail.com', 5, 'Y'),
(22, 123435462435, 'EDS2345', 'Shahrukh Khan', 'Rubak Khan', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 515855, 'G5QP3E', 3, '09-Jul-2015', '09:50:22 AM', '09-Jul-2015', '09:47:19 AM', 'amritsar@gmail.com', 5, 'N'),
(23, 547896574512, 'laks289', 'Jasmeen', 'G Sidhu', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 956689, '40ED92', 2, '09-Jul-2015', '09:58:28 AM', '09-Jul-2015', '09:56:28 AM', 'amritsar@gmail.com', 5, 'N'),
(24, 123456789123, '123xz', 'Akshay Kumar', 'Mr kumar', 'ajdkdsjkd', 9780584177, 'mainishubham632@gmail.com', 123, 313144, '0831U5', 2, '09-Jul-2015', '02:24:35 PM', '09-Jul-2015', '02:13:24 PM', 'amritsar@gmail.com', 5, 'N'),
(25, 541326534786, 'HGW4253', 'Sanjoli Bassi', 'Mr Bassi', 'NA', 9815515717, 'anmol_kang1@yahoo.co.in', 1234, 267651, '3M3051', 2, '09-Jul-2015', '08:32:04 PM', '09-Jul-2015', '08:20:39 PM', 'amritsar@gmail.com', 5, 'Y'),
(26, 857489651247, '', 'Anmoldeep', 'Lakhwinder Singh', 'NA', 1234785967, 'anmol_kang1@yahoo.co.in', 1235, 451464, NULL, NULL, NULL, NULL, '16-Jul-2015', '01:23:14 PM', 'amritsar@gmail.com', 5, 'N'),
(27, 847547815632, '', 'Anmoldeep', 'Lakhwinder Singh', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 12345, 959246, NULL, NULL, NULL, NULL, '16-Jul-2015', '01:26:56 PM', 'amritsar@gmail.com', 5, 'N'),
(28, 658414532475, 'HFG9815', 'Lakshdeep', 'Tarsem Lal', 'na', 7837506950, 'lakshdhw', 143521, 859233, 'E3B85A', 2, '16-Jul-2015', '03:19:05 PM', '16-Jul-2015', '03:17:04 PM', 'amritsar@gmail.com', 5, 'Y'),
(30, 352417643243, 'HAF1524', 'Navneet Kaur', 'Balwinder Singh', 'NA', 7508293475, 'anmol_kang1@yahoo.co.in', 12345, 671748, '7694MM', 2, '19-Jul-2015', '08:10:20 PM', '19-Jul-2015', '08:07:09 PM', 'amritsar@gmail.com', 5, 'Y'),
(34, 124352362547, 'HAG3746', 'Anmoldeep Singh', 'Lakhwinder Singh', 'na', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 863823, NULL, NULL, NULL, NULL, '22-Jul-2015', '01:09:05 PM', 'amritsar@gmail.com', 5, 'N'),
(35, 123435463475, 'HAS9815', 'Anmoldeep Singh', 'Lakhwinder Singh', '', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 544933, 'S7LZ2A', 3, '22-Jul-2015', '01:33:57 PM', '22-Jul-2015', '01:14:42 PM', 'amritsar@gmail.com', 5, 'Y'),
(37, 273645128793, 'HGA263', 'Nikhil Singla', 'Mr Singla', '', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 316511, 'YJ8EB1', 4, '24-Jul-2015', '09:39:58 PM', '24-Jul-2015', '09:36:04 PM', 'bathinda123', 8, 'Y'),
(38, 125364783645, 'JHG2615', 'Sandeep Singh', 'Harjit Singh', '', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 897538, 'BI7C3M', NULL, NULL, NULL, '27-Jul-2015', '11:23:02 AM', 'amritsar@gmail.com', 5, 'N'),
(39, 121457896541, 'EHTS1526', 'Anmoldeep Singh', 'Lakhwinder Singh', '', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 672111, 'KNME0Y', 2, '02-May-2016', '12:57:44 PM', '08-Aug-2015', '05:28:05 PM', 'amritsar@gmail.com', 5, 'Y'),
(40, 162534256735, 'HFS1625', 'Anmoldeep Singh', 'Lakhwinder Singh', '', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 355787, '5AIRE3', 3, '08-Aug-2015', '07:32:16 PM', '08-Aug-2015', '07:29:36 PM', 'amritsar@gmail.com', 5, 'Y'),
(41, 321458967458, 'KJL7162', 'Anmoldeep Singh Kang', 'Lakhwinder Singh Kang', '', 7508293475, 'anmoldeep.kang@gmail.com', 1234, 733616, 'V8S9YY', 2, '10-Aug-2015', '10:13:58 PM', '10-Aug-2015', '09:04:13 PM', 'amritsar@gmail.com', 5, 'Y'),
(42, 547547851236, 'KLJ1726', 'Anmoldeep Singh', 'Lakhwinder Singh Kang', '', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 921856, '80UPP4', 3, '11-Aug-2015', '07:21:46 PM', '11-Aug-2015', '07:16:41 PM', 'amritsar@gmail.com', 5, 'N'),
(43, 625314234565, 'JKH1526', 'GuntaasJeet Singh', 'KJ Singh', '', 8727965595, 'abc@gmail.com', 1234, 714183, 'Z2F80M', 2, '11-Aug-2015', '07:25:58 PM', '11-Aug-2015', '07:24:41 PM', 'amritsar@gmail.com', 5, 'Y'),
(44, 478415236987, 'KLH7265', 'Anmol Saxena', 'Mr. Saxena', '', 7508293475, 'anmolsaxena@gmail.com', 1234, 242799, 'KLXJ8F', 10, '12-Aug-2015', '12:52:29 PM', '12-Aug-2015', '12:50:53 PM', 'sangrur123', 12, 'Y'),
(45, 475412365748, 'KJF6152', 'Akhilesh Bhatia', 'Mr Bhatia', '', 7508293475, 'akhil.thebhatia@gmail.com', 12345, 494844, 'YK58VQ', 8, '16-Dec-2016', '05:26:55 PM', '13-Aug-2015', '08:50:32 AM', 'patiala123', 9, 'Y'),
(46, 132436472572, 'HFS2863', 'Amandeep Singh', 'A SIngh', '', 9839865467, 'anmol_kang1@yahoo.co.in', 123456, 191928, '195T9G', 2, '01-Dec-2015', '12:26:31 PM', '30-Nov-2015', '11:35:35 AM', 'amritsar@gmail.com', 5, 'N'),
(47, 123475415975, 'hfdk5482', 'Anmoldeepak Singh Aulakh', 'abcd', 'kmm', 8427029944, 'anmoldeep.kang@gmail.com', 1234, 0, '2J3M1B', 3, '18-Dec-2016', '07:45:42 PM', '18-Dec-2016', '07:02:18 PM', 'amritsar@gmail.com', 5, 'N'),
(48, 784523651458, 'kjsh1542', 'John Legend', 'Mark Legend', '', 7508293475, 'anmoldeep.kang@gmail.com', 81, 954492, NULL, NULL, NULL, NULL, '18-Dec-2016', '09:52:12 PM', 'amritsar@gmail.com', 5, 'N'),
(49, 457521681452, 'ksjh5421', 'Ayush', 'vinod jain', '', 7508293475, 'anmol_kang1@yahoo.co.in', 81, 0, NULL, NULL, NULL, NULL, '18-Dec-2016', '09:56:32 PM', 'amritsar@gmail.com', 5, 'N'),
(50, 648556751458, 'd5d1', 'kaed', 'mans', '', 7508293475, 'anmoldeep.kang@gmail.com', 81, 278, NULL, NULL, NULL, NULL, '18-Dec-2016', '10:03:16 PM', 'amritsar@gmail.com', 5, 'N'),
(51, 845169851423, 'ksdjk1452', 'Anmoldeep Singh', 'Lakhwinder Singh Kang', '', 7508293475, 'anmoldeep.kang@gmail.com', 1234, 574818, '30DF97', 2, '18-Dec-2016', '10:25:40 PM', '18-Dec-2016', '10:24:03 PM', 'amritsar@gmail.com', 5, 'Y'),
(52, 542198653214, 'KJH1234', 'Anmoldeep Singh', 'Lakhwinder Singh Kang', '', 7508293475, 'anmoldeep.kang@gmail.com', 1234, 965874, '1V0HV1', 2, '19-Dec-2016', '09:49:29 AM', '19-Dec-2016', '09:47:35 AM', 'amritsar@gmail.com', 5, 'Y'),
(53, 451289651456, 'hdg1234', 'Anmoldeep Singh', 'ksh', '', 7508293475, 'anmol_kang1@yahoo.co.in', 1234, 325551, 'L72252', NULL, NULL, NULL, '19-Dec-2016', '12:25:59 PM', 'amritsar@gmail.com', 5, 'N'),
(54, 451278964125, 'jdhf1234', 'Anmoldeep', 'Lakhwinder Singh Kang', '', 7508293475, 'anmoldeep.kang@gmail.com', 1234, 229637, 'S5ML2D', 2, '20-Dec-2016', '12:46:59 PM', '20-Dec-2016', '12:44:47 PM', 'amritsar@gmail.com', 5, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `voting_date`
--

CREATE TABLE IF NOT EXISTS `voting_date` (
  `date_of_voting` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting_date`
--

INSERT INTO `voting_date` (`date_of_voting`) VALUES
('2016-12-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addnews`
--
ALTER TABLE `addnews`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cand_id`);

--
-- Indexes for table `constituency`
--
ALTER TABLE `constituency`
  ADD PRIMARY KEY (`const_id`);

--
-- Indexes for table `const_login`
--
ALTER TABLE `const_login`
  ADD PRIMARY KEY (`id`), ADD KEY `const_id` (`const_id`), ADD KEY `email` (`email`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`vid`), ADD KEY `adhaar` (`adhaar`), ADD KEY `cand_id` (`cand_id`), ADD KEY `off_login` (`off_login`), ADD KEY `const_id` (`const_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addnews`
--
ALTER TABLE `addnews`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `cand_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `constituency`
--
ALTER TABLE `constituency`
  MODIFY `const_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `const_login`
--
ALTER TABLE `const_login`
ADD CONSTRAINT `const_login_ibfk_1` FOREIGN KEY (`const_id`) REFERENCES `constituency` (`const_id`);

--
-- Constraints for table `voter`
--
ALTER TABLE `voter`
ADD CONSTRAINT `voter_ibfk_1` FOREIGN KEY (`const_id`) REFERENCES `constituency` (`const_id`),
ADD CONSTRAINT `voter_ibfk_2` FOREIGN KEY (`cand_id`) REFERENCES `candidate` (`cand_id`),
ADD CONSTRAINT `voter_ibfk_3` FOREIGN KEY (`off_login`) REFERENCES `const_login` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
