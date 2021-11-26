<?php

/**
 *  Given a non-empty array of integers, return the result of multiplying the values together in order.
 *  Example:
 *  [1,2,3,4] => 1 * 2 * 3 * 4 = 24;
 */

class Solution
{
    function grow($numbers)
    {
        return array_reduce($numbers, function ($carry, $item) {
            return $carry *= $item;
        }, 1);
    }
}

// class GrowTest extends TestCase
// {
//     public function testExamples()
//     {
//         $this->assertEquals(6, grow([1, 2, 3]));
//         $this->assertEquals(16, grow([4, 1, 1, 1, 4]));
//         $this->assertEquals(64, grow([2, 2, 2, 2, 2, 2]));
//     }
// }
