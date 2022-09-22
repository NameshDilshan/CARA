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

    <!--------cart items details--------->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php
                include('backend/dbconnection.php');  
                $cart = $_COOKIE['cart'];
                $decodedPhpArray = json_decode($cart, true);
                $ids = ""; 
                $finalPrice = 0;
                foreach($decodedPhpArray as $item) { 
                    $id = $item['id'];
                    $sql = "SELECT * FROM product where id = '$id' "; 
                    $result = $conn->query($sql);
                    if (mysqli_num_rows($result)) {
                    while($row = mysqli_fetch_assoc($result)) {  
                        $currentPrice = substr($row['price'], 2);
                        $finalPrice = $currentPrice + $finalPrice; 
                        ?>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="<?php echo $row['image']; ?>">
                                <div>
                                    <p><?php echo $row['name']; ?></p>
                                    <small>Price: <?php echo $row['price']; ?></small>
                                    <br>
                                    <!-- <a href="">Remove</a> -->
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="<?php echo $item['qty']; ?>"></td>
                        <td class="finalprice"><?php echo $row['price']; ?></td>
                    </tr>
            <?php 
                    }
                }
            } 
            ?>  
        </table>

        <div class="total-price">

            <table>
                <tr>
                    <td>Total</td>
                    <td>Rs.<?php echo $finalPrice; ?></td>
                </tr>
            </table>
        </div>
        <div class="total-price">
            <button class="btn">Buy</button>
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

        function getCookie(name) {
            let cookie = {};
            document.cookie.split(';').forEach(function(el) {
                let [k, v] = el.split('=');
                cookie[k.trim()] = v;
            })
            return cookie[name];
        }
    </script>

</body>

</html>