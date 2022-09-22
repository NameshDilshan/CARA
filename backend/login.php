<?php 
  
include('./dbconnection.php');

$name = $_REQUEST['name'];
$password =  $_REQUEST['password'];

$sql = "SELECT * FROM customer WHERE name = '$name' AND password = '$password' ";
$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);
if($count == 1){
    setcookie("id", $row['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("name", $row['name'], time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("email", $row['email'], time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("password", $row['password'], time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: /CARA/index.php');
}else{  
    echo "<script>alert('Login failed. Invalid username or password.'); document.location='/CARA/account.php'</script>";
}
mysqli_close($conn); 

