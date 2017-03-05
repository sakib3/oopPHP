<?php


class Person
{
  protected $name;
  function __construct($name)
  {
    $this->$name = $name;
  }
}

class Business
{
  protected $staff;

  function __construct(Staff $staff){
    $this->staff = $staff;
  }

  public function hire(Person $person){
    $this->staff->add($person);
  }

  public function getStaffMembers(){
    return $this->staff->members();
  }
}

class Staff{
  protected $members = [];

  function __construct($members = []){
      $this->members = $members;
  }

  public function add(Person $person){
    $this->members[] = $person;
  }

  public function members(){
    return $this->members;
  }
}


$sabbir = new Person("Sabbir Rahman Sakib");

$staff = new staff([$sabbir]);

$teleopti = new Business($staff);

$teleopti->hire(new Person("Sohali Safdar"));


var_dump($teleopti->getStaffMembers());
