<?php

/**
 * Database `voting_system` created by Keenan Barends (2190029595)
 */

/* `voting_system`.`admin` */
$admin = array(
  array('username' => 'admin1','password' => 'password1234'),
  array('username' => 'admin2','password' => 'password1234')
);

/* `voting_system`.`candidates` */
$candidates = array(
  array('candidate_id' => '1','candidate_name' => 'Dalia','candidate_surname' => 'Benton','political_party' => 'EFFSC','faculty' => 'Education'),
  array('candidate_id' => '2','candidate_name' => 'Barney','candidate_surname' => 'Herbert','political_party' => 'PASMA','faculty' => 'Applied Sciences'),
  array('candidate_id' => '3','candidate_name' => 'Wendy','candidate_surname' => 'Gadeni','political_party' => 'PASMA','faculty' => 'Business and Managments Sciences'),
  array('candidate_id' => '4','candidate_name' => 'Xolani','candidate_surname' => 'Makosa','political_party' => 'PASMA','faculty' => 'Education'),
  array('candidate_id' => '5','candidate_name' => 'Samantha','candidate_surname' => 'Isaac','political_party' => 'SASCO','faculty' => 'Engineering & Built Environment'),
  array('candidate_id' => '6','candidate_name' => 'Pumi','candidate_surname' => 'Msutu','political_party' => 'SASCO','faculty' => 'Education'),
  array('candidate_id' => '7','candidate_name' => 'Rick','candidate_surname' => 'Van De Vent','political_party' => 'EFFSC','faculty' => 'Business & Management Sciences'),
  array('candidate_id' => '8','candidate_name' => 'Siyathanda','candidate_surname' => 'Moyo','political_party' => 'SASCO','faculty' => 'Education'),
  array('candidate_id' => '9','candidate_name' => 'Sinazo','candidate_surname' => 'Madikazi','political_party' => 'PASMA','faculty' => 'Health & Wellness Sciences'),
  array('candidate_id' => '10','candidate_name' => 'Zimkitha','candidate_surname' => 'Guza','political_party' => 'PASMA','faculty' => 'Engineering & Built Environment'),
  array('candidate_id' => '11','candidate_name' => 'Lukhanyo','candidate_surname' => 'Saba','political_party' => 'Independent','faculty' => 'Applied Sciences'),
  array('candidate_id' => '12','candidate_name' => 'Karabo','candidate_surname' => 'Kunene','political_party' => 'EFFSC','faculty' => 'Education'),
  array('candidate_id' => '13','candidate_name' => 'Noyolo','candidate_surname' => 'Hashe','political_party' => 'SASCO','faculty' => 'Applied Sciences'),
  array('candidate_id' => '14','candidate_name' => 'Siphokazi','candidate_surname' => 'Banti','political_party' => 'PASMA','faculty' => 'Education'),
  array('candidate_id' => '15','candidate_name' => 'Lungile','candidate_surname' => 'Fati','political_party' => 'Independent','faculty' => 'Business & Management Sciences'),
  array('candidate_id' => '16','candidate_name' => 'Nasiphi','candidate_surname' => 'Tshefu','political_party' => 'EFFSC','faculty' => 'Business & Management Sciences')
);

/* `voting_system`.`current_members` */
$current_members = array(
  array('position_id' => '1','member_name' => 'Wendy','member_surname' => 'Kondlo','position_title' => 'Chairperson'),
  array('position_id' => '2','member_name' => 'Luthando','member_surname' => 'Naka','position_title' => 'Deputy Chairperson'),
  array('position_id' => '3','member_name' => 'Zimasa','member_surname' => 'Pama','position_title' => 'Secretary'),
  array('position_id' => '4','member_name' => 'Vacant','member_surname' => '','position_title' => 'Treasurer'),
  array('position_id' => '5','member_name' => 'Itumeleng','member_surname' => 'Bokale','position_title' => 'LHC & Wellfare Officer'),
  array('position_id' => '6','member_name' => 'Thokozile','member_surname' => 'Snono','position_title' => 'Sports, Arts & Culture Officer'),
  array('position_id' => '7','member_name' => 'Lindokuhle','member_surname' => 'Ntshanyana','position_title' => 'Communications Officer'),
  array('position_id' => '8','member_name' => 'Lukhanyo','member_surname' => 'Mancede','position_title' => 'Projects & Development Officer'),
  array('position_id' => '9','member_name' => 'Lonwabo Sibusisiwe','member_surname' => 'Magazi','position_title' => 'Local International Relations Officer')
);

/* `voting_system`.`position` */
$position = array(
  array('postition_id' => '1','position_title' => 'Chairperson'),
  array('postition_id' => '2','position_title' => 'Deputy-Chairperson'),
  array('postition_id' => '3','position_title' => 'Secretary'),
  array('postition_id' => '4','position_title' => 'Treasurer'),
  array('postition_id' => '5','position_title' => 'LHC & Wellfare Officer'),
  array('postition_id' => '6','position_title' => 'Sports, Arts & Culture Officer'),
  array('postition_id' => '7','position_title' => 'Communications Officer'),
  array('postition_id' => '8','position_title' => 'Projects & Development Officer'),
  array('postition_id' => '9','position_title' => 'Local International Relations Officer')
);

/* `voting_system`.`student` */
$student = array(
  array('student_id' => '219002959','student_name' => 'Keenan','student_surname' => 'Barends','student_email' => '219002959@mycput.ac.za','faculty' => 'ICT: Applications Development','password' => 'Bar@32088'),
  array('student_id' => '219071438','student_name' => 'Michael','student_surname' => 'Benjamin','student_email' => '219071438@mycput.ac.za','faculty' => 'ICT: Applications Development','password' => 'Ben#20212')
);

/* `voting_system`.`vote` */
$vote = array(
);
