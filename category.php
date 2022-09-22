<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cara | Online Shopping Site</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <body>
        <div class="header">
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
            

    <!--------featured categories-------->
    <div class="categories">
        <div class="small-container">
          <div class="row">
              <div class="col-3">
                  <img src="images/category-1.jpeg">
                  <h>Earrings</h>
              </div>
              <div class="col-3">
                <img src="images/category-2.jpg">
                <h>Necklaces</h>
              </div>
              <div class="col-3">
                <img src="images/category-3.jpg">
                <h>Rings</h>
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
      
   </body>
</html>
