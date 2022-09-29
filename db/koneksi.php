<?php
    error_reporting(0);

    $conn = mysqli_connect('localhost', 'root', '','db_goals');

    if($conn){
        // echo "berhasil";
    }else{
        echo "gagal";
    }