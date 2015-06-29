<?php
  $arr=array('a'=>259,'b'=>56,'c'=>785,'d'=>60,'e'=>-47,'f'=>53);
  $max=$maxkey=$submax=$submaxkey='';
  foreach ($arr as $k => $el) {
    if ($max=='' || $el>=$max) {
      $submax=$max;
      $submaxkey=$maxkey;
      $max=$el;
      $maxkey=$k;
    }
    elseif ($submax=='' || $el>=$submax) {
      $submax=$el;
      $submaxkey=$k;
    }
  }
  echo "$maxkey => $max, $submaxkey => $submax";
?>
