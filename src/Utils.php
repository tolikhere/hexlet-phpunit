<?php

namespace Hexlet\Phpunit\Utils;

// Reversing an incoming string
function reverseString(string $string): string
{
    return implode(array_reverse(str_split($string)));
}
