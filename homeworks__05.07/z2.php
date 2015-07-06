<?php
//Да се напише програма, която генерира масив от 10 произволни числа. Да се намери 
//сумата на числата. (Ползвайте rand())
  $arr=array();
  $sum=0;
  for ($i=0; $i<10; $i++) {
    $arr[$i]=rand(10,99);
    echo $arr[$i]." ";
    $sum+=$arr[$i];
  }
  echo "<br/>sum = $sum<br/>";
//б) Да се намери сумата на нечетните и сумата на четните числа. Да се отпечатва 
//коя от 2-те суми е по-голяма?
  $odd_sum=$even_sum=0;
  for ($i=0; $i<10; $i++) {
    if ($arr[$i]%2) { $odd_sum+=$arr[$i]; }
    else { $even_sum+=$arr[$i]; }
  }
  echo "odd sum = $odd_sum<br/>";
  echo "even sum = $even_sum<br/>";
  if ($odd_sum>$even_sum) {
    echo "the sum of the <b>odd</b> greater";
  }
  elseif ($even_sum>$odd_sum) {
    echo "the sum of the <b>even</b> greater";
  }
  else {
    echo "the amounts are equal";
  }
?>
