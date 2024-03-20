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
    <link rel="stylesheet" href="branches.css">
    <title>Branches</title>
    <style>
    .alert{
        margin:50px auto;
        width:40%;
      }
      </style>
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Enter Branch ID:</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <form class="d-flex" role="search" action="account_data.php" method="post">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" nam aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Show accounts</button>
      </form>
    </div>
    <button name="name" class="btn btn-success"><a class="nav-link" href="i_branch.php">Add branch</a></button>
    <button name="name" class="btn btn-primary"><a class="nav-link" href="u_branch.php">Update branch</a></button>
    <button name="name" class="btn btn-danger"><a class="nav-link" href="d_branch.php">Delete branch</a></button>
  </div>
</nav>

  
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name of Branch</th>
      <th scope="col">Address of branch</th>
    </tr>
  </thead>
  <tbody>
    <?php
$result=mysqli_query($conn, "SELECT * FROM branch order by branch_id");
if($result->num_rows==0){
  echo "No branches found";
}
else{
  while($r=mysqli_fetch_assoc($result)){ ?>
 <tr>
      <td  scope="row"><?php echo $r['branch_id']; ?></td>
      <td><?php echo $r['branch_name']; ?></td>
      <td><?php echo $r['branch_address']; } }?></td>
 </tr>
</tbody>
</table>

</div>


<?php
  if(isset($_GET['a'])&& $_GET['a']==1){
?>
<div class="alert alert-success" role="alert">
  Branch Added Successfully!
</div>

<?php
  }

  if(isset($_GET['b'])&& $_GET['b']==1){
?>
<div class="alert alert-danger" role="alert">
  Branch Deleted Successfully!
</div>

<?php
  }
  ?>


</body>
</html>