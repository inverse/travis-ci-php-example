<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld();

        $this->assertEquals('Hello Malachi!', $helloWorld->hello());
		$this->assertEquals('Hello Bob!', $helloWorld->hello('Bob'));
    }
}