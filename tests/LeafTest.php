<?php

namespace Php\Package\Tests;

use Php\Package\Leaf;
use PHPUnit\Framework\TestCase;

class LeafTest extends TestCase {
    public function testGetValue ()
    {
        $value = 100;
        $leaf = new Leaf($value);
        $this->assertEquals($value, $leaf->getValue());
    }
}