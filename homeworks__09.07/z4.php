<?php
//Да се направи шахматна дъска – редуващи се 2 цвята с размери 8х8.
//б) Да се добави номерация и буква за всяко поле, като в шахмата – по колоните 
//букви от A до H и по редове числата от 1 до 8.
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
      .square{
        margin-top: 100%;
        float: left;
      }
      .number{
        padding-left: 5px;
        margin-right: -5px;
        float: left;
      }
      label, .label-default{
        font-size: 14px;
        margin: 0;
        padding: 0;
        font-weight: normal;
      }
    </style>
  </head>
  <body>
    <br/>
    <div class="col-xs-8 col-xs-offset-2">
<?php
  $e=false;
  for ($i=8; $i>0; $i--){
    echo "    <div class='row'>\n      <div class='col-xs-2'></div>\n";
    for ($j=0; $j<8; $j++){
      if ($e) {
        $cd=" label-default";
        $cl=" label label-default";
      }
      else { $cd=$cl=''; }
      $e=!$e;
      echo "      <div class='col-xs-1$cd' style='border: 1px solid #888; margin: 0 -1px -1px 0; padding: 0'>";
      echo "<div class='number'><label class='$cl'>".chr($j+97)."$i</label></div><div class='square'></div></div>\n";
    }
    $e=!$e;
    echo "    </div>\n";
  }
?>
    </div>
  </body>
</html>
