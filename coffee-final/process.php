<?php
if (isset($_POST['register'])){
    $_server = "localhost";
    $user = "root";
    $password = "reynaldo2588";
    $dbname = "coffeelogin_database";
    $username = $_POST['username'];
    $_pass = $_POST['password'];
    $_email = $_POST['email'];
    
    
    $last_login = date("Y-m-d H:i:s");
    
    $arrASCII = array(
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    );
    
    
    
    $errorusername = "";
    
    
    $conn = mysqli_connect($_server,$user,$password,$dbname);
    
    $sql = "SELECT username FROM login where username ='$username'";
    
    $result = mysqli_query($conn,$sql);
    
    
    
    if(mysqli_num_rows($result) == 0) {
        $arrpass = str_split($_pass);
        $key = 4;
        
        for ($i = 0; $i < count($arrpass); $i++) {
            for ($j = 0; $j < count($arrASCII); $j++) {
                if ($arrpass[$i] === $arrASCII[$j]) {
                    if ($j + $key > count($arrASCII)) $key -= 1;
                    $arrpass[$i] = $arrASCII[($j + $key) % (count($arrASCII) - 1)];
                    break;
                    
                }
            }
        }
        
        $_pass = implode("", $arrpass);
        
        $sql = "SELECT * from login order by id desc limit 1";    
        


        if (!mysqli_query($conn, $sql)) echo "Error creating table : " . mysqli_error($conn);
        else {
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $idnext = (int)$row["ID"] + 1;
            }else {
                $idNext = 1;
            }
            
            $sql = "INSERT INTO login values('$idnext', '$username', '$_pass','$_email' , '$last_login')";
            if (!mysqli_query($conn, $sql)) echo "Error creating table : " . mysqli_error($conn);
            else echo "<script type='text/javascript'> alert('Update successful with id : " . $idnext . "');</script>";
        }
    }
    else {
        $errorusername = "Maaf, Username Sudah terpakai , Terima Kasih";
    }
    
}
?>

