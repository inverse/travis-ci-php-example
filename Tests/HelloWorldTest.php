<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{

	private $helloWorld;

	public function setUp()
	{
       	$this->helloWorld = new HelloWorld();
	}

    public function testHelloWorld()
    {
        $this->assertEquals('Hello Malachi!', $this->helloWorld->hello());
		$this->assertEquals('Hello Bob!', $this->helloWorld->hello('Bob'));
    }
}