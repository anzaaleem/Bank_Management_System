<?php
$con=mysqli_connect("localhost","root","","hbl bank");
if ($con==false){
  echo "Database not found";
}

if(isset($_POST['branch_id'])){
   $branch_id=$_POST['branch_id'];
   $branch_name=$_POST['branch_name'];
   $branch_address=$_POST['branch_address'];

$sql="INSERT INTO branch ( branch_id, branch_name, branch_address) VALUES ($branch_id ,'$branch_name','$branch_address')";
$result= mysqli_query($con,$sql);
if($result){
  header("Location:branches.php?a=1");
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Insert branch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active"  href="branches.php">Back</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="i_branch.php">Add New</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
<form action="i_branch.php" method="post">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Branch ID</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Insert Branch ID" name="branch_id">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Name</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="branch_name" placeholder="Write Branch Name"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
  <textarea class="form-control"  name="branch_address" placeholder="Write Branch adress">
</textarea>
</div>
<div class="mb-3">
<input type="submit" value="Save" name="insert" class="btn btn-primary">
</div>
</form>
</div>
</div>

</body>
</html>