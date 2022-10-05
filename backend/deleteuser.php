<?php 
include('./dbconnection.php');
$id = $_GET['id'];
$sql = "DELETE FROM customer WHERE id=$id";
$result = mysqli_query($conn, $sql);
echo "<script>alert('User Deleted successfully!!'); document.location='/CARA/admindashboard.php'</script>";