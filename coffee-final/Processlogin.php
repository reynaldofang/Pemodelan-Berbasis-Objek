<?php
    session_start();
?>
<?php
if (isset($_POST['login'])){
    $_server = "localhost";
    $user = "root";
    $password = "reynaldo2588";
    $dbname = "coffeelogin_database";
    $username = $_POST['username'];
    $_pass = $_POST['password'];
    $last_login = date("Y-m-d H:i:s");
    $arrASCII = array(
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    );
    
    $errorusername = "";
    
    
    $conn = mysqli_connect($_server,$user,$password,$dbname);
    
    $sql = "SELECT username, password FROM login where username ='$username'";
    



    $result = mysqli_query($conn,$sql);
    
    
    
    if(mysqli_num_rows($result) != 0) {
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
        
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        



        if($row['password'] !== $_pass ){ ?>
            UNSUCCESSFUL LOGIN!
            <script>
            setTimeout(() => {
                var protocol = location.protocol;
                var slashes = protocol.concat("//");
                var host = slashes.concat(window.location.hostname);
                window.location = host+'/Final_Project/coffee-final/login.php';
            }, 2000);
            </script>          
            <?php } else { ?>
                <p>SUCCESS LOGIN!</p>
                <script>
                setTimeout(() => {
                    var protocol = location.protocol;
                    var slashes = protocol.concat("//");
                    var host = slashes.concat(window.location.hostname);
                    window.location = host+'/Final_Project/coffee-final/index.php';
                }, 2000);
                </script>    
                <?php } 
            }
            else  { ?>
                <p>Tidak Ada Username ! Mohon Register Dulu!</p>
                <script>
                setTimeout(() => {
                    var protocol = location.protocol;
                    var slashes = protocol.concat("//");
                    var host = slashes.concat(window.location.hostname);
                    window.location = host+'/Final_Project/coffee-final/login.php';
                }, 2000);
                </script>    
                <?php } 
                
            }
            ?>