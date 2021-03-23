<?php
require 'Fizzbuzz.php';
require "InvalidNumberException.php";

class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    /**
     * Check if an exception is returned when negative number is passed in parameter.
     * @throws InvalidNumberException
     */
    public function testNegativeInt()
    {
        $this->expectException(InvalidNumberException::class);
        $fizz = new FizzBuzz(-2);
        $fizz->play();
    }

    /**
     * Check if an exception is returned when zero is passed in parameter.
     * @throws InvalidNumberException
     */
    public function testWhenEqualToZero()
    {
        $this->expectException(InvalidNumberException::class);
        $fizz = new FizzBuzz(0);
        $fizz->play();
    }

    /**
     * Check if "Fizz" is returned when a multiple of three is passed in parameter.
     */
    public function testFizz()
    {
        $fizz = new FizzBuzz(3);
        $this->assertEquals('Fizz', $fizz->play());
    }

    /**
     * Check if "Buzz" is returned when a multiple of five is passed in parameter.
     */
    public function testBuzz()
    {
        $fizz = new FizzBuzz(5);
        $this->assertEquals('Buzz', $fizz->play());
    }

    /**
     * Check if "FizzBuzz" is returned when a multiple of three or five is passed in parameter.
     */
    public function testFizzBuzz()
    {
        $fizz = new FizzBuzz(15);
        $this->assertEquals('FizzBuzz', $fizz->play());
    }

    /**
     * Check if the base number is returned when it is not a multiple of three or five.
     */
    public function testReturnInt()
    {
        $fizz = new FizzBuzz(2);
        $this->assertEquals($fizz->getNumber(), $fizz->play());
    }
}