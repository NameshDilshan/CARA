<?php

if((isset($_POST['name']))&&(isset($_POST['email'])&&$_POST['message']!="")){ 
  $to = 'nameshdilshan@gmail.com';
  $subject = 'Email from CARA';
  $inputmessage = $_POST['message'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = '
        <html>
            <head>
                <title>Email from My Cash</title>
            </head>
            <body>
                <p><b>Name :</b> '.$name.'</p>
                <p><b>Email :</b> '.$email.'</p>
                <p><b>Email :</b>' .nl2br(strip_tags($inputmessage)). '</p>                       
            </body>
        </html>'; 
$headers = "From: {$email} Content-type: text/html; charset=utf-8 "; 
mail($to, $subject, $message, $headers);

  echo json_encode(array('status' => 'success'));
} else {
  echo json_encode(array('status' => 'error'));
}
