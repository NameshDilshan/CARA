<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Cara</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <style>
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>
    <?php include('common/header.php');
    include('backend/dbconnection.php');
    $id = $_GET['id']; 
    $sql = "SELECT * FROM product WHERE id = $id";
    $result = mysqli_query($conn, $sql); 
    while($res = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        $name = $res['name'];
        $rating = $res['rating'];
        $price = $res['price'];
        $image = $res['image'];
        $isfeatured = $res['isfeatured'];
        $islatest = $res['islatest'];
        $description = $res['description'];
        $category = $res['category'];
        $image_two = $res['image_two'];
        $image_three = $res['image_three'];
        $image_one = $res['image_one'];
    }
    ?> 

<div style="background: radial-gradient(#fff,#7ec9d6); height: 500px; margin-top: 10px;">
    <div class="container">
        <div class="row"> 
             <form id="addProductForm" action="backend/updateProduct.php" method="POST" >
                <input type="text" name="id" placeholder="id" value='<?php echo $id;?>' hidden>
                <div class="column">
                    <label for="name"> Name : </label>
                    <input type="text" name="name" placeholder="Name" value='<?php echo $name;?>' required>
                    <label for="rating"> Rating : </label>
                    <input type="text" name="rating" placeholder="Rating" value='<?php echo $rating;?>' required>
                    <label for="price"> Price : </label>
                    <input type="text" name="price" placeholder="Price" value='<?php echo $price;?>' required>
                    <label for="image"> image : </label>
                    <input type="text" name="image" placeholder="Image" value='<?php echo $image;?>' required>
                    
                    <label for="isfeatured"> isfeatured : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" name="isfeatured" style="width: 20px; height: 20px;"
                        <?php if (isset($isfeatured) && $isfeatured==1) echo "checked";?> value="1">Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="isfeatured" style="width: 20px; height: 20px;"
                        <?php if (isset($isfeatured) && $isfeatured==0) echo "checked";?> value="0">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br />  
                    <br />  
                    <label for="islatest"> islatest : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" name="islatest" style="width: 20px; height: 20px;"
                        <?php if (isset($islatest) && $islatest==1) echo "checked";?> value="1">Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="islatest" style="width: 20px; height: 20px;"
                        <?php if (isset($islatest) && $islatest==0) echo "checked";?> value="0">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br />  
                    <br />
                </div>
                <div class="column"> 
                    <label for="description"> description : </label>
                    <input type="text" name="description" placeholder="description" value='<?php echo $description;?>' required> 
                    <label for="category"> image : </label>
                    <input type="text" name="category" placeholder="category" value='<?php echo $category;?>' required> 
                    <label for="image_one"> image_one : </label>
                    <input type="text" name="image_one" placeholder="images/image_one.jpg" value='<?php echo $image_one;?>' required> 
                    <label for="image_two"> image_two : </label>
                    <input type="text" name="image_two" placeholder="images/image_two.jpg" value='<?php echo $image_two;?>' required> 
                    <label for="image_three"> image_three : </label>
                    <input type="text" name="image_three" placeholder="images/image_three.jpg" value='<?php echo $image_three;?>' required> 
                    <button type="submit" class="btn">Update Product</button>  
                    <a href="uploadFiles.php"><button type="button" class="btn">Upload Images</button></a>   
                    <br />
                 </div>
             </form> 
        </div> 
    </div> 
</div>

 
</body>

    <!--------footer-------->
    <!-- <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Quote of the Month</h3>
                    <p>Perfect From Beginning to End</p>
                </div>
                <div class="footer-col-2"></div>
                <h3>Follow us on</h3>
                <ul>
                    <li>Instragram</li>
                    <li>Facebook</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright CARA 2022</p>
    </div> -->
    <!----------js for toggle menu---------->
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
    <!----------js for toggle Form--------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
        function register() {
            RegForm.style.transform = "translateX(0PX)";
            LoginForm.style.transform = "translateX(0PX)";
            Indicator.style.transform = "translateX(100PX)";
        }
        function login() {
            RegForm.style.transform = "translateX(300PX)";
            LoginForm.style.transform = "translateX(300PX)";
            Indicator.style.transform = "translateX(0PX)";
        }

        function triggerShowHideAddDiv(){
            if(document.getElementById('addProductDivId').style.display == 'block'){
                document.getElementById('addProductDivId').style.display = 'none'; 
            }else{
                document.getElementById('addProductDivId').style.display = 'block'; 
            }
        }
    </script>
</body>
</html>