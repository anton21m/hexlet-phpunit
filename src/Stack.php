<?php

namespace Stack;

use Exception;

function make() {
    return [];
}

function push(&$array, $neVal) {
    return $array[] = $neVal;
}

function pop(&$array) {
    if (count($array))
        return array_pop($array);
    else 
        throw new Exception("range output");
}

function isEmpty($array) {
    return empty($array);
}



