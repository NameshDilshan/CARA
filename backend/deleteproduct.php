<?php 
include('./dbconnection.php');
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE id=$id";
$result = mysqli_query($conn, $sql);
echo "<script>alert('Product Deleted successfully!!'); document.location='/CARA/admindashboard.php'</script>";