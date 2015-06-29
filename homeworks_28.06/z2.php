<?php
 $x=1;
 $y=100;
 if ($y<$x) {
   $z=$x;
   $x=$y;
   $y=$z;
 }
 while ($x <= $y) {
   if ($x %3 == 0 || $x % 7 == 0) { echo "$x "; }
   $x++;
 }
?>
