<?php

function factorial($n)
{
  return ($n == 1) ? 1 : $n * factorial($n - 1);
}

echo factorial(10)."\n";

require_once('b.php');

$data = array(4, 6, 1, 3, 8, 10, 100, 445, 6, 34, 4, 9);
var_dump($data)."\n\n";
bubble_sort($data, true);
var_dump($data)."\n\n";