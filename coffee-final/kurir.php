
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Courier System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style2.css" type="text/css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img  src = images/logo.png class ="imagesize"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item active"><a href="utama.php" class="nav-link">Order</a></li>
              <?php if (isset($_SESSION['username'])) { ?>
							<li class="nav-item"> <a class="nav-link"><?php echo $_SESSION['username'] ?></a></li>
							<li class="nav-item"> <a href = "logout.php" class="nav-link">Logout</a></li>
						<?php } else {?>
							<li class="nav-item"> <a href ="login.php" class="nav-link">Login </a> </li>
						<?php } ?>
	        </ul>
	      </div>
		  </div>
	  </nav>


          <div class = "header"><h1><p class ="a">COURIER</p> </h1> </div>
    <form class = "f1" method = "post" action ="" >
    
    
    
    <p class ="c"><i>You'll need these to sign in to your Rerich Cafe Account.</i></p>
    
    <div class = "input-group">
    <label>Nama Penerima <input type ="text" required name = "username" placeholder = "Nama Penerima" oninvalid="this.setCustomValidity('Please Field Your Username')" oninput="this.setCustomValidity('')"  ></label> 
    <?php if (isset($_POST['register'])) echo $errorusername ; ?>
    </div>
    <div class = "input-group">
    <label>Alamat : <input type ="text" required name = "password" placeholder = "Alamat" oninvalid="this.setCustomValidity('Please Field Your Password')" oninput="this.setCustomValidity('')" ></p>
    </label>
    </div>
    
    <div class = "input-group">
    <label>No Telepon  :&nbsp &nbsp &nbsp  <input type = "text" required name = "telepon" placeholder = "Email" oninvalid="this.setCustomValidity('Please Field Your Email')" oninput="this.setCustomValidity('')"></p> <br>
    </label>
    </div>

    <div class = "input-group">
    <label>Choose Payment:
    <input type = "radio" required name = "payment" value = "cod" >COD</input>
    <input type="radio" name="payment" value="transfer">Transfer</input>
    </label>
    </div>

    
    <div class = "input-group">
    <button class = "btn" type ="submit" name ="pesan" >Pesan</button>
    </div>
    
    <div class = "input-group"
    </form>

    <?php

    $message = "Berhasil Terbeli , Silahkan Datang Kembali !";
    if(isset($_POST['payment'])){
        if($_POST['payment'] == "cod"){
            echo "<meta http-equiv = 'refresh' content = '0.1;url=http://localhost/Final_Project/coffee-final/index.php'><script type='text/javascript'>alert('$message');</script>";
        }elseif($_POST['payment'] == "transfer"){
            echo "<meta http-equiv = 'refresh' content = '0.1;url=http://localhost/Final_Project/coffee-final/transfer.php'>";
        }
    }
    ?>
    <div class = "input-group"
    <form action="utama.php" method="">
    <button class ="btn" type="submit" value ="Back"> Back </button>
    </form>
    
    </div>
    
    
    
    
</body>