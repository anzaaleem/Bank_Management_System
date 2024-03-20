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
    <title>Accounts</title>
</head>
<body>
  <div class="container"> 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Enter Account ID:</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <form class="d-flex" role="search" action="customer_data.php" method="post">
        <input class="form-control me-2" type="search" name="a_id" placeholder="Search" nam aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Show Customer Info</button>
      </form>
    </div>
    <button name="name" class="btn btn-success"><a class="nav-link" href="i_branch.php">Add Account</a></button>
    <button name="name" class="btn btn-primary"><a class="nav-link" href="u_branch.php">Update Info</a></button>
    <button name="name" class="btn btn-danger"><a class="nav-link" href="d_branch.php">Delete</a></button>
  </div>
</nav>

<table class="table table-striped">
    <?php
$result=mysqli_query($conn, "SELECT * FROM account order by account_id");
if($result->num_rows==0){
  echo "No accounts found in this branch";
}
else{
  ?>
  <thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Type of account</th>
    <th scope="col">Account balance</th>
    <th scope="col">Branch ID</th>
    <th scope="col">Customer ID</th>
    <th scope="col">Loan ID</th>
  </tr>
</thead>
<tbody>
<?php
  while($r=mysqli_fetch_assoc($result)){ ?>
 <tr>
      <td  scope="row"><?php echo $r['account_id']; ?></td>
      <td><?php echo $r['account_type']; ?></td>
      <td><?php echo $r['account_balance']; ?></td>
      <td><?php echo $r['branch_id']; ?></td>
      <td><?php echo $r['customer_id']; ?></td>
      <td><?php echo $r['loan_id']; } }?></td>
 </tr>
</tbody>
</table>

</div>


  

</body>
</html>