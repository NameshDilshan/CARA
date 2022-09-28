<?php 
include('./dbconnection.php');
$mysqli = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName); 
$id =  mysqli_real_escape_string($mysqli, $_POST['id']);
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

$sql = " UPDATE product SET `name` = '$name', `rating` = '$rating', 
         `price` = '$price',  `image` = '$image' , `isfeatured` = '$isfeatured',  `islatest` = '$islatest' , 
         `description` = '$description', `category` = '$category', `image_two` = '$image_two', 
         `image_three` = '$image_three', `image_one` = '$image_one' WHERE `id` = '$id' ";
         echo "$sql";
if(mysqli_query($conn, $sql)){ 
    echo "<script>alert('Product Updated successfully!!'); document.location='/CARA/admindashboard.php'</script>";
} else{
    echo "ERROR:  $sql. ". mysqli_error($conn);
}
mysqli_close($conn);