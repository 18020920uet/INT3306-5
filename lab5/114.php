<?php
  $number;
  $isPrime=true;  
  fscanf(STDIN,"%d\n",$number);
  if(empty($number))
  {
      printf("Ban chua nhap du lieu !");
      exit; 
  }
  for($i=2;$i<$number/2;$i++){
    if($number%$i==0) $isPrime=false;
  }
  if($isPrime){
    print $number." là số nguyên tố";
  }else{
    print $number." không là số nguyên tố";
  }
?>
