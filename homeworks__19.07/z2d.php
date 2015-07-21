<?php
  include 'header.php';
  if (!empty($_POST)) {
    $id=$_POST['id'];
    mysqli_query($link,"UPDATE dlops SET date_deleted=now() WHERE id=$id");
    header('Location: z2.php');
  }
?>
    <br/>
    <div class='col-xs-4 col-xs-offset-4'>
      <div class='panel panel-danger'>
        <div class='panel-heading'>
          <h4>Confirm deletion?</h4>
        </div><br/>
        <form method="POST" action="z2d.php" class='text-center'>
          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
          <button type='submit' class='btn btn-success' name="yes">Yes</button> &nbsp; 
          <a href='z2.php' class='btn btn-danger'>No</a>
        </form><br/>
      </div>
    </div>
  </body>
</html>
