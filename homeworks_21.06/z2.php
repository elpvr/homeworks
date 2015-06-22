<?php
  $a=5;
  $b=9;
  $c=3;
  if ($a<=$b) {
    if ($a<=$c) {
      echo "$a, ";
      if ($b<=$c) { echo "$b, $c"; }
      else { echo "$c, $b"; }
    }
    else { echo "$c, $a, $b"; }
  }
  else {
    if ($b<=$c) {
      echo "$b, ";
      if ($a<=$c) { echo "$a, $c"; }
      else { echo "$c, $a"; }
    }
    else { echo "$c, $b, $a"; }
  }
?>
