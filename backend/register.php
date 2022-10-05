<?php 
  
include('./dbconnection.php');

$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$password =  $_REQUEST['password'];

$sql = "INSERT INTO customer (`name`, `email`, `address`, `password`, `userrole`) VALUES ('$name','$email', '$address' ,'$password', 'Customer')";

if(mysqli_query($conn, $sql)){ 
    echo "<script>alert('Registed successfully, Please Login !!'); document.location='/CARA/account.php'</script>";
} else{
    echo "ERROR:  $sql. ". mysqli_error($conn);
}
mysqli_close($conn);

// header('Location: /CARA/account.php');

