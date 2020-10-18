<?php
    $n;$tong=0;$so_so_duong=0;$tong_so_duong=0;
    echo "Nhập N (Số phần tử trong mảng):\t";
    fscanf(STDIN,"%d\n",$n);
    $arr = array();
    for( $i = 0; $i < $n; $i++){
        echo "Nhập phần tử thứ ".($i+1).":\t";
        fscanf(STDIN,"%d\n",$arr[$i]);
        $tong += $arr[$i];
        if($arr[$i]>=0){
            $so_so_duong++;
            $tong_so_duong+=$arr[$i];
        }
    }
    echo $n>0?"\nTổng các số vừa nhập là :\t".$tong:"Mảng rỗng";
    echo $so_so_duong<$n?"\nTổng ".($n-$so_so_duong)." só âm vừa nhập là:\t".($tong-$tong_so_duong):"\nKhông có sô âm trong mảng";
    echo $so_so_duong>0?"\nTổng ".$so_so_duong." số dương vừa nhập là:\t".$tong_so_duong:"\nKhông có số dương trong mảng";
?>