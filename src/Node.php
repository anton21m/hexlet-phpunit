<?php
namespace Php\Package;

class Node {

    private $children = [];

    public function addChild($child)
    {
        $this->children[] = $child;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function removeChildren(){
        return $this->children = [];
    }
}