<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page - Cara</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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
    </style>
</head>
<body>
    <?php include('common/header.php');
    include('backend/dbconnection.php'); 
    ?>
<div style="background: radial-gradient(#fff,#7ec9d6); height: 500px; margin-top: 10px; " >
    <div class="container">
        <div class="row"> 
            <form id="addProductForm" action="backend/addcheckout.php" method="POST">
                <input type="text" name="products" value=<?php echo nl2br($_COOKIE['cart']); ?>  hidden="hidden"/>
                <input type="text" name="customerid" value=<?php echo $_COOKIE['id']; ?>  hidden="hidden"/>
                <div class="column">
                    <label for="name"> Full Name : </label>
                    <input type="text" name="name" placeholder="Name" required>
                    <label for="email"> Email : </label>
                    <input type="text" name="email" placeholder="Email" required>
                    <label for="address"> Address : </label>
                    <input type="text" name="address" placeholder="Address" required>
                    <label for="city"> City : </label>
                    <input type="text" name="city" placeholder="City" required>
                    <label for="province"> Province : </label>
                    <input type="text" name="province" placeholder="Province" required>
                    <label for="zip"> ZIP : </label>
                    <input type="text" name="zip" placeholder="ZIP" required> 
                </div>
                <div class="column"> 
                    <label for="nameonthecard"> Name on Card : </label>
                    <input type="text" name="nameonthecard" placeholder="Name On Card" required> 
                    <label for="ccardnumber"> Credit card number : </label>
                    <input type="text" name="ccardnumber" placeholder="Credit Card Number" required> 
                    <label for="expmonthandyear"> Exp Month & Year : </label>
                    <input type="text" name="expmonthandyear" placeholder="Month/Year" required> 
                    <label for="cvv"> CVV : </label>
                    <input type="text" name="cvv" placeholder="CVV" required>
                    <button type="submit" class="btn" style="margin-top: 90px;">Proceed</button> 
                </div>
            </form>
        </div>
    </div>
</div>
	</table>
</body> 
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
        // var LoginForm = document.getElementById("LoginForm");
        // var RegForm = document.getElementById("RegForm");
        // var Indicator = document.getElementById("Indicator");
        // function register() {
        //     RegForm.style.transform = "translateX(0PX)";
        //     LoginForm.style.transform = "translateX(0PX)";
        //     Indicator.style.transform = "translateX(100PX)";
        // }
        // function login() {
        //     RegForm.style.transform = "translateX(300PX)";
        //     LoginForm.style.transform = "translateX(300PX)";
        //     Indicator.style.transform = "translateX(0PX)";
        // }

        // function triggerShowHideAddDiv(){
        //     if(document.getElementById('addProductDivId').style.display == 'block'){
        //         document.getElementById('addProductDivId').style.display = 'none'; 
        //     }else{
        //         document.getElementById('addProductDivId').style.display = 'block'; 
        //     }
        // }
    </script>
</body>
</html>