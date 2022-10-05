<?php 
include('./dbconnection.php');
$mysqli = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName); 
$id =  mysqli_real_escape_string($mysqli, $_POST['id']);
$name =  mysqli_real_escape_string($mysqli, $_POST['name']);
$image = mysqli_real_escape_string($mysqli, $_POST['image']);

$sql = " UPDATE category SET `name` = '$name', `image` = '$image' WHERE `id` = '$id' ";
if(mysqli_query($conn, $sql)){ 
    echo "<script>alert('Category Updated successfully!!'); document.location='/CARA/admindashboard.php'</script>";
} else{
    echo "ERROR:  $sql. ". mysqli_error($conn);
}
mysqli_close($conn);