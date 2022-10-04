<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Cara</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> -->
    <style>
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px; 
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <?php include('common/header.php');
    include('backend/dbconnection.php'); 
    ?>

<div style="background: radial-gradient(#fff,#7ec9d6); height: 500px; margin-top: 10px; display:none;" id="addProductDivId">
    <div class="container">
        <div class="row">
            <form id="addProductForm" action="backend/addProduct.php" method="POST">
                <div class="column">
                    <label for="name"> Name : </label>
                    <input type="text" name="name" placeholder="Name" required>
                    <label for="rating"> Rating : </label>
                    <input type="text" name="rating" placeholder="Rating" required>
                    <label for="price"> Price : </label>
                    <input type="text" name="price" placeholder="Price" required>
                    <label for="image"> image : </label>
                    <input type="text" name="image" placeholder="Image" required>
                    <label for="isfeatured"> isfeatured : </label>
                    <input type="text" name="isfeatured" placeholder="isfeatured" required>
                    <label for="islatest"> islatest : </label>
                    <input type="text" name="islatest" placeholder="islatest" required>
                </div>
                <div class="column"> 
                    <label for="description"> description : </label>
                    <input type="text" name="description" placeholder="description" required> 
                    <label for="category"> image : </label>
                    <input type="text" name="category" placeholder="category" required> 
                    <label for="image_one"> image_one : </label>
                    <input type="text" name="image_one" placeholder="images/image_one.jpg" required> 
                    <label for="image_two"> image_two : </label>
                    <input type="text" name="image_two" placeholder="images/image_two.jpg" required> 
                    <label for="image_three"> image_three : </label>
                    <input type="text" name="image_three" placeholder="images/image_three.jpg" required> 
                <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form> -->
                    <!-- <input type="text" name="name" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required> -->
                    <button type="submit" class="btn">Add Product</button> 
                    <a href="uploadFiles.php"><button type="button" class="btn">Upload Images</button></a>   
                    <br />
                </div>
            </form>
        </div>
    </div>
</div> 
    <?php 
    $sql = "SELECT * FROM product ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    ?>   
    <button  onClick="triggerShowHideAddDiv()" class="btn" style="margin-left: 50px; margin-bottom: 5px;">Add New Product</button> 
    <br/><br/>  
	<table border=1 style="width:'80%'; margin: 20px; "> 
	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Rating</td>
		<td>Price</td>
		<td>Image</td>
        <td>IsFeatured</td>
		<td>IsLatest</td>
		<td>Description</td>
		<td>Category</td>
        <td>Image Two</td>
        <td>Image Three</td>
		<td>Image One</td>
		<td>Update</td>
	</tr>
	<?php  
	while($res = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
        echo "<td>".$res['rating']."</td>"; 
        echo "<td>".$res['price']."</td>"; 
        echo "<td>".$res['image']."</td>"; 
        if($res['isfeatured'] == 1){
            echo "<td>Yes</td>";
        }else{
            echo "<td>No</td>";
        }
        if($res['islatest'] == 1){
            echo "<td>Yes</td>";
        }else{
            echo "<td>No</td>";
        }
        echo "<td>".$res['description']."</td>"; 
        echo "<td>".$res['category']."</td>"; 
        echo "<td>".$res['image_two']."</td>"; 
        echo "<td>".$res['image_three']."</td>"; 
        echo "<td>".$res['image_one']."</td>"; 
		echo "<td><a href=\"editproduct.php?id=$res[id]\">Edit</a> | <a href=\"backend/deleteproduct.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
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