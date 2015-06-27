<?php
session_start();
include('header.html');
?>
    <h1 style="color: blue">е-Мания</h1>
    <h3 style="margin: -30px 0 0 60px;"><i>онлайн магазин</i></h3><br/>
    Здравейте <b><?php echo $_SESSION['user']; ?></b><br/><br/>
<?php
if (isset($_GET['confirm']) && $_GET['confirm']=='yes') {
  echo "Вашата поръчка е потвърдена успешно!<br/>Благодарим Ви за покупката.";
}
else {
  echo "Вие отказахте Вашата поръчка!";
}
echo "<br/><br/>За да продължите пазаруеането натиснете <a href='z3a.php'>тук</a>.";
include('footer.html');
?>
