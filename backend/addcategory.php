<?php 
  
include('./dbconnection.php');

$mysqli = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName); 

$name =  mysqli_real_escape_string($mysqli, $_POST['name']);
$image = mysqli_real_escape_string($mysqli, $_POST['image']);
$sql = "INSERT INTO `caradb`.`category` (`name`, `image`) VALUES ('$name', '$image') ";
if(mysqli_query($conn, $sql)){ 
    echo "<script>alert('Category Added successfully!!'); document.location='/CARA/admindashboard.php'</script>";
} else{
    echo "ERROR:  $sql. ". mysqli_error($conn);
}
mysqli_close($conn);