<?php
  function echo_option($table,$field,$s){
    global $link;
    $res=mysqli_query($link,"SELECT * FROM $table");
    if (mysqli_num_rows($res)>0) {
      while ($row=mysqli_fetch_assoc($res)) {
        if ($row[$field]==$s) { $sel=' selected'; } else { $sel=''; }
          echo "                <option value='{$row[$field]}'$sel>{$row[$field]}</option>\n";
      }
    }
  }
?>
    <br/>
    <div class='col-xs-10 col-xs-offset-1'>
      <div class='panel <?php echo $class; ?>'>
        <div class='panel-heading'>
          <h4><?php echo $tit; ?></h4>
        </div><br/>
        <form method="POST" action="" class='text-center'>
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
<?php echo_option('races','race',$dlop['race']); ?>
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
<?php echo_option('statuses','status',$dlop['status']); ?>
              </select>
            </div>
          </div><br/>
          <button type='submit' class='btn btn-success'><?php echo $sbm ?></button> &nbsp; 
          <a href='z2.php' class='btn btn-danger'>Cancel</a>
        </form><br/>
      </div>
    </div>
  </body>
</html>
