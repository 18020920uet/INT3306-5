<?php
    $n;
    echo "Nhập N (Số phần tử trong mảng):\t";
    fscanf(STDIN,"%d\n",$n);
    $arr = array();
    $am=$duong=$n;
    for( $i = 0; $i < $n; $i++){
        echo "Nhập phần tử thứ ".($i+1).":\t";
        fscanf(STDIN,"%f\n",$arr[$i]);
        if($arr[$i]>=0 && $i<$duong) $duong = $i;
        else if($arr[$i]<0 && $i<$am) $am = $i;
    }
    echo "Số dương đầu tiên ".$arr[$duong]." có chỉ số là ".$duong;
    echo "\nSố âm đầu tiên ".$arr[$am]." có chỉ số là ".$am;
