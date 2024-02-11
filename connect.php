<?php
    $con=new mysqli('localhost','root','','book_db');

    if($con){
        // echo "connection successfull";
    }else{
        die(mysqli_error($con));
    }
?>