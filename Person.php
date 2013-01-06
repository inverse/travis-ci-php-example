<?php 


class Person
{
	
	private $name;
	private $age;

	public  function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function introduce()
	{
		return "Hello my name is {$this->name} and I am {$this->age}";
	}	
}