<?php
    $_server = "localhost";
    $user = "root";
    $password = "reynaldo2588";
    $dbname = "coffeelogin_database";
    $conn = mysqli_connect($_server,$user,$password,$dbname);
    $sql = "create table barang(ID int NOT NULL AUTO_INCREMENT, kode varchar(10), nama varchar(100),harga varchar(100), stock varchar(250), PRIMARY KEY (ID))";
    if(!mysqli_query($conn,$sql))echo "Error creating table:".mysqli_error($conn);
    if(!$conn)die("Connection failed:".mysqli_connect_error());
    else echo "Connected successfully";
    mysqli_close($conn);
?>