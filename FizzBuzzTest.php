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
}