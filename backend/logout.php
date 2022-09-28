<?php
    unset($_COOKIE['id']); 
    setcookie('id', null, -1, '/'); 

    unset($_COOKIE['name']); 
    setcookie('name', null, -1, '/'); 

    unset($_COOKIE['email']); 
    setcookie('email', null, -1, '/'); 

    unset($_COOKIE['password']); 
    setcookie('password', null, -1, '/'); 

    unset($_COOKIE['userrole']); 
    setcookie('userrole', null, -1, '/'); 

    echo "<script>alert(' Logged out Successfully!!'); document.location='/CARA/account.php'</script>";