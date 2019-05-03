
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
    <title>Transfer Page</title>
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


          <div class = "header"><h1><p class ="a">Transfer</p> </h1> </div>
    <form class = "f1" method = "post" action ="index.php" >
    
    
    
    <p class ="c">Transfer Ke Rekening Sini Ya!</p>

    <p class ="d"> BCA A/N Reynaldo Fang </p>
    <p class ="c"> 6040762114 </p>
    <p class ="d"> Nobu A/N Robin Ray </p>
    <p class ="c"> 80110017941 </p> 
    


    
    
    <button class = "btn" type ="submit" name ="next" >Next</button>
    </form>
    


    

    
    
    
    
</body>