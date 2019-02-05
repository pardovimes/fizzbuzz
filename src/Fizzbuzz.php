<?php

class Fizzbuzz
{
    public function convert(int $number)
    {
        if ($number < 0){
            throw new InvalidArgumentException('Only positive integers');
        }
        if ($number % 3 == 0){
            return "Fizz";
        }
        return $number;
    }
}
