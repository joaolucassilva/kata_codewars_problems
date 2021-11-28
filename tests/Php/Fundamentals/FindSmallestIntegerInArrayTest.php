<?php

namespace App\Tests\Php\Fundamentals;

use App\Php\Fundamentals\FindSmallestIntegerInArray;
use PHPUnit\Framework\TestCase;

class FindSmallestIntegerInArrayTest extends TestCase
{
    private $findSmallestIntegerArray;

    public function setUp(): void
    {
        $this->findSmallestIntegerArray = new FindSmallestIntegerInArray();
        parent::setUp();
    }

    public function testReturnResultIsMultiplyValues()
    {
        $result = $this->findSmallestIntegerArray->smallestInteger([3, 5, 10, 1, 4, 55]);
        $this->assertEquals($result, 1);

        $result = $this->findSmallestIntegerArray->smallestInteger([0]);
        $this->assertEquals($result, 0);
    }
}
