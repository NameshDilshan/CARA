<?php 
  
include('./dbconnection.php');

$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$password =  $_REQUEST['password'];

$sql = "INSERT INTO customer (`name`, `email`, `password`) VALUES ('$name','$email','$password')";

if(mysqli_query($conn, $sql)){
    echo "<h4> Registed successfully, Please Login !!</h4>";
} else{
    echo "ERROR:  $sql. ". mysqli_error($conn);
}
mysqli_close($conn);

header('Location: /CARA/account.php');

