<?php
    $n;$k;$count=0;
    echo "Nhập N (Số phần tử trong mảng):\t";
    fscanf(STDIN,"%d\n",$n);
    $arr = array();
    for( $i = 0; $i < $n; $i++){
        echo "Nhập phần tử thứ ".($i+1).":\t";
        fscanf(STDIN,"%d\n",$arr[$i]);
    }
    echo "Nhập k (Số cần tìm):\t";
    fscanf(STDIN,"%d\n",$k);
    foreach ($arr as $value) {
      if($value==$k)
        $count++;
    }
    echo $count>0?"Số lần xuất hiện của ".$k." là ".$count:$k." không tồn tại trong mảng";
    

