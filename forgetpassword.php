<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Products - Cara</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> -->
    <body> 
    <?php include('common/header.php'); ?>
<!-----------account-page-------->
<div class="account-page">
    <div class="container">
        <div class="row">
             <div class="col-2">
                <img src="images/accountimg1.jpg" width="80%">
             </div>
             <div class="col-2">
                <div class="form-container"> 
                    <span >Forget & Reset Password</span> 
                    <form id="LoginForm" action="backend/forgetpassword.php" method="POST">
                        <input type="email" name="email" placeholder="Email" required> 
                        <button type="submit" class="btn">Reset Password</button> 
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
    var Indicator = document.getElementById("Indicator");  
    LoginForm.style.transform= "translateX(300PX)";
    Indicator.style.transform= "translateX(0PX)"; 
  </script>  
    </body>
</html>