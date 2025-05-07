<?php

    include './database.php';

    if(isset($_REQUEST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
          

    $insert = "INSERT INTO contact_responses VALUES('$name','$email','$number','$subject','$message')";
    $execute = mysqli_query($connect, $insert);
    }

if ($execute) {
    echo "<script> alert('data insert in database') </script>";
}else{
    echo "<script> alert('error') </script>";
}

?>