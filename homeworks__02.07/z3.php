<?php
//Да се отпечата таблица с $m реда и $n колони като използвате цикъл for. Като във 
//всяко поле пишем стойностите (ред, колона), а $m и $n се въвеждат от потребителя чрез форма.
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
      table {
        border-collapse: collapse;
      } 
      td{
        border: 1px solid #000;
        padding: 0 10px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <table>
<?php
  if(!empty($_POST)) {
    for ($i=1; $i<=$_POST['m']; $i++) {
      echo "      <tr>";
      for ($j=1; $j<=$_POST['n']; $j++) {
        echo "<td>$i , $j</td>";
      }
      echo "</tr>\n";
    }
  }
?>
    </table><br/>
    <form method="post" action="z3.php">
      Брой редове: <input type="text" name="m"/><br/><br/>
      Брой колони: <input type="text" name="n"/><br/><br/>
      <input type="submit"/>
    </form>
  </body>
</html>
