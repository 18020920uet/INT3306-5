<?php
  $number;
  fscanf(STDIN,"%s\n",$number);
  if(empty($number))
  {
      printf("Ban chua nhap du lieu !");
      exit; 
  }
  $max = 0;
  for( $i=0; $i<strlen($number); $i++){
    if($number[$i]>$max)
      $max = $number[$i];
  }
  print $max;
?>FF
