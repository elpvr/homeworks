<?php
//Да се генерира двумерен масив с размери МxN, който има следните стойности:
//a) - за M=3, N=4 -------------------------------------------------------------
//  5	6	7	8
//  9	10	11	12
//  13	14	15	16
  echo "<pre>\n";
  $m=3;
  $n=4;
  $arr=array(array());
  $k=5;
  for ($i=0; $i<$m; $i++) {
    for ($j=0; $j<$n; $j++) {
      $arr[$i][$j]=$k;
      $k++;
    }
  }
  for ($i=0; $i<$m; $i++) {
    for ($j=0; $j<$n; $j++) {
      echo str_pad($arr[$i][$j],4,' ',STR_PAD_LEFT);
    }
    echo "<br/>\n";
  }
//б) - за M=4, N=4 -------------------------------------------------------------
//  1	2	3	4
//  -8	-7	-6	-5
//  10	11	12	13
//  -26	-25	-24	-23
  echo "<hr>\n";
  $m=4;
  $n=4;
  $arr=array(array());
  $k=0;
  for ($i=0; $i<$m; $i++) {
    for ($j=0; $j<$n; $j++) {
      $k++;
      $arr[$i][$j]=$k;
    }
    $k=$k*-2-1;
  }
  for ($i=0; $i<$m; $i++) {
    for ($j=0; $j<$n; $j++) {
      echo str_pad($arr[$i][$j],5,' ',STR_PAD_LEFT);
    }
    echo "<br/>\n";
  }
//в) - за M=4, N=4 -------------------------------------------------------------
// 1	0	0	0
// 1	2	0	0
// 1	2	3	0
// 1	2	3	4
  echo "<hr>\n";
  $m=4;
  $n=4;
  $arr=array(array());
  for ($i=0; $i<4; $i++) {
    for ($j=0; $j<4; $j++) {
      if ($j>$i) { $arr[$i][$j]=0; }
      else { $arr[$i][$j]=$j+1; }
    }
  }
  for ($i=0; $i<$m; $i++) {
    for ($j=0; $j<$n; $j++) {
      echo str_pad($arr[$i][$j],3,' ',STR_PAD_LEFT);
    }
    echo "<br/>\n";
  }
//в) - Запълване по спирала, по посока на часовниковата стрелка ----------------
  echo "<hr>\n";
  $m=$max_i=4;
  $n=$max_j=4;
  $arr=array(array());
  $i=$j=0;
  $min_j=0;
  $min_i=1;
  $direction='r'; //r-надясно; l-наляво; d-надолу; u-нагоре;
  $k=0;
  while ($k<$m*$n) {
    $k++;
    $arr[$i][$j]=$k;
    switch ($direction) {
      case 'r':
        if ($j+1<$max_j) { $j++; }
        else {
          $direction='d';
          $max_j--;
          $i++;
        }
        break;
      case 'd':
        if ($i+1<$max_i) { $i++; }
        else {
          $direction='l';
          $max_i--;
          $j--;
        }
        break;
      case 'l':
        if ($j>$min_j) { $j--; }
        else {
          $direction='u';
          $min_j++;
          $i--;
        }
        break;
      case 'u':
        if ($i>$min_i) {  $i--; }
        else {
          $direction='r';
          $min_i++;
          $j++;
        }
        break;
    }
  }
  for ($i=0; $i<$m; $i++) {
    for ($j=0; $j<$n; $j++) {
      echo str_pad($arr[$i][$j],4,' ',STR_PAD_LEFT);
    }
    echo "<br/>\n";
  }
  echo "</pre>";
?>
