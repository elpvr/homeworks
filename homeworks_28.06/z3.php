<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body style="background-color: #AAA">
<?php
  $text='Поражението на византийците и покоряването от страна на прабългарите на завареното население завършва със сключването на мирен договор през лятото на 681г., чрез който Аспарухова България е призната от Византия.';
  $words=explode(' ',$text);
  foreach ($words as $key => $word) {
    switch ($key % 3) {
      case 0: $c="white"; break;
      case 1: $c="green"; break;
      case 2: $c="red";
    }
    echo "<span style='color: $c'>$word</span> ";
  }
?>
  </body>
</html>
