<?php
    $host="localhost:3308";
    $user="root";
    $password="";
    $db="modul3";
    
    $connect = mysqli_connect($host,$user,$password,$db);
    if (!$connect){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>