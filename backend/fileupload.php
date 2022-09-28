<?php   
if(!empty($_FILES['uploaded_file']))
  {
    $path = "../images/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        echo "<script>alert('The file ".  basename( $_FILES['uploaded_file']['name']). 
        " has been uploaded. '); document.location='/CARA/admindashboard.php'</script>"; 
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
