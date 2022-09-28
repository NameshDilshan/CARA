<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Dashboard - Cara</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <style>
        .center {
            height: 200px;
            position: relative;
            border: 3px solid green;
        } 
        .center div {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 100px; 
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body> 


<div style="background: radial-gradient(#fff,#7ec9d6); height: 500px; margin-top: 10px;">
    <div class="container" >
        <div class="row center"> 
            <div class="column">
                <form enctype="multipart/form-data" action="backend/fileupload.php" method="POST">
                    <p style="text-align: center;">Upload your file</p>
                    <input type="file" id="uploaded_file" name="uploaded_file"></input>
                    <br />
                    <input type="submit" value="Upload"></input>
                </form>
            </div>
        </div>
    </div>
</div>


   

</body> 
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
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
        function register() {
            RegForm.style.transform = "translateX(0PX)";
            LoginForm.style.transform = "translateX(0PX)";
            Indicator.style.transform = "translateX(100PX)";
        }
        function login() {
            RegForm.style.transform = "translateX(300PX)";
            LoginForm.style.transform = "translateX(300PX)";
            Indicator.style.transform = "translateX(0PX)";
        } 
    </script>
</body>
</html>