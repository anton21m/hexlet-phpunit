<?php

namespace Php\Package\Tests;

use Php\Package\Leaf;
use Php\Package\Node;
use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase {
    public function testGetChildren ()
    {
        $tree = new Node();
        $leaf = new Leaf();
        $node = new Node();

        $children = $tree->getChildren();
        $this->assertCount(0, $children);

        $tree->addChild($leaf);
        $children = $tree->getChildren();
        
        $leaf2 = new Leaf();
        $this->assertContains($leaf, $children);

        //my test
        $leaf3 = $leaf2;
        $leaf3->setValue(2);
        $this->assertTrue($leaf2 === $leaf3);

        $this->assertFalse((new Leaf() === (new Leaf()))); //False

        $tree->addChild($node);
        $children = $tree->getChildren();
        $this->assertCount(2, $children);
        $this->assertContains($leaf, $children);
        $this->assertContains($node, $children);        
    }

    public function testRemoveChildren() {
        $tree = new Node();
        $leaf = new Leaf();

        $tree->addChild($leaf);
        $tree->removeChildren();

        $children = $tree->getChildren();
        $this->assertEmpty($children);
    }
}