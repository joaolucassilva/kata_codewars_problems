<?php

namespace App\Tests\Php\Fundamentals;

use PHPUnit\Framework\TestCase;
use App\Php\Fundamentals\CountByX;

class CountByXTest extends TestCase
{
    private $countByX;

    public function setUp(): void
    {
        $this->countByX = new CountByX();
        parent::setUp();
    }

    public function testReturnResultIsMultiplyValues()
    {
        $this->assertSame([1, 2, 3, 4, 5], $this->countByX->countBy(1, 5), "Array does not match");
        $this->assertSame([2, 4, 6, 8, 10], $this->countByX->countBy(2, 5), "Array does not match");
    }
}
