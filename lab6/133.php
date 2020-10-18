<?php
  $s;
  echo "Nhập xâu s\t";
  fscanf(STDIN,"%[^\t]",$s);
  echo strrev($s);