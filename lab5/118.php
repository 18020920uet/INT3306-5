<?php
  $number = 10000;
  $type_1 = $type_2 = $type_3 = 0;
  while($number>0){
    if($number-500>=0){
      $number-=500;
      $type_1++;
    }else if($number-200>=0){
      $number-=200;
      $type_2++;
    }else if($number-100>=0){
      $number-=100;
      $type_3++;
    }
  }
  print "Số tờ 500đ  ".$type_1."\n";
  print "Số tờ 200đ  ".$type_2."\n";
  print "Số tờ 100đ  ".$type_3."\n";
?>
