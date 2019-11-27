<?php
namespace Zlatov\ConsoleTools;

class Color
{
    public function p($value='')
    {
        echo '$value: ' . print_r($value, true) . PHP_EOL;
    }
}
