<?php 
  $number;
  fscanf(STDIN,"%d\n",$number);
  if(empty($number))
  {
      printf("Ban chua nhap du lieu !");
      exit; 
  }
  $string = ["Không","Một","Hai","Ba","Bốn","Năm","Sáu","Bảy","Tám","Chín"];
  print $string[$number];
?>
