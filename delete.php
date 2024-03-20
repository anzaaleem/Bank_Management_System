<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hbl bank";
$del=$_POST['del'];
$arr=$del;
// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";

if(isset($_POST['del'])){
    $result= mysqli_query($con,"delete from branch where branch_id=".$del);
    if($result){
    header("Location: a_branches.php?b=2");
    }
}



?>