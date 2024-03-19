<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hbl bank";
$role=$_POST['role'];
$pass=$_POST['pass'];

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
    <title>Bank Management System</title>
</head>
<body>
<?php
 $result=mysqli_query($conn, "SELECT password FROM employees where role='$role'");
if($result->num_rows==0){
    echo "Role not found";
  }
  $row = mysqli_fetch_assoc($result);
$password = $row['password'];

  if ($role == "admin" && password_verify($pass, $password) ) {
    header('Location: admin/admin.php', true);
} else if ($role == "accountant" && password_verify($pass, $password) ) {
    header('Location: accountant/accountant.php', true);
} else if ($role == "c_support" && password_verify($pass, $password) ) {
    header('Location: customer support/c_support.php', true);
} else {
    // Handle users with no matching role (optional)
    echo "Invalid role or no role assigned.";
}

    ?>
</body>
</html>
