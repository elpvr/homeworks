<?php
session_start();
include('header.html');
?>
    <h1 style="color: blue">е-Мания</h1>
    <h3 style="margin: -30px 0 0 60px;"><i>онлайн магазин</i></h3><br/>
    Здравейте <b><?php echo $_SESSION['user']; ?></b><br/><br/>
    Вaшата потребителска кошница съдържа:<br/>
    <table border="1" rules="rows" frame="hsides">
      <tr style="background-color: #AAA;">
        <th width="70">Код</th><th width="200">Наименование</th><th width="90">Цена</th>
      </tr>
<?php
$total=0;
foreach ($_SESSION['select'] as $key => $product) {
  $total += $_SESSION['products'][$key][2];
  echo "      <tr><td align='center'>".$_SESSION['products'][$key][0]."</td><td>";
  echo $_SESSION['products'][$key][1]."</td><td align='right'>".$_SESSION['products'][$key][2]." лв.</td></tr>\n";
}
echo "      <tr style='border-bottom: 1px solid #FFF'><td colspan='2' align='right'><b>Всичко</b><br/><br/>";
echo "Наличност по Вашата карта<br/>Остатък след покупката</td>";
echo "<td align='right'><b>".number_format($total,2)." лв.</b><br/><br/>".number_format($_SESSION['stock'],2);
echo " лв.<br/>".number_format($_SESSION['stock']-$total,2)." лв.</td></tr>\n";
?>
    </table>
    <br/>
    <a href="z3d.php?confirm=no"><button>Отхвърли</button></a>
    <a href="z3d.php?confirm=yes"><button style="margin-left: 180px">Потвърди</button></a>
<?php
include('footer.html');
?>
