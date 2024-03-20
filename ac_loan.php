<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hbl bank";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Loans info</title>
</head>
<body>
  <div class="container"> 
<navbar>
    <button name="name" class="btn btn-success"><a class="nav-link" href="i_branch.php">Add</a></button>
    <button name="name" class="btn btn-primary"><a class="nav-link" href="u_branch.php">Update Info</a></button>
    <button name="name" class="btn btn-danger"><a class="nav-link" href="d_branch.php">Delete</a></button>
</navbar> 
<br>
<table class="table table-striped">
    <?php
$result=mysqli_query($conn, "SELECT * FROM loan  order by loan_id");
if($result->num_rows==0){
  echo "No loans record available";
}
else{
  ?>
  <thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Amount</th>
    <th scope="col">Remaining</th>
    <th scope="col">Branch ID</th>
    <th scope="col">Account ID</th>
  </tr>
</thead>
<tbody>
<?php
  while($r=mysqli_fetch_assoc($result)){ ?>
 <tr>
      <td  scope="row"><?php echo $r['loan_id']; ?></td>
      <td><?php echo $r['issued_amount']; ?></td>
      <td><?php echo $r['remaining_amount']; ?></td>
      <td><?php echo $r['branch_id']; ?></td>
      <td><?php echo $r['account_id']; } }?></td>
 </tr>
</tbody>
</table>

</div>


  

</body>
</html>