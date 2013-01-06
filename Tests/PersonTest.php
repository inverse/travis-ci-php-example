<?php

class PersonTest extends PHPUnit_Framework_TestCase
{

	private $person;



	public function setUp()
	{
       	$this->person = new Person('Malachi', 25);
	}


    public function testIntroduce()
    {
        $this->assertEquals('Hello my name is Malachi and I am 25', $this->person->introduce());
    }
}