<?php
  $s; $tim; $thay_the;
  echo "Nhập xâu s:\t";
  fscanf(STDIN,"%[^\t]",$s);
  echo "Nhập từ cần tìm:\t";
  fscanf(STDIN,"%[^\t]",$tim);
  $tim = trim($tim);
  echo "Nhập từ thay thế:\t";
  fscanf(STDIN,"%[^\t]",$thay_the);
  $thay_the = trim($thay_the);  
  $s = str_replace( $tim, $thay_the, $s );
  echo "Xâu mới là:\t".$s;