-- Created By Keenan Barends (219002959)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--
CREATE DATABASE IF NOT EXISTS `voting_system` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `voting_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', 'password1234'),
('admin2', 'password1234');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `candidate_id` int(4) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(100) NOT NULL,
  `candidate_surname` varchar(100) NOT NULL,
  `political_party` varchar(20) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  UNIQUE KEY `candidate_id` (`candidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `candidate_name`, `candidate_surname`, `political_party`, `faculty`) VALUES
(1, 'Dalia', 'Benton', 'EFFSC', 'Education'),
(2, 'Barney', 'Herbert', 'PASMA', 'Applied Sciences'),
(3, 'Wendy', 'Gadeni', 'PASMA', 'Business and Managments Sciences'),
(4, 'Xolani', 'Makosa', 'PASMA', 'Education'),
(5, 'Samantha', 'Isaac', 'SASCO', 'Engineering & Built Environment'),
(6, 'Pumi', 'Msutu', 'SASCO', 'Education'),
(7, 'Rick', 'Van De Vent', 'EFFSC', 'Business & Management Sciences'),
(8, 'Siyathanda', 'Moyo', 'SASCO', 'Education'),
(9, 'Sinazo', 'Madikazi', 'PASMA', 'Health & Wellness Sciences'),
(10, 'Zimkitha', 'Guza', 'PASMA', 'Engineering & Built Environment'),
(11, 'Lukhanyo', 'Saba', 'Independent', 'Applied Sciences'),
(12, 'Karabo', 'Kunene', 'EFFSC', 'Education'),
(13, 'Noyolo', 'Hashe', 'SASCO', 'Applied Sciences'),
(14, 'Siphokazi', 'Banti', 'PASMA', 'Education'),
(15, 'Lungile', 'Fati', 'Independent', 'Business & Management Sciences'),
(16, 'Nasiphi', 'Tshefu', 'EFFSC', 'Business & Management Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `current_members`
--

DROP TABLE IF EXISTS `current_members`;
CREATE TABLE IF NOT EXISTS `current_members` (
  `position_id` int(2) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_surname` varchar(100) NOT NULL,
  `position_title` varchar(100) NOT NULL,
  PRIMARY KEY (`position_id`),
  UNIQUE KEY `position_id` (`position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `current_members`
--

INSERT INTO `current_members` (`position_id`, `member_name`, `member_surname`, `position_title`) VALUES
(1, 'Wendy', 'Kondlo', 'Chairperson'),
(2, 'Luthando', 'Naka', 'Deputy Chairperson'),
(3, 'Zimasa', 'Pama', 'Secretary'),
(4, 'Vacant', '', 'Treasurer'),
(5, 'Itumeleng', 'Bokale', 'LHC & Wellfare Officer'),
(6, 'Thokozile', 'Snono', 'Sports, Arts & Culture Officer'),
(7, 'Lindokuhle', 'Ntshanyana', 'Communications Officer'),
(8, 'Lukhanyo', 'Mancede', 'Projects & Development Officer'),
(9, 'Lonwabo Sibusisiwe', 'Magazi', 'Local International Relations Officer');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `postition_id` int(2) NOT NULL AUTO_INCREMENT,
  `position_title` varchar(50) NOT NULL,
  PRIMARY KEY (`postition_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`postition_id`, `position_title`) VALUES
(1, 'Chairperson'),
(2, 'Deputy-Chairperson'),
(3, 'Secretary'),
(4, 'Treasurer'),
(5, 'LHC & Wellfare Officer'),
(6, 'Sports, Arts & Culture Officer'),
(7, 'Communications Officer'),
(8, 'Projects & Development Officer'),
(9, 'Local International Relations Officer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(9) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_surname` varchar(100) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `faculty` varchar(150) NOT NULL,
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_surname`, `student_email`, `faculty`, `password`) VALUES
(219002959, 'Keenan', 'Barends', '219002959@mycput.ac.za', 'ICT: Applications Development', 'Bar@32088'),
(219071438, 'Michael', 'Benjamin', '219071438@mycput.ac.za', 'ICT: Applications Development', 'Ben#20212');
-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `vote_id` int(6) NOT NULL,
  `vote_category` varchar(20) NOT NULL,
  `vote_date` date NOT NULL,
  `candidate_fk` int(4) NOT NULL,
  `position_fk` int(2) NOT NULL,
  `student_fk` int(9) NOT NULL,
  UNIQUE KEY `vote_id` (`vote_id`),
  KEY `candidate_fk` (`candidate_fk`),
  KEY `student_fk` (`student_fk`),
  KEY `position_fk` (`position_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`position_fk`) REFERENCES `position` (`postition_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
