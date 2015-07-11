<?php
$sites=array();
$sites['www.dir.bg']=array('url'=>'http://dir.bg',
                           'logo'=>'http://www.bix.bg/assets/images/members_logos/dirbg_logo.jpg',
                           'description'=>'бг портал: последни новини, бнб фиксинг, игри, тото, футбол, прогноза за времето, програма кино, хороскоп за деня, музика, тв програма, коледни картички, вицове.',
                           'creator'=>'dir.bg','users'=>1740,'technology'=>'PHP');
$sites['www.tribali.info']=array('url'=>'http://tribali.info',
                           'logo'=>'http://www.tribali.info/img/logo_new.png',
                           'description'=>'Враца, Монтана и Видин - новини, събития, спорт, крими, политика, бизнес!',
                           'creator'=>'','users'=>26,'technology'=>'WordPress');
$sites['www.dnes.bg']=array('url'=>'http://dnes.bg',
                           'logo'=>'http://85.14.28.164/d/template/default-1.0.6/img/facelift/logo.png',
                           'description'=>'Новинарски сайт за новини от България и света на теми - спорт, технологии, социално-културни, здраве, криминалистика, автомобили, политика.',
                           'creator'=>'Investor.bg','users'=>630,'technology'=>'PHP');
$sites['www.mobile.bg']=array('url'=>'http://mobile.bg',
                           'logo'=>'http://www.mobile.bg/images/picturess/logo.gif',
                           'description'=>'Българският автомобилен пазар: нови и втора употреба автомобили, джипове, камиони, мотоциклети...',
                           'creator'=>'mobile.bg','users'=>1210,'technology'=>'PHP');
$sites['www.abv.bg']=array('url'=>'http://abv.bg',
                           'logo'=>'http://blog.abv.bg/wp-content/themes/default/i/logo.gif',
                           'description'=>'Най-голямата електронна поща в България с над 3 500 000 активни акаунта! АБВ Поща ви дава 10GB пространство, POP3 и SMTP достъп, защита от спам, антивирусна защита.',
                           'creator'=>'Нет Инфо','users'=>3517,'technology'=>'PHP');
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
      <div class="panel panel-primary">
<?php
  $site=$sites[$_GET['site']];
  echo "        <div class='panel-heading'>".$_GET['site']."</div>\n";
  echo "        <div class='panel-body'>\n";
  echo "          <a href='{$site['url']}'><img src='{$site['logo']}'/></a><br/><br/>\n";
  echo "          <table class='table table-hover'>\n";
  echo "            <tr><th>Кратко описание</th><td>{$site['description']}</td></tr>\n";
  echo "            <tr><th>Създател</th><td>{$site['creator']}</td></tr>\n";
  echo "            <tr><th>Брой потребители /хил./</th><td>{$site['users']}</td></tr>\n";
  echo "            <tr><th>Използвана технология </th><td>{$site['technology']}</td></tr>\n";
?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
