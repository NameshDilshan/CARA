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
        <!-----------single product details------------>
        <?php  
                include('backend/dbconnection.php');  
                $productId = $_GET['productId'];
                $sql = "SELECT * FROM product where id = $productId";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result)) {
                while($row = mysqli_fetch_assoc($result)) { 
                ?>
                <!-- <div class="col-4">
                    <img src="<?php echo $row['image']; ?>" onclick="window.location.href='productdetail.php?productId=<?php echo $row['id']; ?>'">
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
                </div>  -->


            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo $row['image_one']; ?>" width="100%" id="ProductImg">

                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="<?php echo $row['image_two']; ?>" width="100%" class="small-img">
                             </div>
                             <div class="small-img-col">
                                <img src="<?php echo $row['image_three']; ?>" width="100%" class="small-img">
                             </div>
                        </div>  
                    </div>
                    <div class="col-2">
                        <p>Home / <?php echo $row['category']; ?></p>
                        <h1><?php echo $row['name']; ?></h1>
                        <h4><?php echo $row['price']; ?></h4>
                        <select>
                            <option>Select Color</option>
                            <option>Gold</option>
                            <option>Silver</option>
                        </select>
                            <input type="text " id="idaddtocart"  name="id" value="<?php echo $row['id']; ?>" hidden />
                            <input type="number" id="qtynumber"   name="qtynumber" value="1"> 
                            <button onclick="addtocart()" type="submit" class="btn">Add To Cart</button>
                        <h3>Product Details</h3>
                        <br>
                        <p><?php echo $row['description']; ?> </p>
                    </div>
                </div>
            </div>

            <?php 
                }
            } 
            ?>  

 <!------------title----------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
        </div>
    </div>

 <!----------products---------->
          <div class="small-container">
            
                <div class="row">
                <div class="col-4">
                    <img src="images/product-9.jpg">
                    <h4>Asymetric Daisy Earrings</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs750.00</p>
                </div> 
                <div class="col-4">
                    <img src="images/product-10.webp">
                    <h4>Star Shell Drop Earrings</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs520.00</p>
                </div>  
                <div class="col-4">
                    <img src="images/product-11.webp">
                    <h4>Butterfly Stud Earrings</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs470.00</p>
                </div>  
                <div class="col-4">
                    <img src="images/product-12.jpg">
                    <h4>Gold Pearl chain Ring</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs650.00</p>
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


<!--------js for product gallery--------->

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src; 
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src; 
        }

        function getCookie(name) {
        let cookie = {};
        document.cookie.split(';').forEach(function(el) {
            let [k,v] = el.split('=');
            cookie[k.trim()] = v;
        })
        return cookie[name];
        }

        function setCookie(name,value,days){
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }

    // add item to cookie
    function addtocart(){
        var previouscart = getCookie("cart");
        if(previouscart != null){
            previouscart = JSON.parse(previouscart); 
        }else{
            previouscart = [];
        } 
        var id = document.getElementById("idaddtocart").value; 
        var qtynumber = document.getElementById("qtynumber").value;
        var jsonObject = {"id": id, "qty": qtynumber};
        previouscart.push(jsonObject);
        var finalCart = JSON.stringify(previouscart);
        setCookie("cart", finalCart, 30);
        window.location.href = "/CARA/cart.php";
    }

    </script>

 
       
    </body>
</html>