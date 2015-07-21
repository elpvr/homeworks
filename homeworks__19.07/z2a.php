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
?>
    <br/>
    <div class='col-xs-10 col-xs-offset-1'>
      <div class='panel panel-success'>
        <div class='panel-heading'>
          <h4>Add Dlop</h4>
        </div><br/>
        <form method="POST" action="z2a.php" class='text-center'>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">First Name</label> 
            <div class="col-md-8"><input class="form-control" type="text" name="fn"/></div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Last Name</label> 
            <div class="col-md-8"><input class="form-control" type="text" name="ln"/></div>
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
      echo "                <option value='{$race['race']}'>{$race['race']}</option>\n";
    }
  }
?>
              </select>
            </div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Gender</label> 
            <div class="col-md-8"><input class="form-control" type="text" name="gender"/></div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Date of Birth<br/><sup>(yyyy-mm-dd)</sup></label> 
            <div class="col-md-8"><input class="form-control" type="text" name="birth"/></div>
          </div><br/>
          <div class="row">
            <label class="control-label col-xs-2 col-xs-offset-1">Weight</label> 
            <div class="col-md-8"><input class="form-control" type="text" name="weight"/></div>
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
      echo "                <option value='{$status['status']}'>{$status['status']}</option>\n";
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
