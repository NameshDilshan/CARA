<?php 
  
include('./dbconnection.php');

$mysqli = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName); 

$products = mysqli_real_escape_string($mysqli, $_POST['products']);
$name =  mysqli_real_escape_string($mysqli, $_POST['name']);
$email =  mysqli_real_escape_string($mysqli, $_POST['email']);
$address = mysqli_real_escape_string($mysqli, $_POST['address']);
$city =  mysqli_real_escape_string($mysqli, $_POST['city']);
$province = mysqli_real_escape_string($mysqli, $_POST['province']);
$zip =  mysqli_real_escape_string($mysqli, $_POST['zip']);
$nameonthecard = mysqli_real_escape_string($mysqli, $_POST['nameonthecard']);
$ccardnumber =  mysqli_real_escape_string($mysqli, $_POST['ccardnumber']);
$expmonthandyear = mysqli_real_escape_string($mysqli, $_POST['expmonthandyear']);
$cvv =  mysqli_real_escape_string($mysqli, $_POST['cvv']);

$sql = "INSERT INTO `caradb`.`checkout` ( `products`, `name`, `email`, `address`, `city`, `province`, `zip`, `nameonthecard`, `ccardnumber`, `expmonthandyear`, `cvv`)
VALUES ( '$products','$name','$email','$address','$city','$province','$zip','$nameonthecard','$ccardnumber','$expmonthandyear','$cvv') ";

if(mysqli_query($conn, $sql)){ 
    echo "<script>alert('Item bought successfully!!'); document.location='/CARA/admindashboard.php'</script>";
} else{
    echo "ERROR:  $sql. ". mysqli_error($conn);
}
mysqli_close($conn);