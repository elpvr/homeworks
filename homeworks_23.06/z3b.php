<?php
session_start();
include('header.html');
if (!empty($_POST) && trim($_POST['cardnum']) && trim($_POST['stock'])) {
  $_SESSION['cardnum']=trim($_POST['cardnum']);
  $_SESSION['stock']=floatval(trim($_POST['stock']));
  header('Location: z3c.php');
}
?>
    <h1 style="color: blue">е-Мания</h1>
    <h3 style="margin: -30px 0 0 60px;"><i>онлайн магазин</i></h3><br/>
    Здравейте <b><?php echo $_SESSION['user']; ?></b><br/><br/>
    Въведете номер на дебитна/кредитна карта:<br/>
    <form method="post" action="z3b.php">
      <input type="text" name="cardnum" value="<?php echo $_SESSION['cardnum']; ?>"/><br/><br/>
      Наличност по Вашата карта:<br/>
      <input type="text" name="stock" value="<?php echo $_SESSION['stock']; ?>"/><br/><br/>
      <input type="submit" value="Продължи"/>
    </form>
<?php
include('footer.html');
?>
