<?php
  $arr=array('a'=>259,'b'=>56,'c'=>785,'d'=>12,'e'=>-47,'f'=>53);
  $max='';
  foreach ($arr as $el) {
    if ($max=='' || $el>=$max) {
      $submax=$max;
      $max=$el;
    }
  }
  echo "$max, $submax";
?>
