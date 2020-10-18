<?php
  $a;$b;$c;
  print "Nhập hệ số a: ";
  fscanf(STDIN,"%d\n",$a);
  print "Nhập hệ số b: ";
  fscanf(STDIN,"%d\n",$b);
  print "Nhập hệ số c: ";
  fscanf(STDIN,"%d\n",$c);
  if(empty($a)||empty($b)||empty($c))
  {
        printf("Ban chua nhap du lieu !");
        exit;
  }
  if( $a == 0 ){
    print "x = ".-$c/$b;
  }else if( $c==0 ){
    print "x1 = 0\n";
    print "x2 = ".-$b/$a;
  }else{
    $delta = $b*$b - 4*$a*$c;
    if($delta<0) print "vô nghiệm";
    else if($delta == 0) print "x1 = x2 = ".-$b/(2*$a);
    else{
      print "x1 = ".(-$b+sqrt($delta))/(2*$a)."\n";
      print "x2 = ".(-$b-sqrt($delta))/(2*$a);

    }
  }
?>
