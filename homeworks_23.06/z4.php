<?php
session_start();
$_SESSION['count']=$_SESSION['result']=$_SESSION['level']=0;
if (!empty($_POST)) {
  $_SESSION['level']=$_POST['level'];
  header('Location: z4a.php');
}
include('header.html');
?>
    <h1><i>Аритметика</i></h1><br/>
    <form method="post" action="z4.php">
      Изберете ниво<br/>
      <label><input type="radio" name="level" value="0" checked>Начинаещ</label><br/>
      <label><input type="radio" name="level" value="1">Напреднал</label><br/><br/>
      <input type="submit" value="Да започваме"/>
    </form>
<?php
include('footer.html');
?>
