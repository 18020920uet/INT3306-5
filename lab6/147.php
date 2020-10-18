<?php
    $max = -INF;
    $min = INF;
    $n;
    echo "Nhập N (Số phần tử trong mảng):\t";
    fscanf(STDIN,"%d\n",$n);
    $arr = array();
    for( $i = 0; $i < $n; $i++){
        echo "Nhập phần tử thứ ".($i+1).":\t";
        fscanf(STDIN,"%d\n",$arr[$i]);
        if($arr[$i]>$max){
          $max = $arr[$i];
        };
        if($arr[$i]<$min){
          $min = $arr[$i];
        };
    }
    echo "max =\t".$max;
    echo "\nmin =\t".$min;
