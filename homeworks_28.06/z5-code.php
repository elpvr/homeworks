<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
<?php
  if (!empty($_POST)) {
    $text=$_POST['text'];
    echo "$text<br/>се кодира като<br/>";
    $i=0;
    while ($i < strlen($text)) {
      if ($text[$i]=='a') { $text[$i]='@'; }
      if ($text[$i]=='e') { $text[$i]='3'; }
      $i++;
    }
    echo "$text<br/><br/>";
  }
?>
    <form method="post" action="z5-code.php">
      Въведете текст:<br/>
      <input type="text" name="text"/>
      <input type="submit" value="Кодирай"/>
    </form>
  </body>
</html>
