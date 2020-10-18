<?php 
  $mark;
  fscanf(STDIN,"%d\n",$mark);
  if(empty($mark))
  {
      printf("Ban chua nhap du lieu !");
      exit; 
  }
  if($mark<5){
    print "Kém";
  }
  else if($mark<6.5){
    print "Trung bình";
  }
  else if($mark<8){
    print "Khá";
  }
  else{
    print "Giỏi";
  }
?>
