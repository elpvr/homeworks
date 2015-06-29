<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body style="background-color: #AAA">
<?php
  $text='Поражението на византийците и покоряването от страна на прабългарите на завареното население завършва със сключването на мирен договор през лятото на 681г., чрез който Аспарухова България е призната от Византия.';
  $words=explode(' ',$text);
  $twocolor=$threecolor='';
  foreach ($words as $key => $word) {
    if ($key % 2) { $c="red"; }
    else { $c="green"; }
    $twocolor .= "<span style='color: $c'>$word</span> ";
    switch ($key % 3) { 
      case 0: $c="white"; break;
      case 1: $c="green"; break;
      case 2: $c="red";
    }
    $threecolor .= "<span style='color: $c'>$word</span> ";
  }
  echo "$twocolor<hr>$threecolor";
?>
  </body>
</html>
