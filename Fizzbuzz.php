<?php

use JetBrains\PhpStorm\Pure;

final class FizzBuzz
{
    /**
     * @var int
     */
    protected int $number;

    /**
     * FizzBuzz constructor.
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * Check if the current number is negative.
     * @return bool
     */
    public function isNegative(): bool
    {
        return $this->number < 0;
    }

    /**
     * Check if the current number is equal to 0.
     * @return bool
     */
    #[Pure] public function isEqualToZero(): bool
    {
        return is_null($this->number);
    }

    /**
     * Check if the current number is a multiple of three.
     * @return bool
     */
    public function isMultipleOfThree(): bool
    {
        return $this->number % 3 === 0;
    }

    /**
     * Check if the current number is a multiple of three.
     * @return bool
     */
    public function isMultipleOfFive(): bool
    {
        return $this->number % 5 === 0;
    }

    /**
     * Check if the number is negative or equal to zero.
     * @return bool
     */
    #[Pure] public function isInvalid(): bool
    {
        return $this->isEqualToZero() || $this->isNegative();
    }

    /**
     * Check if the current number is multiple of three and five.
     */
    #[Pure] public function isFizzBuzz(): bool
    {
        return $this->isMultipleOfThree() && $this->isMultipleOfFive();
    }

    /**
     * Play to Fizz buzz.
     * @return int|string
     * @throws InvalidNumberException
     */
    public function play(): int|string
    {
        switch ($this->number) {
            case $this->isInvalid():
                throw new InvalidNumberException('Number is invalid.');
                break;
            case $this->isFizzBuzz():
                return 'FizzBuzz';
                break;
            case $this->isMultipleOfThree():
                return 'Fizz';
                break;
            case $this->isMultipleOfFive():
                return 'Buzz';
                break;
            default:
                return $this->number;
        }
    }
}
