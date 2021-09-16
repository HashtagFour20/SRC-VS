<?php

/**
 * Database `voting_system` created by Keenan Barends (2190029595)
 */

/* `voting_system`.`admin` */
$admin = array(
  array('admin_id' => '1','username' => 'admin1','password' => 'password1234'),
  array('admin_id' => '2','username' => 'admin2','password' => 'password1234'),
  array('admin_id' => '3','username' => 'admin3','password' => 'Password_123')
);

/* `voting_system`.`ballot` */
$ballot = array(
  array('ballot_id' => '1','date' => '2021-08-29','student_number' => '219071438')
);

/* `voting_system`.`candidates` */
$candidates = array(
  array('candidate_id' => '1','candidate_name' => 'Dalia','candidate_surname' => 'Benton','political_party' => 'EFFSC','faculty' => 'Education','position_fk' => '3'),
  array('candidate_id' => '2','candidate_name' => 'Barney','candidate_surname' => 'Herbert','political_party' => 'PASMA','faculty' => 'Applied Sciences','position_fk' => '6'),
  array('candidate_id' => '3','candidate_name' => 'Wendy','candidate_surname' => 'Gadeni','political_party' => 'PASMA','faculty' => 'Business and Managments Sciences','position_fk' => '5'),
  array('candidate_id' => '4','candidate_name' => 'Xolani','candidate_surname' => 'Makosa','political_party' => 'PASMA','faculty' => 'Education','position_fk' => '1'),
  array('candidate_id' => '5','candidate_name' => 'Samantha','candidate_surname' => 'Isaac','political_party' => 'SASCO','faculty' => 'Engineering & Built Environment','position_fk' => '8'),
  array('candidate_id' => '6','candidate_name' => 'Pumi','candidate_surname' => 'Msutu','political_party' => 'SASCO','faculty' => 'Education','position_fk' => '6'),
  array('candidate_id' => '7','candidate_name' => 'Rick','candidate_surname' => 'Van De Vent','political_party' => 'EFFSC','faculty' => 'Business & Management Sciences','position_fk' => '1'),
  array('candidate_id' => '8','candidate_name' => 'Siyathanda','candidate_surname' => 'Moyo','political_party' => 'SASCO','faculty' => 'Education','position_fk' => '7'),
  array('candidate_id' => '9','candidate_name' => 'Sinazo','candidate_surname' => 'Madikazi','political_party' => 'PASMA','faculty' => 'Health & Wellness Sciences','position_fk' => '2'),
  array('candidate_id' => '10','candidate_name' => 'Zimkitha','candidate_surname' => 'Guza','political_party' => 'PASMA','faculty' => 'Engineering & Built Environment','position_fk' => '3'),
  array('candidate_id' => '11','candidate_name' => 'Lukhanyo','candidate_surname' => 'Saba','political_party' => 'Independent','faculty' => 'Applied Sciences','position_fk' => '9'),
  array('candidate_id' => '12','candidate_name' => 'Karabo','candidate_surname' => 'Kunene','political_party' => 'EFFSC','faculty' => 'Education','position_fk' => '6'),
  array('candidate_id' => '13','candidate_name' => 'Noyolo','candidate_surname' => 'Hashe','political_party' => 'SASCO','faculty' => 'Applied Sciences','position_fk' => '5'),
  array('candidate_id' => '14','candidate_name' => 'Siphokazi','candidate_surname' => 'Banti','political_party' => 'PASMA','faculty' => 'Education','position_fk' => '5'),
  array('candidate_id' => '15','candidate_name' => 'Lungile','candidate_surname' => 'Fati','political_party' => 'Independent','faculty' => 'Business & Management Sciences','position_fk' => '4'),
  array('candidate_id' => '16','candidate_name' => 'Nasiphi','candidate_surname' => 'Tshefu','political_party' => 'EFFSC','faculty' => 'Business & Management Sciences','position_fk' => '2')
);

/* `voting_system`.`current_members` */
$current_members = array(
  array('crnt_member_id' => '1','crnt_member_name' => 'Wendy','crnt_member_surname' => 'Kondlo','position_fk' => '1'),
  array('crnt_member_id' => '2','crnt_member_name' => 'Luthando','crnt_member_surname' => 'Nako','position_fk' => '2'),
  array('crnt_member_id' => '3','crnt_member_name' => 'Zimasa','crnt_member_surname' => 'Pama','position_fk' => '3'),
  array('crnt_member_id' => '4','crnt_member_name' => 'Vacant','crnt_member_surname' => '','position_fk' => '4'),
  array('crnt_member_id' => '5','crnt_member_name' => 'Itumeleng','crnt_member_surname' => 'Bokale','position_fk' => '5'),
  array('crnt_member_id' => '6','crnt_member_name' => 'Thokozile','crnt_member_surname' => 'Snono','position_fk' => '6'),
  array('crnt_member_id' => '7','crnt_member_name' => 'Lindokuhle','crnt_member_surname' => 'Ntshanyana','position_fk' => '7'),
  array('crnt_member_id' => '8','crnt_member_name' => 'Lukhanyo','crnt_member_surname' => 'Mancede','position_fk' => '8'),
  array('crnt_member_id' => '9','crnt_member_name' => 'Lonwabo Sibusisiwe','crnt_member_surname' => 'Magazi','position_fk' => '9')
);

/* `voting_system`.`position` */
$position = array(
  array('postition_id' => '1','position_title' => 'Chairperson'),
  array('postition_id' => '7','position_title' => 'Communications Officer'),
  array('postition_id' => '2','position_title' => 'Deputy-Chairperson'),
  array('postition_id' => '5','position_title' => 'LHC & Wellfare Officer'),
  array('postition_id' => '9','position_title' => 'Local International Relations Officer'),
  array('postition_id' => '8','position_title' => 'Projects & Development Officer'),
  array('postition_id' => '3','position_title' => 'Secretary'),
  array('postition_id' => '6','position_title' => 'Sports, Arts & Culture Officer'),
  array('postition_id' => '4','position_title' => 'Treasurer')
);

/* `voting_system`.`student` */
$student = array(
  array('student_id' => '1','student_number' => '219002959','student_name' => 'Keenan','student_surname' => 'Barends','student_email' => '219002959@mycput.ac.za','faculty' => 'ICT: Applications Development','password' => 'Bar@32088'),
  array('student_id' => '2','student_number' => '219071438','student_name' => 'Michael','student_surname' => 'Benjamin','student_email' => '219071438@mycput.ac.za','faculty' => 'ICT: Applications Development','password' => 'Ben#20212')
);

/* `voting_system`.`vote` */
$vote = array(
);