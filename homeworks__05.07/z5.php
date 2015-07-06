<?php
//Да се направи уеб сайт с информация за филми и актьори. Да има асоциативен масив 
//с поне 5 филм и за всеки филм да се съхранява: заглавие, година, бюджет, жанр, главен актьор. 
//Да има и асоциативен масив с поне 5 актьора и за всеки актьор да се съхранява: име, 
//националност, възраст, брой оскари. Да се отпечата информацията за всички филми и актьори.
  $films=array(array());
  $films[0]=array('title'=>'Филм 1','year'=>2012,'budget'=>357,'genre'=>'комедия','lead'=>'Актьор 1');
  $films[1]=array('title'=>'Филм 2','year'=>1987,'budget'=>421,'genre'=>'екшън','lead'=>'Актьор 2');
  $films[2]=array('title'=>'Филм 3','year'=>2002,'budget'=>314,'genre'=>'фентъзи','lead'=>'Актьор 1');
  $films[3]=array('title'=>'Филм 4','year'=>2005,'budget'=>704,'genre'=>'комедия','lead'=>'Актьор 1');
  $films[4]=array('title'=>'Филм 5','year'=>1989,'budget'=>417,'genre'=>'екшън','lead'=>'Актьор 2');
  $films[5]=array('title'=>'Филм 6','year'=>2000,'budget'=>143,'genre'=>'романтичен','lead'=>'Актьор 3');
  $films[6]=array('title'=>'Филм 7','year'=>2015,'budget'=>672,'genre'=>'фентъзи','lead'=>'Актьор 4');
  $actors=array(array());
  $actors[0]=array('name'=>'Актьор 1','nationality'=>'USA','age'=>53,'oscar'=>3);
  $actors[1]=array('name'=>'Актьор 2','nationality'=>'UK','age'=>36,'oscar'=>1);
  $actors[2]=array('name'=>'Актьор 3','nationality'=>'FR','age'=>18,'oscar'=>0);
  $actors[3]=array('name'=>'Актьор 4','nationality'=>'USA','age'=>47,'oscar'=>2);
  $actors[4]=array('name'=>'Актьор 5','nationality'=>'BG','age'=>31,'oscar'=>0);
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
      .main{
        min-width: 40%;
        float: left;
        padding: 0 20px;
      }
      .scroll{
        width: 100%;
        height: 325px;
        overflow: auto;
        border: 1px solid #DDD;
        padding: 0 10px;
      }
      ul{
        margin: -20px 0 20px 0;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <h2>ФИЛМИ</h2>
      <div class="scroll">
<?php
  foreach ($films as $value) {
    echo "      <h3>".$value['title']."</h3>\n";
    echo "      <ul>";
    echo "        <li>Година: ".$value['year']."</li>\n";
    echo "        <li>Бюджет $: ".$value['budget']." хил.</li>\n";
    echo "        <li>Жанр: ".$value['genre']."</li>\n";
    echo "        <li>Главен актьор: ".$value['lead']."</li>\n";
    echo "      </ul>\n";
  }
?>
    </div></div>
    <div class="main">
      <h2>АКТЬОРИ</h2>
      <div class="scroll">
<?php
  foreach ($actors as $value) {
    echo "      <h3>".$value['name']."</h3>\n";
    echo "      <ul>\n";
    echo "        <li>Националност: ".$value['nationality']."</li>\n";
    echo "        <li>Възраст: ".$value['age']." г. </li>\n";
    echo "        <li>Брой оскари: ".$value['oscar']."</li>\n";
    echo "      </ul>\n";
  }
  echo "    </div></div>\n";
//б) Да се направи форма, в която потребителя избира актьор и му се показва информация 
//за актьора и всички филми, в които е бил главен актьор.
?>
    <form style="clear: both" method="post" action="z5.php">
      <br/><hr>
      Изберете актьор:
      <select name="sel">
        <option value="not"></option>
<?php
  foreach ($actors as $key => $value) {
    echo "        <option value='$key'>".$value['name']."</option>\n";
  }
?>
      </select>
      <input type="submit" value="Покажи"/>
    </form>
<?php
  if (!empty($_POST) && $_POST['sel'] != 'not') {
    $actor=$actors[$_POST['sel']];
    echo "    <h4>".$actor['name']."</h4>\n";
    echo "    <ul>\n";
    echo "      <li>Националност: ".$actor['nationality']."</li>\n";
    echo "      <li>Възраст: ".$actor['age']." г. </li>\n";
    echo "      <li>Брой оскари: ".$actor['oscar']."</li>\n";
    echo "    </ul>\n";
    echo "    <h4>Филми в които играе главна роля:</h4>\n";
    echo "    <ul>\n";
    $lead=false;
    foreach ($films as $value) {
      if ($value['lead']==$actor['name']) {
        echo "      <li>".$value['title']."</li>\n";
        $lead=true;
      }
    }
    if (!$lead) {
      echo "      <li>Не намирам филм в който е играл главна роля.</li>\n";
    }
    echo "    </ul>\n";
  }
?>
  </body>
</html>
