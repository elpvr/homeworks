<?php
include('header.html');
$events=array('musicSF'=>'Judas Priest','theaterSF'=>'ГОСПОДИН БАЛКАНСКИ','sportSF'=>'Турнир по джаги',
              'musicVA'=>'МЕЖДУНАРОДЕН МУЗИКАЛЕН ФЕСТИВАЛ “ВАРНЕНСКО ЛЯТО”','theaterVA'=>'Госпожа Стихийно бедствие',
              'sportVA'=>'Плажен волейбол',
              'musicVR'=>'Vola Open Air 2015','theaterVR'=>'Съвсем проста история','sportVR'=>'Стрийтбол');
echo "<h3>".$events["$_GET[category]$_GET[location]"]."</h3>";
echo "bla... bla...<br/>...bla... bla...<br/>bla... bla...";
include('footer.html');
?>
