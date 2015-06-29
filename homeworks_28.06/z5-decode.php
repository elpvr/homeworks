<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
<?php
  if (!empty($_POST)) {
    $text=$_POST['text'];
    echo "$text<br/>се декодира като<br/>";
    $i=0;
    while ($i < strlen($text)) {
      if ($text[$i]=='@') { $text[$i]='a'; }
      if ($text[$i]=='3') { $text[$i]='e'; }
      $i++;
    }
    echo "$text<br/><br/>";
  }
?>
    <form method="post" action="z5-decode.php">
      Въведете текст:<br/>
      <input type="text" name="text"/>
      <input type="submit" value="Декодирай"/>
    </form>
  </body>
</html>
