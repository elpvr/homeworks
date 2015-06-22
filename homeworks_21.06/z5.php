<!DOCTYPE HTML>
<html>
  <head>
    <style>
      td {
        text-align: center;
        padding: 0 10px;
      }
      th {
        background-color: #AAA;
      }
    </style>
  </head>
  <body>
    <table border="1">
      <tr><th>x</th><th>y</th><th>inside</th></tr>
<?php
  $coordinates[]=array(0,1);
  $coordinates[]=array(-2,0);
  $coordinates[]=array(-1,2);
  $coordinates[]=array(1.5,-1);
  $coordinates[]=array(-1.5,-1.5);
  $coordinates[]=array(100,-30);
  $coordinates[]=array(0,0);
  $coordinates[]=array(0.2,-0.8);
  $coordinates[]=array(0.9,-1.93);
  $coordinates[]=array(1,1.655);
  foreach ($coordinates as $value) {
    echo "      <tr><td>$value[0]</td><td>$value[1]</td><td>";
    if (sqrt($value[0]*$value[0]+$value[1]*$value[1])>2) {
      echo "false";
    }
    else {
      echo "true";
    }
    echo "</td></tr>\n";
  }
?>
    </table>
  </body>
</html>
