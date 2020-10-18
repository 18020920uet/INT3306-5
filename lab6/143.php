<?php
    $max = -INF;
    $min = INF;
    $maxId; $minId;
    $n;
    echo "Nhập N (Số phần tử trong mảng):\t";
    fscanf(STDIN,"%d\n",$n);
    $arr = array();
    for( $i = 0; $i < $n; $i++){
        echo "Nhập phần tử thứ ".($i+1).":\t";
        fscanf(STDIN,"%f\n",$arr[$i]);
        if($arr[$i]>$max){
          $max = $arr[$i];
          $maxId = $i;
        };
        if($arr[$i]<$min){
          $min = $arr[$i];
          $minId = $i;
        };
    }
    echo "max =\t".$max." index =\t".$maxId;
    echo "\nmin =\t".$min." index =\t".$minId;
