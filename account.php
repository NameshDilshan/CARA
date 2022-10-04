<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Products - Cara</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <body>
        
    <?php include('common/header.php'); ?>
        <!-- <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"></a><img src="images/logo.PNG" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="category.php">Categories</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
            </nav>
                
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
               
        </div> -->

<!-----------account-page-------->

<div class="account-page">
    <div class="container">
        <div class="row">
             <div class="col-2">
                <img src="images/accountimg1.jpg" width="80%">
             </div>
             <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm" action="backend/login.php" method="POST">
                        <input type="text" name="name" placeholder="Username" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit" class="btn">Login</button>
                        <a href="forgetpassword.php">Forgot or Change password</a>
                    </form>
                    <form id="RegForm" action="backend/register.php" method="POST">
                        <input type="text" name="name" placeholder="Username" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit" class="btn">Register</button>
                    </form> 
                </div>
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
         function menutoggle(){
             if(MenuItems.style.maxHeight == "0px")
             {
                MenuItems.style.maxHeight = "300px";
             }
            else
             {
                MenuItems.style.maxHeight = "0px";
             }
         }
    </script>


<!----------js for toggle Form--------->

  <script>

    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

       function register(){

        RegForm.style.transform= "translateX(0PX)";
        LoginForm.style.transform= "translateX(0PX)";
        Indicator.style.transform= "translateX(100PX)";
        }

       function login(){

        RegForm.style.transform= "translateX(300PX)";
        LoginForm.style.transform= "translateX(300PX)";
        Indicator.style.transform= "translateX(0PX)";
        }
  </script>
    </body>
</html>