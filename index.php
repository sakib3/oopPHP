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
}

class Staff{
  protected $members = [];

  public function add(Person $person){
    $this->members[] = $person;
  }
}


$sabbir = new Person("Sabbir Rahman Sakib");

$staff = new staff;

$teleopti = new Business($staff);

$teleopti->hire($sabbir);


var_dump($staff);
