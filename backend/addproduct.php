<?php 
  
include('./dbconnection.php');

$mysqli = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName); 

$name =  mysqli_real_escape_string($mysqli, $_POST['name']);
$rating = mysqli_real_escape_string($mysqli, $_POST['rating']);
$price =  mysqli_real_escape_string($mysqli, $_POST['price']);
$image = mysqli_real_escape_string($mysqli, $_POST['image']);
$isfeatured =  mysqli_real_escape_string($mysqli, $_POST['isfeatured']);
$islatest = mysqli_real_escape_string($mysqli, $_POST['islatest']);
$description =  mysqli_real_escape_string($mysqli, $_POST['description']);
$category = mysqli_real_escape_string($mysqli, $_POST['category']);
$image_two =  mysqli_real_escape_string($mysqli, $_POST['image_two']);
$image_three = mysqli_real_escape_string($mysqli, $_POST['image_three']);
$image_one =  mysqli_real_escape_string($mysqli, $_POST['image_one']);

$sql = "INSERT INTO `caradb`.`product` (`name`, `rating`, `price`, `image`, `isfeatured`, `islatest`, `description`, `category`, `image_two`, `image_three`, `image_one`)
VALUES ('$name', '$rating', '$price', '$image', '$isfeatured', '$islatest', '$description', '$category', '$image_two', '$image_three', '$image_one') ";
if(mysqli_query($conn, $sql)){ 
    echo "<script>alert('Product Added successfully!!'); document.location='/CARA/admindashboard.php'</script>";
} else{
    echo "ERROR:  $sql. ". mysqli_error($conn);
}
mysqli_close($conn);