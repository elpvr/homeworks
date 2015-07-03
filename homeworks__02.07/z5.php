<?php
//Да се напише програма, която намира N-тото число на Фибоначи
  $n=16;
  $fibonacci=array(0,1);
  for ($i=2; $i<=$n; $i++) {
    $fibonacci[$i]=$fibonacci[$i-2]+$fibonacci[$i-1];
  }
  echo "$n's Fibonacci number is $fibonacci[$n]<hr>";
//б) Да се напише програма, която намира всички числа на Фибоначи от 1 до N
  echo "<ol>";
  for ($i=1; $i<=$n; $i++){
    echo "<li>$fibonacci[$i]</li>";
  }
  echo"</ol>";
?>
