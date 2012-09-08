<?php

function bubble_sort(&$data, $ascending)
{
  $dataCount = count($data);
  for($i = 0; $i < ($dataCount - 1); $i++){
    for($j = $i + 1; $j < $dataCount; $j++){
      if($data[$i] > $data[$j]){
        $tmp = $data[$i];
        $data[$i] = $data[$j];
        $data[$j] = $tmp;
      }
    }
  }
}