<?php
  $s;$w;
  echo "Nhập xâu s\t";
  fscanf(STDIN,"%[^\t]",$s);
  $s = trim($s);
  // var_dump($s);
  // var_dump(strrev($s));
  echo $s === strrev($s) ? "Xâu đối xứng" : "Xâu không đối xứng";