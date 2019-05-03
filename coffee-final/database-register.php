<html>

<head>
<div id = "example3">
<link rel="stylesheet" href="style2.css">
</head>

<h1 class = "data1">Database Register ReRich Coffee</h1>  
<?php
$_server = "localhost";
$user = "root";
$password = "reynaldo2588";
$dbname = "coffeelogin_database";

$conn = mysqli_connect($_server, $user, $password, $dbname);

$sql = "SELECT * FROM login";




if (!mysqli_query($conn, $sql)) echo "Error creating table : " . mysqli_error($conn);
else {
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' align = 'center'><tr><th>ID</th><th>USERNAME</th><th>PASSWORD</th><th>Email</th><th>LAST_LOGIN</th><th>Delete</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>" . $row["ID"] . "</td>
            <td>" . $row["username"] . "</td>
            <td>" . $row["password"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["lastlogin"] . "</td>
            <td><a href='delete.php?ID=" . $row["ID"] . "'><button>DELETE</button></a></td>
            </tr>";
        }
        echo "</table>";
    } else echo "0 results";
}
?>

<center>
<form action="process-admin.php" method="">
    <button class ="btn2" type="submit" value ="Back"> Back </button>
</form>
</center>


</body>
</div>
</html>