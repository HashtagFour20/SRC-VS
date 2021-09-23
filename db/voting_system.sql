-- Created By Keenan Barends (219002959)

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--
CREATE
DATABASE IF NOT EXISTS `voting_system` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE
`voting_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin`
(
    `admin_id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `username` varchar
(
    10
) NOT NULL,
    `password` varchar
(
    100
) NOT NULL,
    PRIMARY KEY
(
    `admin_id`
),
    UNIQUE KEY `admin_id`
(
    `admin_id`
)
    ) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`)
VALUES (1, 'admin1', 'password1234'),
       (2, 'admin2', 'password1234'),
       (3, 'admin3', 'Password_123');

-- --------------------------------------------------------

--
-- Table structure for table `ballot`
--


DROP TABLE IF EXISTS `ballot`;
CREATE TABLE IF NOT EXISTS `ballot`
(
    `ballot_id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `date` date NOT NULL,
    `student_number` int
(
    11
) NOT NULL,
    PRIMARY KEY
(
    `ballot_id`
),
    KEY `student_number`
(
    `student_number`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ballot`
--

INSERT INTO `ballot` (`ballot_id`, `date`, `student_number`)
VALUES (1, '2021-08-29', 219071438);

-- --------------------------------------------------------


--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates`
(
    `candidate_id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `candidate_name` varchar
(
    100
) NOT NULL,
    `candidate_surname` varchar
(
    100
) NOT NULL,
    `party_fk` int
(
    11
) NOT NULL,
    `faculty_fk` int
(
    11
) NOT NULL,
    PRIMARY KEY
(
    `candidate_id`
),
    KEY `party_fk`
(
    `party_fk`,
    `faculty_fk`
),
    KEY `faculty_fk`
(
    `faculty_fk`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `candidate_name`, `candidate_surname`, `party_fk`, `faculty_fk`)
VALUES (1, 'Dalia', 'Benton', 1, 3),
       (2, 'Barney', 'Herbert', 2, 1),
       (3, 'Wendy', 'Gadeni', 2, 2),
       (4, 'Xolani', 'Makosa', 2, 3),
       (5, 'Samantha', 'Isaac', 3, 4),
       (6, 'Pumi', 'Msutu', 3, 3),
       (7, 'Rick', 'Van De Vent', 1, 2),
       (8, 'Siyathanda', 'Moyo', 3, 3),
       (9, 'Sinazo', 'Madikazi', 2, 5),
       (10, 'Zimkitha', 'Guza', 2, 4),
       (11, 'Lukhanyo', 'Saba', 4, 1),
       (12, 'Karabo', 'Kunene', 1, 3),
       (13, 'Noyolo', 'Hashe', 3, 1),
       (14, 'Siphokazi', 'Banti', 2, 3),
       (15, 'Lungile', 'Fati', 4, 2),
       (16, 'Nasiphi', 'Tshefu', 1, 2);


-- --------------------------------------------------------

--
-- Table structure for table `current_members`
--


DROP TABLE IF EXISTS `current_members`;
CREATE TABLE IF NOT EXISTS `current_members`
(
    `crnt_member_id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `crnt_member_name` varchar
(
    100
) NOT NULL,
    `crnt_member_surname` varchar
(
    100
) NOT NULL,
    `position_fk` int
(
    11
) NOT NULL,
    PRIMARY KEY
(
    `crnt_member_id`
),
    KEY `position_fk`
(
    `position_fk`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `current_members`
--

INSERT INTO `current_members` (`crnt_member_id`, `crnt_member_name`, `crnt_member_surname`, `position_fk`)
VALUES (1, 'Wendy', 'Kondlo', 1),
       (2, 'Luthando', 'Nako', 2),
       (3, 'Zimasa', 'Pama', 3),
       (4, 'Vacant', '', 4),
       (5, 'Itumeleng', 'Bokale', 5),
       (6, 'Thokozile', 'Snono', 6),
       (7, 'Lindokuhle', 'Ntshanyana', 7),
       (8, 'Lukhanyo', 'Mancede', 8),
       (9, 'Lonwabo Sibusisiwe', 'Magazi', 9);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
    `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
    `faculty_name` varchar(100) NOT NULL,
    PRIMARY KEY (`faculty_id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`) VALUES
                                                         (1, 'Applied Sciences'),
                                                         (2, 'Business & Management Sciences'),
                                                         (3, 'Education'),
                                                         (4, 'Engineering'),
                                                         (5, 'Health & Wellness Sciences'),
                                                         (6, 'Informatics & Design');

-- --------------------------------------------------------

--
-- Table structure for table `political_party`
--

DROP TABLE IF EXISTS `political_party`;
CREATE TABLE IF NOT EXISTS `political_party` (
    `party_id` int(11) NOT NULL AUTO_INCREMENT,
    `party_name` varchar(100) NOT NULL,
    PRIMARY KEY (`party_id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `political_party`
--

INSERT INTO `political_party` (`party_id`, `party_name`) VALUES
                                                             (1, 'EFFSC'),
                                                             (2, 'PASMA'),
                                                             (3, 'SASCO'),
                                                             (4, 'Independent');

-- --------------------------------------------------------
--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position`
(
    `postition_id` int
(
    2
) NOT NULL AUTO_INCREMENT,
    `position_title` varchar
(
    50
) NOT NULL,
    PRIMARY KEY
(
    `postition_id`
),
    UNIQUE KEY `position_title`
(
    `position_title`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`postition_id`, `position_title`)
VALUES (1, 'Chairperson'),
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
    `student_id` int(11) NOT NULL AUTO_INCREMENT,
    `student_number` int(9) NOT NULL,
    `student_name` varchar(100) NOT NULL,
    `student_surname` varchar(100) NOT NULL,
    `student_email` varchar(100) NOT NULL,
    `faculty` varchar(150) NOT NULL,
    `password` char(100) NOT NULL,
    PRIMARY KEY (`student_id`),
    UNIQUE KEY `student_id` (`student_number`) USING BTREE
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_number`, `student_name`, `student_surname`, `student_email`, `faculty`,
                       `password`)
VALUES (1, 219002959, 'Keenan', 'Barends', '219002959@mycput.ac.za', 'ICT: Applications Development', 'Bar@32088'),
       (2, 219071438, 'Michael', 'Benjamin', '219071438@mycput.ac.za', 'ICT: Applications Development', 'Ben#20212');
-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote`
(
    `vote_id` int
(
    6
) NOT NULL,
    `ballot_fk` int
(
    11
) NOT NULL,
    PRIMARY KEY
(
    `vote_id`
),
    UNIQUE KEY `vote_id`
(
    `vote_id`
),
    KEY `ballot_fk`
(
    `ballot_fk`
)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
    ADD CONSTRAINT `candidates_ibfk_1` FOREIGN KEY (`position_fk`) REFERENCES `position` (`postition_id`);
    ADD CONSTRAINT `candidates_ibfk_2` FOREIGN KEY (`faculty_fk`) REFERENCES `faculty` (`faculty_id`),
    ADD CONSTRAINT `candidates_ibfk_3` FOREIGN KEY (`party_fk`) REFERENCES `political_party` (`party_id`);


--
-- Constraints for table `current_members`
--
ALTER TABLE `current_members`
    ADD CONSTRAINT `current_members_ibfk_1` FOREIGN KEY (`position_fk`) REFERENCES `position` (`postition_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
