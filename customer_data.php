<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hbl bank";
$c_id=$_POST['c_id'];

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
      <th scope="col">Account ID</th>
      <th scope="col">Account balance</th>
      <th scope="col">Branch ID</th>
    </tr>
  </thead>
  <tbody>
    <?php
$result=mysqli_query($conn, "SELECT account_id, account_balance, branch_id FROM account where customer_id=$c_id");
if($result->num_rows==0){
  echo "No records found";
}
else{
  while($r=mysqli_fetch_assoc($result)){  ?> 
  <h3> <?php echo "Account info of Customer ID#".$c_id; ?> </h3> 
 <tr>
      <td  scope="row"><?php echo $r['account_id']; ?></td>
      <td><?php echo $r['account_balance']; ?></td>
      <td><?php echo $r['branch_id']; } }?></td>
 </tr>
</tbody>
</table>

</div>


  

</body>
</html>