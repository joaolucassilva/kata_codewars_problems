<?php

namespace App\Tests\Php\Fundamentals;

use PHPUnit\Framework\TestCase;
use App\Php\Fundamentals\SchoolPaperwork;

class SchoolPaperworkTest extends TestCase
{
    private $schoolPaperwork;

    public function setUp(): void
    {
        $this->schoolPaperwork = new SchoolPaperwork();
        parent::setUp();
    }

    public function testReturnResultIsMultiplyValues()
    {
        $this->assertEquals(25, $this->schoolPaperwork->paperwork(5, 5));
    }
}
