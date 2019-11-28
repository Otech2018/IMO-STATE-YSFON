-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 11:16 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `type` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `type`, `name`, `status`) VALUES
(3, 'YSFON@gmail.com', 'YSFON2019', 'Admin', 'YSFON', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `predict`
--

CREATE TABLE IF NOT EXISTS `predict` (
`id` int(111) NOT NULL,
  `home_team` varchar(111) NOT NULL,
  `home_logo` varchar(111) NOT NULL,
  `home_score` varchar(111) NOT NULL,
  `away_team` varchar(111) NOT NULL,
  `away_logo` varchar(111) NOT NULL,
  `away_score` varchar(111) NOT NULL,
  `date_cal` varchar(111) NOT NULL,
  `match_date` varchar(111) NOT NULL,
  `match_time` varchar(111) NOT NULL,
  `analysis` text NOT NULL,
  `del` varchar(111) NOT NULL,
  `sp3` varchar(111) NOT NULL,
  `sp4` varchar(111) NOT NULL,
  `sp5` varchar(111) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `predict`
--

INSERT INTO `predict` (`id`, `home_team`, `home_logo`, `home_score`, `away_team`, `away_logo`, `away_score`, `date_cal`, `match_date`, `match_time`, `analysis`, `del`, `sp3`, `sp4`, `sp5`) VALUES
(5, '0', '0', '0', 'YSFON Mock Champions League Fever Envelopes Owerri ', '20191023235537post.jpg', '0', '0', '23-10-2019', '0', '<p><span style="font-size:14px"><span style="font-family:Comic Sans MS,cursive"><strong>..As Heartland, 9 Others Justle for Trophy_</strong><br />\r\nThere seems to be a different atmosphere around the capital city of Imo, Owerri as the 2019 YSFON organized Owerri Mock Champions League kicks off this week Thursday.<br />\r\nAccording to reports gathered by Ysfonnews, the event which holds at City School Owerri on Wetheral road will be graced by His Excellency the Governor of Imo State, Rt Hon Emeka Ihedioha as well as the State House of Assembly Member for Owerri Municipal Council, Hon Anukam Solomon and the Interim Management Committee Chairman of the Municipal, Hon Ebere Chukwuemeka (ABJ) among other dignitaries.<br />\r\nYsfonnews also learnt that the first prize for winners of this years competition may be sponsored by Hon Solomon Anukam while the 2nd prize may be powers by Hon Ebere (ABJ) just as the organizers are also seeking for more partners and sponsors for other prizes.<br />\r\nAbout 10 clubs including Heartland Comets, Campos FC, Ekwueme FC, Oyoyo FC, Taye Academy and others will be justling for who wins this years edition.<br />\r\nThe over 7 years tournament according the the state YSFON chairman, Mr Ndubuisi OparaEkeocha who is also the South East vice president has discovered numerous talents who have gone ahead to play for Heartland FC like Nnamdi Egbujor now with Rangers Int&#39;l and others.<br />\r\nThe opening match on Thursday will see Heartland Comets trade tackles with Campos FC at the City School pitch by 4pm.</span></span></p>\r\n', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `predict`
--
ALTER TABLE `predict`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `predict`
--
ALTER TABLE `predict`
MODIFY `id` int(111) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
