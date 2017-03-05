<?php

require 'src/Person.php';
require 'src/Staff.php';
require 'src/Business.php';

$sabbir = new Person("Sabbir Rahman Sakib");

$staff = new staff([$sabbir]);

$teleopti = new Business($staff);

$teleopti->hire(new Person("Sohali Safdar"));


var_dump($teleopti->getStaffMembers());
