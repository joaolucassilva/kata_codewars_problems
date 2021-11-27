<?php

namespace App\Tests\Php\Fundamentals;

use PHPUnit\Framework\TestCase;
use App\Php\Fundamentals\ReduceButGrow;

class ReduceButGrowTest extends TestCase
{
    private $reduceButGrow;

    public function setUp(): void
    {
        $this->reduceButGrow = new ReduceButGrow();
        parent::setUp();
    }

    public function testReturnResultIsMultiplyValues()
    {
        $this->assertEquals(6, $this->reduceButGrow->grow([1, 2, 3]));
        $this->assertEquals(16, $this->reduceButGrow->grow([4, 1, 1, 4]));
        $this->assertEquals(64, $this->reduceButGrow->grow([2, 2, 2, 2, 2, 2]));
    }
}
