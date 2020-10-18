<?php
    $n;
    echo "Nhập N (Số phần tử trong mảng):\t";
    fscanf(STDIN,"%d\n",$n);
    $arr = array();
    for( $i = 0; $i < $n; $i++){
        echo "Nhập phần tử thứ ".($i+1).":\t";
        fscanf(STDIN,"%f\n",$arr[$i]);
    }
    for( $i = 0; $i < $n; $i++){
      for( $j = $i+1; $j < $n; $j++){
        if($arr[$i] > $arr[$j]){
          $a = $arr[$i];
          $arr[$i] = $arr[$j];
          $arr[$j] = $a;
        }
      }
    }
    print_r($arr);