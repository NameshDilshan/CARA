<?php

include('./dbconnection.php');

if(isset($_POST['email'])){ 
  $to = '';
    if(isset($_POST['email'])){
        $to = $_POST['email'];
        $sql = "SELECT * FROM customer WHERE email like '$to'";
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $from = "cara@gmail.com";
        if($count == 1){
            $randomnumber = rand();
            $sql = "UPDATE customer SET `passwordresetcode` = '$randomnumber'  WHERE email like '$to' ";  
            if(mysqli_query($conn, $sql)){ 
                $subject = 'Email from CARA'; 
                $url = "http://localhost/CARA/resetpassword.php?code=$randomnumber&email=$to";
                $message = "
                        <html>
                            <head>
                                <title>CARA Reset Password</title>
                            </head>
                            <body>
                                <p><b>Your Link to reset Password :</b><a href='.$url.'>Forget Password Link </a></p>                      
                            </body>
                        </html>"; 
                $headers = "From: {$from} Content-type: text/html; charset=utf-8 "; 
                mail($to, $subject, $message, $headers);  
                echo "<script>alert('Password reset code sent to email successfully, Please Login !!'); document.location='/CARA/account.php'</script>";
            } else{
                echo "ERROR:  $sql. ". mysqli_error($conn);
            }
            mysqli_close($conn);
            echo json_encode(array('status' => 'success'));
        }else{
            echo json_encode(array('status' => 'error'));
        }
    }
} else {
  echo json_encode(array('status' => 'error'));
}
