<?php
  include 'header.php';
  if (!empty($_POST)) {
    $fn=trim($_POST['fn']);
    $ln=trim($_POST['ln']);
    $gender=trim($_POST['gender']);
    $birth=trim($_POST['birth']);
    $weight=trim($_POST['weight']);
    mysqli_query($link,"UPDATE dlops SET first_name='$fn',last_name='$ln',race='{$_POST['race']}',gender='$gender',
                        date_of_birth='$birth',weight='$weight',status='{$_POST['status']}' WHERE id='{$_POST['id']}'");
    header('Location: z2.php');
  }
  $res=mysqli_query($link,"SELECT * FROM dlops WHERE id='{$_GET['id']}'");
  if (mysqli_num_rows($res)>0) {
    $dlop=mysqli_fetch_assoc($res);
    $class="panel-info";
    $tit="Edit Dlop";
    $sbm='Save';
    include 'data_form.php';
  }
  else { header('Location: z2.php'); }
?>
