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

            <div class="row">
                <div class="col-2">
                    <h1>IT'S AN "ADD TO CART" KINDA DAY!</h1>
                    <p>Stay home and <b>SHOP ONLINE</b>.You're too pretty to have to look for a parking spot.</p>
                    <a href="" class="btn">Explore Now &#8594</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.jpg">
                </div>
            </div>
        </div>
    </div>

    <!--------featured categories-------->
    <!-- <div class="categories">
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
       
    </div> -->

    <div class="categories">
        <div class="small-container">
          <div class="row">
              <div class="col-3">
                  <img src="images/category-1.jpeg" onclick="window.location.href='category.php?sort=Earrings'">
                  <h><a href="category.php?sort=Earrings">Earrings</a></h>
              </div>
              <div class="col-3">
                <img src="images/category-2.jpg" onclick="window.location.href='category.php?sort=Necklaces'">
                <h><a href="category.php?sort=Necklaces">Necklaces</a></h>
              </div>
              <div class="col-3">
                <img src="images/category-3.jpg" onclick="window.location.href='category.php?sort=Rings'">
                <h><a href="category.php?sort=Rings">Rings</a></h>
              </div>
          </div>
        </div> 
    </div>
    
    
     <!--------featured products-------->
        <div class="small-container">
            <h2 class="title">Featured Products</h2>
            <div class="row">
                <?php  
                   include('backend/dbconnection.php');  
                   $sql = "SELECT * FROM product where isfeatured = 1";
                   $result = $conn->query($sql);
                   if (mysqli_num_rows($result)) {
                   while($row = mysqli_fetch_assoc($result)) { 
                   ?>
                   
                   <div class="col-4" onclick="window.location.href='productdetail.php?productId=<?php echo $row['id']; ?>'">
                        <img src="<?php echo $row['image']; ?>">
                        <h4><?php echo $row['name']; ?></h4>
                        <div class="rating">
                            <?php echo $row['rating']; ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star-o"></i>
                        </div> 
                        <p><?php echo $row['price']; ?></p>
                    </div> 
                <?php 
                    }
                } 
                ?>  
            </div>
            <h2 class="title">Latest Products</h2>
            <div class="row">
                <?php  
                   include('backend/dbconnection.php');  
                   $sql = "SELECT * FROM product where islatest = 1";
                   $result = $conn->query($sql);
                   if (mysqli_num_rows($result)) {
                   while($row = mysqli_fetch_assoc($result)) { 
                   ?>
                   
                   <div class="col-4" onclick="window.location.href='productdetail.php?productId=<?php echo $row['id']; ?>'">
                        <img src="<?php echo $row['image']; ?>">
                        <h4><?php echo $row['name']; ?></h4>
                        <div class="rating">
                            <?php echo $row['rating']; ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star-o"></i>
                        </div> 
                        <p><?php echo $row['price']; ?></p>
                    </div> 
                <?php 
                    }
                } 
                ?> 
            </div>
         </div>
<!--------footer-------->
 
     <div class="footer">
         <div class="container">
             <div class="row">
                <div class="footer-col-1">
                    <form action="backend/sendmail.php" method="POST">
                        <h3>Contact Us</h3>
                        <label for="name"> Name : </label>
                        <input type="text" name="name" placeholder="Name" required>
                        <label for="email"> Email : </label>
                        <input type="text" name="email" placeholder="Email" required>
                        <label for="message"> Message : </label>
                        <input type="text" name="message" placeholder="Message" required>
                        <button type="submit" class="btn">Send Email</button> 
                    </form> 
                 </div>
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
