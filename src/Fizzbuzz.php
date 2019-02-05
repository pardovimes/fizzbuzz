<?php

class Fizzbuzz
{
    public function convert(int $number)
    {
        if ($number < 0){
            throw new InvalidArgumentException('Only positive integers');
        }
        $return_var = '';
        if ($number % 3 == 0){
            $return_var .= "Fizz";
        }
        if ($number % 5 == 0){
            $return_var .= "Buzz";
        }
        if ($return_var != ''){
            return $return_var;
        }
        return $number;
    }
}
