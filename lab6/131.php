<?php
  echo "Nhập xâu s\t";
  $s;
  fscanf(STDIN,"%[^\t]",$s);
  // echo $s;
  $s = trim($s);
  // echo $s;
  $arr = explode(' ', $s);
  $arr2 = [];
  foreach ($arr as &$value) {
    if($value!=""){
      // echo $value."\n";
      $value = strtolower($value);
      $value = ucfirst($value);
      array_push($arr2, $value);
    }
  }
  // var_dump($arr2);
  $result = implode(' ', $arr2);
  echo $result;