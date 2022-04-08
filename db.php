<?php
    $servername='localhost:3307';
    $username='root';
    $password="";
    
    $conn=mysqli_connect($servername,$username,$password);

    if(!$conn){

        die("connection failed".mysqli_connect_error());
    }

     
?>