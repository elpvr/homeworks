<?php
session_start();
include('header.html');
if (!empty($_POST)) {
  $_SESSION['select']=$_POST['sel'];
  header('Location: z3b.php');
}
?>
    <h1 style="color: blue">е-Мания</h1>
    <h3 style="margin: -30px 0 0 60px;"><i>онлайн магазин</i></h3><br/>
    Здравейте <b><?php echo $_SESSION['user']; ?></b><br/><br/>
    Изберете един или няколко продукта:<br/>
    <form method="post" action="z3a.php">
      <table border="1" rules="rows" frame="hsides">
        <tr style="background-color: #AAA;">
          <th width="70">Код</th><th width="200">Наименование</th><th width="90">Цена</th><th width="80">Избирам</th>
        </tr>
<?php
foreach ($_SESSION['products'] as $key => $product) {
  echo "        <tr><td align='center'>$product[0]</td><td>$product[1]</td><td align='right'>$product[2] лв.</td>";
  echo "<td align='center'><input type='checkbox' name='sel[$key]'></td></tr>\n";
}
?>
      </table>
      <br/>
      <input type="submit" value="Купувам" style="margin-left: 370px;"/>
    </form>
<?php
include('footer.html');
?>
