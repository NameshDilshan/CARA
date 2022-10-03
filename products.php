<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Cara</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<body>
<?php include('common/header.php'); ?> 
    <div class="small-container"> 
        <div class="row row-2">
            <h2>All Products</h2>   
            <input style="padding: 5px; border: 1px solid #3bd8ff;" type="text" id="searchInput" onkeyup="searchProduct(this)" placeholder="Search Text Here" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"/> 
            <select onchange="location = this.options[this.selectedIndex].value;">
                <option value="/CARA/products.php" <?php if(!isset($_GET['sort'])){echo "selected"; } ?> >Default sorting</option>
                <option value="/CARA/products.php?sort=price" <?php if(isset($_GET['sort']) && $_GET['sort'] === 'price'){echo "selected"; } ?> >Sort by price</option>
                <!-- <option>Sort by popularity</option> -->
                <option value="/CARA/products.php?sort=rating" <?php if(isset($_GET['sort']) && $_GET['sort'] === 'rating' ){echo "selected"; } ?> >Sort by rating</option>
                <!-- <option>Sort by sale</option> -->
            </select>
        </div> 
        <div class="row"> 
            <?php  
                include('backend/dbconnection.php');  
                $sql = "SELECT * FROM product"; 
                $where = null;
                $sort = null;
                if( isset($_GET['search']) ){ 
                    $where = "'%$_GET[search]%'";
                    echo ` where name like $where"`; 
                }
                if(isset($_GET['sort'])){
                    $sql = "SELECT * FROM product ORDER BY ".$_GET['sort']. " DESC";
                }

                if(isset($_GET['search'])){
                    $sql = "SELECT * FROM product where name like $where ";
                } 
                $result = $conn->query($sql);
                if (mysqli_num_rows($result)) {
                while($row = mysqli_fetch_assoc($result)) { 
                ?>
                
                <div class="col-4">
                    <img src="<?php echo $row['image']; ?>" onclick="window.location.href='productdetail.php?productId=<?php echo $row['id']; ?>'">
                    <h4><?php echo $row['name']; ?></h4>
                    <div class="rating">
                        <?php
                        echo $row['rating'];
                        // $x = 1;
                        // while($x <= $row['rating']) {
                        //   echo "⭐";
                        //   $x++;
                        // }
                            // for($i =0; $i <= $row['rating']; $i++){
                            //     echo "<i class='fa fa-star'></i>";
                            // }
                        ?>
                    </div> 
                    <p><?php echo $row['price']; ?></p>
                </div> 
            <?php 
                }
            } 
            ?>  
        <!-- <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div> -->
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
        
        var searchInput = document.getElementById("searchInput");
        searchInput.focus();
        var val = searchInput.value; //store the value of the element
        searchInput.value = ''; //clear the value of the element
        searchInput.value = val;


         function searchProduct(e){  
            console.log(e.value);
            window.location.href = "/CARA/products.php?search="+e.value+"";

            // $.ajax({
            //     url: "test.php",
            //     type: "post",
            //     data: values ,
            //     success: function (response) {

            //     // You will get response from your PHP page (what you echo or print)
            //     },
            //     error: function(jqXHR, textStatus, errorThrown) {
            //     console.log(textStatus, errorThrown);
            //     }
            // });
            // var searchInput = document.getElementById("searchInput").focus();
            // console.log(searchInput);
            
        }
        // value="<?php //if(isset($_GET['search'])){echo $_GET['search']; }?>"
    </script>

</body>

</html>