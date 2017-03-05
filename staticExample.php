<?php

class Person{
	public static $age = 1;

	public function haveBirthday(){
		static::$age += 1;
	}
}

$sabbir = new Person;

$sabbir->haveBirthday();

$sabbir->haveBirthday();

var_dump(Person::$age); //3

$murad = new Person;

$murad->haveBirthday();

var_dump(Person::$age); //4