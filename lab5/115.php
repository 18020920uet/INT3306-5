<?php 
  $month;
  $year;
  fscanf(STDIN,"%d\n",$month);
  fscanf(STDIN,"%d\n",$year);
  if(empty($month) || empty($year))
  {
      printf("Ban chua nhap du lieu !");
      exit; 
  }
  $leap_year = [31,29,31,30,31,30,31,31,30,31,30,31];
  $non_leap_year = [31,28,31,30,31,30,31,31,30,31,30,31];
  if($year%400==0 || $year % 4 == 0 && $year % 100 != 0){
    print $leap_year[$month-1];
  }else{
    print $non_leap_year[$month-1];
  }
?>
