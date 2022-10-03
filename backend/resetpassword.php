<?php

include('./dbconnection.php');

if(isset($_POST['code']) && isset($_POST['email']) && isset($_POST['password']) ){ 
  $to = '';
    if(isset($_POST['email'])){
        $to = $_POST['email'];
        $sql = "SELECT * FROM customer WHERE email like '$to'";
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $from = "cara@gmail.com"; 
        $password = $_POST['password']; 
        echo $_POST['code'];
        if($count == 1 && $row['passwordresetcode'] == $_POST['code']){
            $sql = "UPDATE customer SET `password` = '$password' WHERE email like '$to' ";  
            echo "$sql";
            if(mysqli_query($conn, $sql)){  
                echo "<script>alert('Password reset successfully, Please Login !!'); document.location='/CARA/account.php'</script>"; 
            } else{
                echo "ERROR:  $sql. ". mysqli_error($conn);
            } 
            echo json_encode(array('status' => 'success'));
        }else{
            echo json_encode(array('status' => 'error'));
        }
    }
} else {
  echo json_encode(array('status' => 'error'));
}
