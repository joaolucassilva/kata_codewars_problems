<?php

namespace App\Php\Fundamentals;

/**
 *  Create a function with two arguments that will return an array of the first (n) multiples of (x).
 *  Assume both the given number and the number of times to count will be positive numbers greater than 0.
 *  Example:
 *  countBy(1,10) // should return [1,2,3,4,5,6,7,8,9,10]
 *  countBy(2,5) // should return [2,4,6,8,10]
 */

class CountByX
{
    function countBy($x, $n)
    {
        $z = [];
        for ($y = 1; $y <= $n; $y++) {
            array_push($z, $x * $y);
        }
        return $z;
    }
}
