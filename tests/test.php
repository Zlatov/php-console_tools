<?php

include_once('../src/color.php');

use Zlatov\ConsoleTools\Color as ConsoleColor;

if (class_exists('Zlatov\ConsoleTools\Color')) {
  print('exist.' . PHP_EOL);
} else {
  print('not exist.' . PHP_EOL);
}

ConsoleColor::p('asd');

