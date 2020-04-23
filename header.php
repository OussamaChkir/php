<!DOCTYPE html>
<html lang="en">
<?php
//include('config/db_connect.php'); 
//$con=new PDO("mysql:host=localhost;dbname=projectA", 'root', '');
session_start(); 
$loginn = $_SESSION['login'] ?? 'Guest';

?>
  <head>
    <title>Pizza Delicous - by Oussama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
    <style>
    .form{
    max-width: 460px;
    margin: 80px auto;
    padding: 20px;
background-color:rgba(0,0,0,0.6);

}
.form2{
    max-width: 1000px;
    margin: 80px auto;
    padding: 100px;
background-color:rgba(0,0,0,0.6);

}
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <?php
                 if(isset($_SESSION['id']) && $_SESSION['admin']!=1){
                 ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle"></i> <?php echo $loginn ;?></a>
                
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="cart.php" class="dropdown-item"><i class="fa fa-shopping-basket "></i> cart</a>
              <a href="edit_profil.php" class="dropdown-item"><i class="fa fa-pencil"></i> edit Profil</a>
              <a href="logout.php" class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
            </li>
            <?php
                 } elseif(isset($_SESSION['id']) && $_SESSION['admin']==1){
                 ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle"></i> <?php echo $loginn ;?></a>
                
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="list_user.php" class="dropdown-item"><i class="fa fa-users"></i> list of users</a>
              <a href="list_pizza.php" class="dropdown-item"><i class="fa fa-file-text"></i> list of pizza</a>
              <a href="edit_profil.php" class="dropdown-item"><i class="fa fa-pencil"></i> edit Profil</a>
              <a href="logout.php" class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
            </li>
            <?php
                 }else{
                      ?>
           <li class="nav-item"><a href="register.php" class="nav-link"><i class="fa fa-user"></i> Sign Up</a></li>
           <li class="nav-item"><a href="login.php" class="nav-link"><i class="fa fa-sign-in"></i> Login</a></li>
            <?php
                       }
                 ?>               
	        </ul>
	      </div>
		  </div>
	  </nav>
    
    <!-- END nav -->