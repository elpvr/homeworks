<?php
include('header.html');
if (!empty($_GET)) {
  if (!isset($_GET['category']) || !$_GET['location']) {
    echo "<p style='color:red'>Попълнете формата!!!</p><br/>";
  }
  else {
    $events=array('musicSF'=>'Judas Priest','theaterSF'=>'ГОСПОДИН БАЛКАНСКИ','sportSF'=>'Турнир по джаги',
                  'musicVA'=>'МЕЖДУНАРОДЕН МУЗИКАЛЕН ФЕСТИВАЛ “ВАРНЕНСКО ЛЯТО”','theaterVA'=>'Госпожа Стихийно бедствие',
                  'sportVA'=>'Плажен волейбол',
                  'musicVR'=>'Vola Open Air 2015','theaterVR'=>'Съвсем проста история','sportVR'=>'Стрийтбол');
    echo "<h3>".$events["$_GET[category]$_GET[location]"]."</h3>за повече информация натиснете ";
    echo "<a href='z1a.php?category=$_GET[category]&location=$_GET[location]'> тук</a><br/>или<br/><br/>";
  }
}
?>
    <form method="get" action="z1.php">
      Изберете категория<br/>
      <label><input type="radio" name="category" value="music">Музика</label><br/>
      <label><input type="radio" name="category" value="theater">Театър</label><br/>
      <label><input type="radio" name="category" value="sport">Спорт</label><br/><br/>
      Местоположение<br/>
      <select name="location">
        <option value="0">-изберете-</option>
        <option value="SF">София</option>
        <option value="VA">Варна</option>
        <option value="VR">Враца</option>
      </select>
      <br/><br/>
      <input type="submit" value="Изберете"/>
    </form>
<?php
include('footer.html');
?>
