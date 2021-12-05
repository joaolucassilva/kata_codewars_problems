<?php

namespace App\Tests\Php\Fundamentals;

use PHPUnit\Framework\TestCase;
use App\Php\Fundamentals\PersistentBugger;

class PersistentBuggerTest extends TestCase
{
    private $persistentBugger;

    public function setUp(): void
    {
        $this->persistentBugger = new PersistentBugger();
        parent::setUp();
    }

    public function testReturnResultIsMultiplyValues()
    {
        $this->assertEquals(3, $this->persistentBugger->persistence(39));
        $this->assertEquals(4, $this->persistentBugger->persistence(999));
        $this->assertEquals(0, $this->persistentBugger->persistence(4));
    }
}
