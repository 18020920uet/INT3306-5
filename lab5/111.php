<?php
	print "Nhap vao so duong a:";
    $a;
    fscanf(STDIN,"%d\n",$a);
    if(empty($a))
    {
        printf("Ban chua nhap du lieu !");
        exit;
    }
   
  	if($a <= 0){
  		printf("Ban phai nhap mot so duong");
  		exit;
  	}

  	$m = (int) $a;
  	if($m != $a){ 
  		printf("Ban phai nhap mot so nguyen");
  		exit;
  	}
    if(!($a % 2)) 
    {
        printf("%d la mot so chan",$a);
    }
    else
    {
        printf("%d la mot so le",$a);
    }
?>
