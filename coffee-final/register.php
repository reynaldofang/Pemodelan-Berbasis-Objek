<html>
<head>
<div id="example1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<br>
<title> Admin Register - Rerich Café Coffee </title>

<link rel="stylesheet" href="style2.css" type="text/css">

<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/form-elements.css">
<link rel="stylesheet" href="assets/css/style.css">



<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
    </head>
    <body>
    <div class = "header"><h1><p class ="a">Admin Create Rerich Café Account</p> </h1> </div>
    <form class = "f1" method = "post" action ="" >
    
    <?php include('process.php') ?>
    
    <p class ="c"><i>You'll need these to sign in to your Rerich Cafe Account.</i></p>
    
    <div class = "input-group">
    <label>Username :  <input type ="text" required name = "username" placeholder = "Username" oninvalid="this.setCustomValidity('Please Field Your Username')" oninput="this.setCustomValidity('')"  ></label> 
    <?php if (isset($_POST['register'])) echo $errorusername ; ?>
    </div>
    <div class = "input-group">
    <label>Password : <input type ="text" required name = "password" placeholder = "Password" oninvalid="this.setCustomValidity('Please Field Your Password')" oninput="this.setCustomValidity('')" ></p>
    </label>
    </div>
    
    <div class = "input-group">
    <label> Email  :&nbsp &nbsp &nbsp  <input type = "text" required name = "email" placeholder = "Email" oninvalid="this.setCustomValidity('Please Field Your Email')" oninput="this.setCustomValidity('')"></p> <br>
    </label>
    </div>
    
    <div class = "input-group">
    <button class = "btn" type ="submit" name ="register" >Register</button>
    </div>
    
    <div class = "input-group">
    </form>
    
    <form action="login.php" method="">
    <button class ="btn" type="submit" value ="Back"> Back </button>
    </form>
    
    </div>
    
    
    
    
</body>
</div>
    
    
    