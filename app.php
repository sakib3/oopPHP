<?php

use Demo\Person;
use Demo\Staff;
use Demo\Business;

$sabbir = new Person("Sabbir Rahman Sakib");

$staff = new Staff([$sabbir]);

$teleopti = new Business($staff);

$teleopti->hire(new Person("Sohali Safdar"));


var_dump($teleopti->getStaffMembers());