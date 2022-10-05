<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer View Chekcout - Cara</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <style>
        table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <?php include('common/header.php');
    include('backend/dbconnection.php'); 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM checkout WHERE $id ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
    }else{
        $result = [];
    }
    ?>     
	<table border=1 style="width: 80%; text-align: center; align-items: center;"> 
	<tr bgcolor='#CCCCCC'>  
        <td>Produts</td>
		<td>Name</td>
		<td>Email</td>
        <td>Address</td>
		<td>City</td>
		<td>Province</td>
		<td>ZIP</td>
        <td>Name On Card</td>
        <td>C.Card Number</td>
		<td>Exp Month/Year</td> 
	</tr>
	<?php  
        while($res = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 		
            echo "<tr>"; 
            echo "<td>";
            $products = $res['products'];
            $decodedPhpArray = json_decode($products, true);
            foreach($decodedPhpArray as $item) { 
                $id = '';
                if(isset($item['id'])){ $id = $item['id']; } 
                $sql = "SELECT * FROM product where id = '$id' "; 
                $result = $conn->query($sql);
                if (mysqli_num_rows($result)) {
                while($row = mysqli_fetch_assoc($result)) {
                    $currentPrice = substr($row['price'], 2);
                    echo "<p>●   ".$row['name']." - ".$item['qty']. "</p>";
                    echo "<hr />";
                }
            } 
            }  
            echo "</td>"; 
            echo "<td>".$res['name']."</td>"; 
            echo "<td>".$res['email']."</td>";  
            echo "<td>".$res['address']."</td>"; 
            echo "<td>".$res['city']."</td>"; 
            echo "<td>".$res['province']."</td>"; 
            echo "<td>".$res['zip']."</td>"; 
            echo "<td>".$res['nameonthecard']."</td>";
            echo "<td>".$res['ccardnumber']."</td>"; 
            echo "<td>".$res['expmonthandyear']."</td>";  
        }
	?>
	</table>
</body>
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "300px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>