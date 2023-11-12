<?php

namespace Bramasta\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    private Person $person;

    protected function setUp(): void
    {
        
    }


    /**
     * @before
     */
    public function createPerson() 
    {
        $this->person = new Person("Bramasta");
    }


    public function testSuccess()
    {
        self::assertEquals("Hello Domes, my name is Bramasta", $this->person->sayHello("Domes"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good bye Domes" . PHP_EOL);
        $this->person->sayGoodBye("Domes");
    }


}