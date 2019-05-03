
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
    <title>Order System</title>
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
	  
  
          <br><br><br> <h2 class="mb-3 "><center>WELCOME TO RERICH CAFE ORDER SYSTEM</center></h2>
<?php 
require_once "product-gallery.php";
?>
<div class="clear-float"></div>
<div id="shopping-cart">

<center><div class="txt-heading">Shopping Cart <a id="btnEmpty" class="cart-action" onClick="cartAction('empty','');"></center>
<center><input type="submit" value="Empty Cart"> </center>
<div id="cart-item">
        <?php 
		require_once "ajax-action.php";
        ?>
        </div>

</div>
</div>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function cartAction(action, product_code) {
    var queryString = "";
    if (action != "") {
        switch (action) {
        case "add":
            queryString = 'action=' + action + '&code=' + product_code
                    + '&quantity=' + $("#qty_" + product_code).val();
            break;
        case "remove":
            queryString = 'action=' + action + '&code=' + product_code;
            break;
        case "empty":
            queryString = 'action=' + action;
            break;
        }
    }
    jQuery.ajax({
        url : "ajax-action.php",
        data : queryString,
        type : "POST",
        success : function(data) {
            $("#cart-item").html(data);
            if (action == "add") {
                $("#add_" + product_code + " img").attr("src",
                        "gambar/icon-check.png");
                $("#add_" + product_code).attr("onclick", "");
            }
        },
        error : function() {
        }
    });
}
</script>

    
  </body>
</html>`