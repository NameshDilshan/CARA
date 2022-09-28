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
                if(!empty($_COOKIE['cart'])){ 
                    $cart = $_COOKIE['cart']; 
                $decodedPhpArray = json_decode($cart, true);
                $ids = ""; 
                $finalPrice = 0;
                foreach($decodedPhpArray as $item) { 
                    $id = '';
                    if(isset($item['id'])){ $id = $item['id']; }
                   
                    $sql = "SELECT * FROM product where id = '$id' "; 
                    $result = $conn->query($sql);
                    if (mysqli_num_rows($result)) {
                    while($row = mysqli_fetch_assoc($result)) {  
                        $currentPrice = substr($row['price'], 2);
                        $multipliedCurrentPrice = $currentPrice * $item['qty'];
                        $finalPrice = $multipliedCurrentPrice + $finalPrice;  
                        ?>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="<?php echo $row['image']; ?>">
                                <div>
                                    <p><?php echo $row['name']; ?></p>
                                    <small>Price: Rs. <?php echo $currentPrice; ?></small>
                                    <br>
                                    <button onclick="removeProduct(<?php echo $row['id']; ?>)" class="btn" style="border-radius: 5px;">Remove</button>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" id="changeqtyId<?php echo $row['id']; ?>"  onchange="changeqty(<?php echo $row['id']; ?>, this, <?php echo $currentPrice; ?>)" value="<?php echo $item['qty']; ?>"></td>
                        <td class="finalprice" id="finalPrice<?php echo $row['id']; ?>" >Rs. <?php echo  $multipliedCurrentPrice; ?></td>
                    </tr>
                 
            <?php 
            
        }
                    }
                }
            } 
            ?>  
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td id = "finalTotal">Rs.<?php 
                    if(!empty($finalPrice)){
                        echo $finalPrice;
                    }else{
                        echo "0.00";
                    }
                     ?></td>
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
    function removeProduct(id){
        var previouscart = getCookie("cart");
        if(previouscart != null){
            previouscart = JSON.parse(previouscart); 
        }else{
            previouscart = [];
        }
        var finalCart = JSON.stringify(previouscart.filter(previouscart => previouscart.id !== ''+id+''));
        console.log(previouscart);
        setCookie("cart", finalCart, 30);
        window.location.href = "/CARA/cart.php";
    }

    function changeqty(id, e, currentPrice){  
        // Set Quantity item
        if(document.getElementById('changeqtyId'+ id).value <= 0){
            document.getElementById('changeqtyId'+ id).value = 0;
        } 

        // Set Current Price
        if(e.value * currentPrice >= 0){
            document.getElementById('finalPrice'+ id).innerHTML = "Rs. "+ (e.value * currentPrice);
        }else{
            document.getElementById('finalPrice'+ id).innerHTML = "Rs. 0";
        }

        //Set Total Price
        var totalPrice = 0;
        Array.from(document.getElementsByClassName('finalprice')).forEach(
            function (element, index, array){
                totalPrice = totalPrice + parseFloat(element.innerHTML.substring(3));
            }
        );
        document.getElementById('finalTotal').innerHTML = "Rs. "+ totalPrice;
    } 
    </script> 
</body> 
</html>