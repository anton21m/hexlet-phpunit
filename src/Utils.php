<?php

namespace Hexlet\Phpunit\Utils;

function reverseString($string) {
    return implode(array_reverse(str_split($string)));
}

function repeat($string, $n) {
    return implode(array_fill(0, $n, $string));
}