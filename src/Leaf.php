<?php
namespace Php\Package;

class Leaf {

    private $val;

    public function __construct($val = null)
    {
        $this->val = $val;
    }

    public function getValue(){
        return $this->val;
    }
    public function setValue($val){
        $this->val = $val;
    }
}