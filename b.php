<?php

function bubble_sort(&$data, $ascending)
{
  $count = count($data);
  for($i = 0; $i < ($count - 1); $i++){
    for($j = $i; $j < $count; $j++){
      if($data[$i] > $data[$j]){
        $tmp = $data[$i];
        $data[$i] = $data[$j];
        $data[$j] = $tmp;
      }
    }
  }
}