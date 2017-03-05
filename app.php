<?php

$sabbir = new Demo\Person("Sabbir Rahman Sakib");

$staff = new Demo\Staff([$sabbir]);

$teleopti = new Demo\Business($staff);

$teleopti->hire(new Demo\Person("Sohali Safdar"));


var_dump($teleopti->getStaffMembers());