<?php
session_start();
$mess='';
if (!empty($_POST)) {
  $_SESSION['count']++;
  switch ($_POST['c']) {
    case 0: 
      $r=$_POST['a']+$_POST['b'];
      $math="$_POST[a] + $_POST[b] = $r";
    break;
    case 1: 
      $r=$_POST['a']-$_POST['b'];
      $math="$_POST[a] - $_POST[b] = $r";
    break;
    case 2:
      $r=$_POST['a']*$_POST['b'];
      $math="$_POST[a] * $_POST[b] = $r";
    break;
    case 3:
      $r=number_format($_POST['a']/$_POST['b'],2);
      $math="$_POST[a] / $_POST[b] = $r";
  }
  if ($r==$_POST['r']) {
    $_SESSION['result']++;
    $mess="Верен отговор!!! $math";
  }
  else {
    $mess="<span style='color:red'>Грешен отговор!!!</span> $math, а не $_POST[r]";
  }
}
include('header.html');
$a=rand(1,100);
$b=rand(1,100);
if ($_SESSION['level']) { $c=rand(0,3); } // Напреднали
else { $c=0; }                            // Начинаещи
switch ($c) {
  case 1: $o='-'; break;
  case 2: $o='*'; break;
  case 3: $o='/'; break;
  default: $o='+';
}
?>
    <h1><i>Аритметика</i></h1>
    <marquee behavior="alternate" loop="1" direction="left" style="width: 200px;">
      <b>Резултат: <?php echo $_SESSION['result']." / ".$_SESSION['count']; ?></b>
    </marquee>
    <a href="z4.php"> >>> Започни нова игра <<<</a>
    <form method="post" action="z4a.php">
      <br/>
<?php 
echo "$a $o $b = <input type='text' name='r'/>";
if ($c==3) {
  echo "<sup style='color: red'> * закръглете резултата до втория знак</sup>";
}
echo "<input type='hidden' name='a' value='$a'/>\n";
echo "<input type='hidden' name='b' value='$b'/>\n";
echo "<input type='hidden' name='c' value='$c'/>\n";
?>
      <br/><br/><input type="submit" value="Готово"/>
    </form>
    <br/>
<?php
echo $mess;
include('footer.html');
?>
