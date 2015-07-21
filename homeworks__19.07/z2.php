<?php
  include 'header.php';
?>
    <table class='table table-bordered table-striped'>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Last name</th>
        <th>Race</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Weight</th>
        <th>Status</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
<?php
  $res=mysqli_query($link,"SELECT * FROM dlops WHERE date_deleted is null");
  if (mysqli_num_rows($res)>0) {
    $i=1;
    while ($dlop=mysqli_fetch_assoc($res)) {
      echo "      <tr><td>$i</td><td>{$dlop['first_name']}</td><td>{$dlop['last_name']}</td>";
      echo "<td>{$dlop['race']}</td><td>{$dlop['gender']}</td><td>{$dlop['date_of_birth']}</td>";
      echo "<td>{$dlop['weight']}</td><td>{$dlop['status']}</td>";
      echo "<td><a href='z2e.php?id={$dlop['id']}' class='btn btn-info'>Edit</a></td>";
      echo "<td><a href='z2d.php?id={$dlop['id']}' class='btn btn-danger'>Delete</a></td>";
      echo "</tr>\n";
      $i++;
    }
  }
?>
    </table>
    <p class='text-center'><a href='z2a.php' class='btn btn-success'>Add Dlop</a></p>
  </body>
</html>
