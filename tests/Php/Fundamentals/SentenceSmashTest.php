<?php

namespace App\Tests\Php\Fundamentals;

use PHPUnit\Framework\TestCase;
use App\Php\Fundamentals\SentenceSmash;

class SentenceSmashTest extends TestCase
{
    private $sentenceSmash;

    public function setUp(): void
    {
        $this->sentenceSmash = new SentenceSmash();
        parent::setUp();
    }

    public function testReturnResultIsMultiplyValues()
    {
        $this->assertEquals('hello', $this->sentenceSmash->smash(['hello']));
        $this->assertEquals('hello world', $this->sentenceSmash->smash(['hello', 'world']));
        $this->assertEquals('hello world this is great', $this->sentenceSmash->smash(['hello', 'world', 'this', 'is', 'great']));
    }
}
