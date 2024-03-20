<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hbl bank";
$account=$_POST['account'];

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
    <?php
$result=mysqli_query($conn, "SELECT * FROM account where account_id=$account order by account_id");
if($result->num_rows==0){
  echo "No data found";
}
else{
  ?>
  <thead>
  <tr>
  <th scope="col">ID</th>
      <th scope="col">Account Type</th>
      <th scope="col">Account Balance</th>
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