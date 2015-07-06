<?php
//Да се направи игра като Стани богат, която има поне 10 въпроса и всеки път въпросите 
//и отговорите се падат в разбъркан ред.
  $questions=array(array());
  $questions[0]=array('q'=>'Въпрос 1',
                      'a'=>'Отговор A<sub>1</sub>','b'=>'Отговор B<sub>1</sub>',
                      'c'=>'Отговор C<sub>1</sub>','d'=>'Отговор D<sub>1</sub>');
  $questions[1]=array('q'=>'Въпрос 2',
                      'a'=>'Отговор A<sub>2</sub>','b'=>'Отговор B<sub>2</sub>',
                      'c'=>'Отговор C<sub>2</sub>','d'=>'Отговор D<sub>2</sub>');
  $questions[2]=array('q'=>'Въпрос 3',
                      'a'=>'Отговор A<sub>3</sub>','b'=>'Отговор B<sub>3</sub>',
                      'c'=>'Отговор C<sub>3</sub>','d'=>'Отговор D<sub>3</sub>');
  $questions[3]=array('q'=>'Въпрос 4',
                      'a'=>'Отговор A<sub>4</sub>','b'=>'Отговор B<sub>4</sub>',
                      'c'=>'Отговор C<sub>4</sub>','d'=>'Отговор D<sub>4</sub>');
  $questions[4]=array('q'=>'Въпрос 5',
                      'a'=>'Отговор A<sub>5</sub>','b'=>'Отговор B<sub>5</sub>',
                      'c'=>'Отговор C<sub>5</sub>','d'=>'Отговор D<sub>5</sub>');
  $questions[5]=array('q'=>'Въпрос 6',
                      'a'=>'Отговор A<sub>6</sub>','b'=>'Отговор B<sub>6</sub>',
                      'c'=>'Отговор C<sub>6</sub>','d'=>'Отговор D<sub>6</sub>');
  $questions[6]=array('q'=>'Въпрос 7',
                      'a'=>'Отговор A<sub>7</sub>','b'=>'Отговор B<sub>7</sub>',
                      'c'=>'Отговор C<sub>7</sub>','d'=>'Отговор D<sub>7</sub>');
  $questions[7]=array('q'=>'Въпрос 8',
                      'a'=>'Отговор A<sub>8</sub>','b'=>'Отговор B<sub>8</sub>',
                      'c'=>'Отговор C<sub>8</sub>','d'=>'Отговор D<sub>8</sub>');
  $questions[8]=array('q'=>'Въпрос 9',
                      'a'=>'Отговор A<sub>9</sub>','b'=>'Отговор B<sub>9</sub>',
                      'c'=>'Отговор C<sub>9</sub>','d'=>'Отговор D<sub>9</sub>');
  $questions[9]=array('q'=>'Въпрос 10',
                      'a'=>'Отговор A<sub>10</sub>','b'=>'Отговор B<sub>10</sub>',
                      'c'=>'Отговор C<sub>10</sub>','d'=>'Отговор D<sub>10</sub>');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
      table {
        border-collapse: collapse;
      } 
      .border{
        border: 1px solid #000;
        padding: 5px 10px;
        text-align: center;
        background-color: #DDD;
      }
      td{
        min-width: 40px;
      }
      h2{
        width: 100%;
        text-align: center;
      }
      span{
        color: red;
        font-weight: bold;
        margin-right: 15px;
      }
    </style>
  </head>
  <body>
    <table>
<?php
  $q=rand(0,9);  //Избира произволен номер на въпрос
  if (!empty($_POST)) {
    while ($q==$_POST['q']) { //Проверка дали новоизбрания номер на въпрос не е същия като предния
      $q=rand(0,9);           //и ако е така избира друг произволен номер
    }
  }
  $a=str_shuffle('abcd');  //Разбърква стринга 'abcd' по произволен начин
  echo "      <tr><td colspan='3'><h2>".$questions[$q]['q']."</h2></td></tr>\n";
  echo "      <tr><td class='border'><span>A</span>".$questions[$q][$a[0]]."</td><td></td>";
  echo "<td class='border'><span>B</span>".$questions[$q][$a[1]]."</td></tr>\n";
  echo "      <tr><td>&nbsp;</td></tr>\n";
  echo "      <tr><td class='border'><span>C</span>".$questions[$q][$a[2]]."</td><td></td>";
  echo "<td class='border'><span>D</span>".$questions[$q][$a[3]]."</td></tr>\n";
?>
    </table><br/>
    <form method="post" action="z6.php">
      <input type="hidden" name="q" value="<?php echo $q; ?>"/>
      <input type="submit" value="Избери друг въпрос"/>
    </form>
  </body>
</html>
