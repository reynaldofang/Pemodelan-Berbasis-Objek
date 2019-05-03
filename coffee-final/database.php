<?php
    $_server = "localhost";
    $user = "root";
    $password = "reynaldo2588";
    $dbname = "coffeelogin_database";
    $conn = mysqli_connect($_server,$user,$password,$dbname);
    $sql = "create table admin(ID int NOT NULL AUTO_INCREMENT, username varchar(25), password varchar(30),email varchar(50), lastlogin datetime, PRIMARY KEY (ID))";
    if(!mysqli_query($conn,$sql))echo "Error creating table:".mysqli_error($conn);
    if(!$conn)die("Connection failed:".mysqli_connect_error());
    else echo "Connected successfully";
    mysqli_close($conn);
?>