<?php
session_start();
unset($_SESSION['products']);
$_SESSION['products'][]=array('10235','Продукт 1',2.47);
$_SESSION['products'][]=array('35212','Продукт 2',7.29);
$_SESSION['products'][]=array('73218','Продукт 3',42.99);
$_SESSION['products'][]=array('40265','Продукт 4',14.32);
$_SESSION['products'][]=array('37691','Продукт 5',12.53);
$_SESSION['cardnum']=$_SESSION['stock']='';
include('header.html');
if (!empty($_POST)) {
  if (trim($_POST['username']) && trim($_POST['pass'])) {
    $_SESSION['user']=trim($_POST['username']);
    header('Location: z3a.php');
  }
}
?>
    <fieldset style="position: absolute; margin-left: -75px; top: 10%; left: 50%; width: 150px; padding: 20px;">
      <legend><b><i> е-Мания </i></b></legend>
      <form method="post" action="z3.php">
        Потребителско име:<br/>
        <input type="text" name="username"><br/><br/>
        Парола:<br/>
        <input type="password" name="pass"><br/><br/>
        <input type="submit" value="Вход" style="float: right;">
      </form>
    </fieldset>
<?php
include('footer.html');
?>
