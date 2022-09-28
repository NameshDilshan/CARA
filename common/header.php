<div class="container">
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
                <?php
                if (!empty($_COOKIE['userrole']) && ($_COOKIE['userrole']) == 'ADMIN'){
                   echo " <li><a href='admindashboard.php'>Admin Dashboard</a></li>  ";
                } 
                 
                if (!empty($_COOKIE['name'])){
                   echo " <li><a href='./backend/logout.php'>Logout</a></li> ";
                }else{
                    echo "  <li><a href='account.php'>Account</a></li>";
                } ?> 
            </ul>
        </nav>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
</div>