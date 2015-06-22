<?php
//Втори метод
  $a=-7;
  $b=4;
  if ($a<0 && $b<0) {
    echo "negative";
  }
  elseif ($a>=0 && $b>=0) {
    echo "positive";
  }
  elseif ($a<0 && abs($a)>$b || $b<0 && abs($b)>$a) {
    echo "negative";
  }
  else {
    echo "positive";
  }
?>
