<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hbl bank";
$a_id=$_POST['a_id'];

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
    <title>Customer Data</title>
</head>
<body>
  <div class="container"> 

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Contact Info</th>
      <th scope="col">Address</th>
      <th scope="col">Account ID</th>
    </tr>
  </thead>
  <tbody>
    <?php
$result=mysqli_query($conn, "SELECT * FROM customer where account_id=$a_id");
if($result->num_rows==0){
  echo "No records found";
}
else{
  while($r=mysqli_fetch_assoc($result)){ ?>
 <tr>
      <td  scope="row"><?php echo $r['customer_id']; ?></td>
      <td><?php echo $r['customer_name']; ?></td>
      <td><?php echo $r['phone_no']; ?></td>
      <td><?php echo $r['customer_address']; ?></td>
      <td><?php echo $r['account_id']; } }?></td>
 </tr>
</tbody>
</table>

</div>


  

</body>
</html>