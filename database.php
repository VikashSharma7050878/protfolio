<?php

    $connect = mysqli_connect("localhost","root","", "v_portfolio") or die("error");

    if($connect){
        echo "connected your databade";
    }

?>