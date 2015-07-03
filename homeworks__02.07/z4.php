<?php
//Да се отпечататаблицата за умножение от 1 до 10
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
<?php
  echo "    ";
  for ($i=1; $i<=10; $i++) {
    for ($j=1; $j<=$i; $j++) {
      echo "$j*$i=".$i*$j.' &nbsp; ';
    }
    echo "<br/>\n    ";
  }
  echo "<hr>\n";
//б) Да се сложи в таблица с border=1 и празните полета да са с colspan.
  echo "    <table border='1'>\n";
    for ($i=1; $i<=10; $i++) {
      echo "      <tr>";
      for ($j=1; $j<=$i; $j++) {
        echo "<td>$j*$i=".$i*$j."</td>";
      }
      if ($i==9) { echo "<td></td>"; }
      elseif ($i<9) {
        echo "<td colspan='".(10-$i)."'></td>";
      }
      echo "</tr>\n";
    }
  echo "    </table>\n";
?>
  </body>
</html>
