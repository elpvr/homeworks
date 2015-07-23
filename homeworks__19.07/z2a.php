<?php
  include 'header.php';
  if (!empty($_POST)) {
    $fn=trim($_POST['fn']);
    $ln=trim($_POST['ln']);
    $gender=trim($_POST['gender']);
    $birth=trim($_POST['birth']);
    $weight=trim($_POST['weight']);
    mysqli_query($link,"INSERT INTO dlops (first_name,last_name,race,gender,date_of_birth,weight,status)
                        VALUES ('$fn','$ln','{$_POST['race']}','$gender','$birth','$weight','{$_POST['status']}')");
    header('Location: z2.php');
  }
  $dlop=array('first_name'=>'','last_name'=>'','race'=>'','gender'=>'','date_of_birth'=>'','weight'=>'','status'=>'');
  $class="panel-success";
  $tit="Add Dlop";
  $sbm='Save';
  include 'data_form.php';
?>
