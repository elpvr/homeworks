<?php
//Имаме двумерен асоциативен масив, който съхранява информация за 5 популярни уеб сайта: 
//име, кратко описание, създател, брой потребители, използвана технология . Да се направи 
//списък с линкове (List group -> Linked items), който съдържа имената на уеб сайтовете.  
//При натискане на всеки от елементите в списъка да ни се отваря нова страница с цялата 
//информация за сайта.
//б)* За всеки сайт да се добави информация в масива и за логото (линк към файла). При 
//показване на цялата информация да се показва и логото.
$sites=array();
$sites['www.dir.bg']=array();
$sites['www.tribali.info']=array();
$sites['www.dnes.bg']=array();
$sites['www.mobile.bg']=array();
$sites['www.abv.bg']=array();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body>
    <br/>
    <div class="container">
      <div class="list-group col-xs-3">
<?php
  foreach($sites as $key=>$value) {
    echo "        <a href='z5a.php?site=$key' class='list-group-item' target='_blank'>$key</a>\n";
  }
?>
      </div>
    </div>
  </body>
</html>
