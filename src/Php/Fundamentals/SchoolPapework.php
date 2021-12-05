<?php

namespace App\Php\Fundamentals;

/**
 * Your classmates asked you to copy some paperwork for them.
 * You know that there are 'n' classmates and paperwork has 'm' pages.
 * Your task is to calculate how many blank pages do you need.
 * If 'n < 0' or 'm < 0' return '0'.
 * 
 * Examples:
 * n=5; m=5; => 25
 * n=-5; m=5; => 0
 */

class SchoolPaperwork
{
    function paperwork(int $n, int $m): int
    {
        return ($n <= 0 || $m <= 0) ? 0 : $n * $m;
    }
}
