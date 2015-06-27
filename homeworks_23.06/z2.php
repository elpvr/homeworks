<?php
include('header.html');
if (!empty($_POST)) {
  $mess='';
  if (!isset($_POST['interests'])){ $mess="Изберете поне един интерес!<br/>"; }
  if (!trim($_POST['username'])){ $mess.="Попълнете потребителско име!<br/>"; }
  if (trim(strlen($_POST['pass1']))<4){ $mess.="Паролата трябва да е поне 4 символа!<br/>"; }
  elseif ($_POST['pass1'] != $_POST['pass2']) {
    $mess.="Паролата не съвпада!<br/>";
  }
  if ($mess) { echo "<p style='color:red'>$mess</p>"; }
  else {
    echo "<h4>Здравейте $_POST[username],</h4>";
    echo "Избраните ор Вас интереси са:<br/>";
    foreach ($_POST['interests'] as $value) {
      echo "- $value<br/>";
    }
    echo "<br/>Посоченият e-mail: <b>$_POST[email]</b> e ";
    if (filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
      echo "<label style='color: green'>ВАЛИДЕН</label>.<br/><br/>";
    }
    else {
      echo "<label style='color: red'>НЕВАЛИДЕН</label>.<br/><br/>";
    }
  }
}
?>
    <form method="post" action="z2.php">
      Интереси:<br/>
      <label><input type="checkbox" name="interests[]" value="HTML"> HTML</label><br/>
      <label><input type="checkbox" name="interests[]" value="CSS"> CSS</label><br/>
      <label><input type="checkbox" name="interests[]" value="PHP"> PHP</label><br/><br/>
      Потребителско име:<br/>
      <input type="text" name="username"><br/><br/>
      Парола:<br/>
      <input type="password" name="pass1"><br/>
      Повторете паролата:<br/>
      <input type="password" name="pass2"><br/><br/>
      E-mail:<br/>
      <input type="text" name="email"><br/><br/>
      <input type="submit" value="Готово"/>
    </form>
<?php
include('footer.html');
?>
