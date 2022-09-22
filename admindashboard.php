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
    <?php include('common/header.php'); ?>
    <div class="account-page">
        <div class="container">
            <div class="row">
            <form id="addProductForm" action="backend/addProduct.php" method="POST">
                <div class="column">
                    <label for="name"> Name : </label>
                    <input type="text" name="name" placeholder="Name" required>

                    <label for="name"> Price : </label>
                    <input type="text" name="price" placeholder="Price" required>
                </div>
                <div class="column">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

                    <!-- <input type="text" name="name" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required> -->
                    <button type="submit" class="btn">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!--------footer-------->
    <div class="footer">
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
    </div>
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
    </script>
</body>
</html>