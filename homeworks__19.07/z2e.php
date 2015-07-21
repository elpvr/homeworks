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
  }
  $res=mysqli_query($link,"SELECT * FROM dlops WHERE id='{$_GET['id']}'");
  if (mysqli_num_rows($res)>0) { $dlop=mysqli_fetch_assoc($res); }
  else { header('Location: z2.php'); }
?>
    <br/>
    <div class='col-xs-10 col-xs-offset-1'>
      <div class='panel panel-info'>
        <div class='panel-heading'>
          <h4>Edit Dlop</h4>
        </div><br/>
        <form method="POST" action="z2e.php" class='text-center'>
          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">First Name</label> 
            <div class="col-md-8"><input class="form-control" type="text" name="fn"
                                         value="<?php echo $dlop['first_name']; ?>"/></div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Last Name</label> 
            <div class="col-md-8"><input class="form-control" type="text" name="ln"
                                         value="<?php echo $dlop['last_name']; ?>"/></div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Race</label> 
            <div class="col-md-8">
              <select class="form-control" name="race">
                <option value="" style="display: none"></option>
<?php
  $res=mysqli_query($link,"SELECT * FROM races");
  if (mysqli_num_rows($res)>0) {
    while ($race=mysqli_fetch_assoc($res)) {
      if ($dlop['race']==$race['race']) { $sel=' selected'; } else { $sel=''; }
      echo "                <option value='{$race['race']}'$sel>{$race['race']}</option>\n";
    }
  }
?>
              </select>
            </div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Gender</label> 
            <div class="col-md-8"><input class="form-control" type="text" name="gender"
                                         value="<?php echo $dlop['gender']; ?>"/></div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Date of Birth<br/><sup>(yyyy-mm-dd)</sup></label> 
            <div class="col-md-8"><input class="form-control" type="text" name="birth"
                                         value="<?php echo $dlop['date_of_birth']; ?>"/></div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Weight</label> 
            <div class="col-md-8"><input class="form-control" type="text" name="weight"
                                         value="<?php echo $dlop['weight']; ?>"/></div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Status</label> 
            <div class="col-md-8">
              <select class="form-control" name="status">
                <option value="" style="display: none"></option>
<?php
  $res=mysqli_query($link,"SELECT * FROM statuses");
  if (mysqli_num_rows($res)>0) {
    while ($status=mysqli_fetch_assoc($res)) {
      if ($dlop['status']==$status['status']) { $sel=' selected'; } else { $sel=''; }
      echo "                <option value='{$status['status']}'$sel>{$status['status']}</option>\n";
    }
  }
?>
              </select>
            </div>
          </div><br/>
          <button type='submit' class='btn btn-success' name="yes">Save</button> &nbsp; 
          <a href='z2.php' class='btn btn-danger'>Cancel</a>
        </form><br/>
      </div>
    </div>
  </body>
</html>
