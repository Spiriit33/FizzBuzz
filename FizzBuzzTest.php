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
}