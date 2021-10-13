-- Created By Keenan Barends (219002959)

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
CREATE TABLE IF NOT EXISTS `admin` (
    `admin_id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(10) NOT NULL,
    `password` varchar(100) NOT NULL,
    PRIMARY KEY (`admin_id`),
    UNIQUE KEY `admin_id` (`admin_id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table `admin`

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
                                                             (1, 'admin1', 'password1234'),
                                                             (2, 'admin2', 'password1234'),

-- Table structure for table `ballot`

DROP TABLE IF EXISTS `ballot`;
CREATE TABLE IF NOT EXISTS `ballot` (
    `ballot_id` int(11) NOT NULL AUTO_INCREMENT,
    `date` date NOT NULL,
    `student_number` int(11) NOT NULL,
    `voting_period_fk` int(11) NOT NULL,
    PRIMARY KEY (`ballot_id`),
    KEY `student_number` (`student_number`,`voting_period_fk`),
    KEY `voting_period_fk` (`voting_period_fk`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table `ballot`

INSERT INTO `ballot` (`ballot_id`, `date`, `student_number`, `voting_period_fk`) VALUES
    (1, '2021-10-13', 2, 1);

-- Table structure for table `candidates`

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
    `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
    `candidate_name` varchar(100) NOT NULL,
    `candidate_surname` varchar(100) NOT NULL,
    `party_fk` int(11) NOT NULL,
    `faculty_fk` int(11) NOT NULL,
    `position_fk` int(11) NOT NULL,
    PRIMARY KEY (`candidate_id`),
    KEY `party_fk` (`party_fk`,`faculty_fk`,`position_fk`),
    KEY `faculty_fk` (`faculty_fk`),
    KEY `position_fk` (`position_fk`)
    ) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Dumping data for table `candidates`

INSERT INTO `candidates` (`candidate_id`, `candidate_name`, `candidate_surname`, `party_fk`, `faculty_fk`, `position_fk`) VALUES
                                                                                                                              (1, 'Dalia', 'Benton', 1, 3, 3),
                                                                                                                              (2, 'Barney', 'Herbert', 2, 1, 6),
                                                                                                                              (3, 'Wendy', 'Gadeni', 2, 2, 5),
                                                                                                                              (4, 'Xolani', 'Makosa', 2, 3, 1),
                                                                                                                              (5, 'Samantha', 'Isaac', 3, 4, 8),
                                                                                                                              (6, 'Pumi', 'Msutu', 3, 3, 6),
                                                                                                                              (7, 'Rick', 'Van De Vent', 1, 2, 1),
                                                                                                                              (8, 'Siyathanda', 'Moyo', 3, 3, 7),
                                                                                                                              (9, 'Sinazo', 'Madikazi', 2, 5, 2),
                                                                                                                              (10, 'Zimkitha', 'Guza', 2, 4, 3),
                                                                                                                              (11, 'Lukhanyo', 'Saba', 4, 1, 9),
                                                                                                                              (12, 'Karabo', 'Kunene', 1, 3, 6),
                                                                                                                              (13, 'Noyolo', 'Hashe', 3, 1, 5),
                                                                                                                              (14, 'Siphokazi', 'Banti', 2, 3, 5),
                                                                                                                              (15, 'Lungile', 'Fati', 4, 2, 4),
                                                                                                                              (16, 'Nasiphi', 'Tshefu', 1, 2, 2);



-- Table structure for table `current_members`

DROP TABLE IF EXISTS `current_members`;
CREATE TABLE IF NOT EXISTS `current_members` (
    `crnt_member_id` int(11) NOT NULL AUTO_INCREMENT,
    `crnt_member_name` varchar(100) NOT NULL,
    `crnt_member_surname` varchar(100) NOT NULL,
    `position_fk` int(11) NOT NULL,
    PRIMARY KEY (`crnt_member_id`),
    KEY `position_fk` (`position_fk`)
    ) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table `current_members`

INSERT INTO `current_members` (`crnt_member_id`, `crnt_member_name`, `crnt_member_surname`, `position_fk`) VALUES
                                                                                                               (1, 'Wendy', 'Kondlo', 1),
                                                                                                               (2, 'Luthando', 'Nako', 2),
                                                                                                               (3, 'Zimasa', 'Pama', 3),
                                                                                                               (4, 'Vacant', '', 4),
                                                                                                               (5, 'Itumeleng', 'Bokale', 5),
                                                                                                               (6, 'Thokozile', 'Snono', 6),
                                                                                                               (7, 'Lindokuhle', 'Ntshanyana', 7),
                                                                                                               (8, 'Lukhanyo', 'Mancede', 8),
                                                                                                               (9, 'Lonwabo Sibusisiwe', 'Magazi', 9);


-- Table structure for table `faculty`

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
    `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
    `faculty_name` varchar(100) NOT NULL,
    PRIMARY KEY (`faculty_id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table `faculty`

INSERT INTO `faculty` (`faculty_id`, `faculty_name`) VALUES
                                                         (1, 'Applied Sciences'),
                                                         (2, 'Business & Management Sciences'),
                                                         (3, 'Education'),
                                                         (4, 'Engineering'),
                                                         (5, 'Health & Wellness Sciences'),
                                                         (6, 'Informatics & Design');


-- Table structure for table `political_party`

DROP TABLE IF EXISTS `political_party`;
CREATE TABLE IF NOT EXISTS `political_party` (
    `party_id` int(11) NOT NULL AUTO_INCREMENT,
    `party_name` varchar(100) NOT NULL,
    PRIMARY KEY (`party_id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table `political_party`

INSERT INTO `political_party` (`party_id`, `party_name`) VALUES
                                                             (1, 'EFFSC'),
                                                             (2, 'PASMA'),
                                                             (3, 'SASCO'),
                                                             (4, 'Independent');

-- Table structure for table `position`

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
    `position_id` int(2) NOT NULL AUTO_INCREMENT,
    `position_title` varchar(50) NOT NULL,
    PRIMARY KEY (`position_id`),
    UNIQUE KEY `position_title` (`position_title`)
    ) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table `position`

INSERT INTO `position` (`position_id`, `position_title`) VALUES
                                                             (1, 'Chairperson'),
                                                             (7, 'Communications Officer'),
                                                             (2, 'Deputy-Chairperson'),
                                                             (5, 'LHC & Wellfare Officer'),
                                                             (9, 'Local International Relations Officer'),
                                                             (8, 'Projects & Development Officer'),
                                                             (3, 'Secretary'),
                                                             (6, 'Sports, Arts & Culture Officer'),
                                                             (4, 'Treasurer');

-- Table structure for table `student`

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
    `student_id` int(11) NOT NULL AUTO_INCREMENT,
    `student_number` int(9) NOT NULL,
    `student_name` varchar(100) NOT NULL,
    `student_surname` varchar(100) NOT NULL,
    `student_email` varchar(100) NOT NULL,
    `password` char(100) NOT NULL,
    `faculty_fk` int(11) NOT NULL,
    PRIMARY KEY (`student_id`),
    UNIQUE KEY `student_id` (`student_number`) USING BTREE,
    KEY `faculty_fk` (`faculty_fk`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table `student`

INSERT INTO `student` (`student_id`, `student_number`, `student_name`, `student_surname`, `student_email`, `password`, `faculty_fk`) VALUES
(1, 219002959, 'Keenan', 'Barends', '219002959@mycput.ac.za', 'Bar@32088', 1),

-- Table structure for table `registration`

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
    `registration_id` int(11) NOT NULL AUTO_INCREMENT,
    `student_number` int(9) NOT NULL,
    `student_name` varchar(100) NOT NULL,
    `student_surname` varchar(100) NOT NULL,
    `student_email` varchar(255) NOT NULL,
    `password` char(100) NOT NULL,
    `faculty_fk` int(11) NOT NULL,
    `registration_date` date NOT NULL,
    PRIMARY KEY (`registration_id`),
    KEY `faculty_fk` (`faculty_fk`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table `registration`

INSERT INTO `registration` (`registration_id`, `student_number`, `student_name`, `student_surname`, `student_email`, `password`, `faculty_fk`, `registration_date`) VALUES
    (1, 219022100, 'George', 'Little', '219022100@mycput.ac.za', 'Password1234', 4, '2021-10-13');

-- Table structure for table `vote`

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
    `vote_id` int(6) NOT NULL AUTO_INCREMENT,
    `ballot_fk` int(11) NOT NULL,
    `candidate_fk` int(11) NOT NULL,
    PRIMARY KEY (`vote_id`),
    UNIQUE KEY `vote_id` (`vote_id`),
    KEY `ballot_fk` (`ballot_fk`),
    KEY `candidate_fk` (`candidate_fk`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table `vote`

INSERT INTO `vote` (`vote_id`, `ballot_fk`, `candidate_fk`) VALUES
    (1, 1, 1);

-- Table structure for table `voting_period`

DROP TABLE IF EXISTS `voting_period`;
CREATE TABLE IF NOT EXISTS `voting_period` (
    `voting_period_id` int(11) NOT NULL AUTO_INCREMENT,
    `start_date` date NOT NULL,
    `end_date` date NOT NULL,
    PRIMARY KEY (`voting_period_id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table `voting_period`

INSERT INTO `voting_period` (`voting_period_id`, `start_date`, `end_date`) VALUES
    (1, '2021-10-01', '2021-10-31');

ALTER TABLE `ballot`
    ADD CONSTRAINT `ballot_ibfk_1` FOREIGN KEY (`student_number`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `ballot_ibfk_2` FOREIGN KEY (`voting_period_fk`) REFERENCES `voting_period` (`voting_period_id`);

-- Constraints for table `candidates`
ALTER TABLE `candidates`
    ADD CONSTRAINT `candidates_ibfk_1` FOREIGN KEY (`faculty_fk`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `candidates_ibfk_2` FOREIGN KEY (`party_fk`) REFERENCES `political_party` (`party_id`),
  ADD CONSTRAINT `candidates_ibfk_3` FOREIGN KEY (`position_fk`) REFERENCES `position` (`position_id`);


-- Constraints for table `current_members`
ALTER TABLE `current_members`
    ADD CONSTRAINT `current_members_ibfk_1` FOREIGN KEY (`position_fk`) REFERENCES `position` (`position_id`);


-- Constraints for table `registration`
ALTER TABLE `registration`
    ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`faculty_fk`) REFERENCES `faculty` (`faculty_id`);

-- Constraints for table `student`
ALTER TABLE `student`
    ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`faculty_fk`) REFERENCES `faculty` (`faculty_id`);

-- Constraints for table `vote`
ALTER TABLE `vote`
    ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`ballot_fk`) REFERENCES `ballot` (`ballot_id`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`candidate_fk`) REFERENCES `candidates` (`candidate_id`);
COMMIT;