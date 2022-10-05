<?php 
include('./dbconnection.php');
$id = $_GET['id'];
$sql = "DELETE FROM category WHERE id=$id";
$result = mysqli_query($conn, $sql);
echo "<script>alert('Category Deleted successfully!!'); document.location='/CARA/admindashboard.php'</script>";