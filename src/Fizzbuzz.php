<?php

class Fizzbuzz
{
    public function convert(int $number)
    {
        if ($number < 0){
            throw new InvalidArgumentException('Only positive integers');
        }
        return $number;
    }
}
