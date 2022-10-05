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
    $sql = "SELECT * FROM category WHERE id = $id";
    $result = mysqli_query($conn, $sql); 
    while($res = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        $name = $res['name'];
        $image = $res['image'];
    }
    ?> 

<div style="background: radial-gradient(#fff,#7ec9d6); height: 200px; margin-top: 10px;">
    <div class="container">
        <div class="row"> 
             <form id="addCategoryForm" action="backend/updateCategory.php" method="POST" >
                <input type="text" name="id" placeholder="id" value='<?php echo $id;?>' hidden>
                <div class="column">
                    <label for="name"> Name : </label>
                    <input type="text" name="name" placeholder="Name" value='<?php echo $name;?>' required>
                    <button type="submit" class="btn">Update Category</button> 
                </div>
                <div class="column"> 
                    <label for="image"> image : </label>
                    <input type="text" name="image" placeholder="Image" value='<?php echo $image;?>' required>
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