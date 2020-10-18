<?php
  $s;$w;
  echo "Nhập xâu s\t";
  fscanf(STDIN,"%[^\t]",$s);
  echo "Nhập từ w\t";
  fscanf(STDIN,"%s",$w);
  $arr = explode($w,$s);
  // var_dump($arr);
  print "Số lần xuất hiện của từ '".$w."' trong xâu '".$s."' là ".(count($arr)-1);

