<?php
//Втори метод - сбора на две числа е отрицателен когато и двете числа са отрицателни
//или когато едното число е отрицателно и неговата абсолютна стойност е по-голяма
//от другото (положително) число
  $a=-7;
  $b=4;
  if ($a<0 && $b<0 || $a<0 && abs($a)>$b || $b<0 && abs($b)>$a) {
    echo "negative";
  }
  else {
    echo "positive";
  }
?>
