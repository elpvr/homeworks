<?php
  include 'header.php';
  if (!empty($_POST)) {
    $id=$_POST['id'];
    mysqli_query($link,"UPDATE dlops SET date_deleted=now() WHERE id=$id");
    header('Location: z2.php');
  }
  $res=mysqli_query($link,"SELECT * FROM dlops WHERE id='{$_GET['id']}'");
  if (mysqli_num_rows($res)>0) {
    $dlop=mysqli_fetch_assoc($res);
    $class="panel-danger";
    $tit="Delete Dlop";
    $sbm='Delete';
    include 'data_form.php';
  }
  else { header('Location: z2.php'); }
?>
