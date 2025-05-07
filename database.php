<?php

    $connect = mysqli_connect("localhost","root","","") or die("error");

    if($connect){
        echo "connected your databade";
    }

?>