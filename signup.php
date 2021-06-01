<?php
session_start();
if ($_SESSION['customer']){
  header('Location: profile.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<title>Sign Up Form</title>

</head>
<body>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	font-family: 'Montserrat', sans-serif;
}

body{font-family: 'Poppins', sans-serif;
	background-color: #1a1a1a;
}
.navbar{
font-family: 'Poppins', sans-serif;
  border-radius:0px 0px 20px 20px;
}

.wrapper{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.registration_form{
	background: #000000;
	padding: 25px;
	border-radius: 5px;
	width: 400px;
}

.registration_form .title{
	text-align: center;
	font-size: 20px;
	text-transform: uppercase;
	color: white;
	letter-spacing: 5px;
	font-weight: 700;
}

.form_wrap{
	margin-top: 35px;
}

.form_wrap .input_wrap{
	margin-bottom: 15px;
}

.form_wrap .input_wrap:last-child{
	margin-bottom: 0;
}

.form_wrap .input_wrap label{
	display: block;
	margin-bottom: 3px;
	color: white;
}

.form_wrap .input_grp{
	display: flex;
	justify-content: space-between;
}

.form_wrap .input_grp  input[type="text"]{
	width: 165px;
}

.form_wrap  input[type="text"]{
	width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
}

.form_wrap  input[type="password"]:focus{
	border-color: #000000;
}

.form_wrap .input_grp  input[type="password"]{
	width: 165px;
}

.form_wrap  input[type="password"]{
	width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
}
.form_wrap  input[type="email"]:focus{
	border-color: #000000;
}

.form_wrap .input_grp  input[type="email"]{
	width: 165px;
}

.form_wrap  input[type="email"]{
	width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
}


.form_wrap ul{
	background: #fff;
	padding: 8px 10px;
	border-radius: 3px;
	display: flex;
	justify-content: center;
}

.form_wrap ul li:first-child{
	margin-right: 15px;
}

.form_wrap ul .radio_wrap{
	position: relative;
	margin-bottom: 0;
}

.form_wrap ul .radio_wrap .input_radio{
	position: absolute;
	top: 0;
	right: 0;
	opacity: 0;
}

.form_wrap ul .radio_wrap span{
	display: inline-block;
	font-size: 14px;
	padding: 3px 20px;
	border-radius: 3px;
	color: black;
}

.form_wrap .input_radio:checked ~ span{
	background: #FF4500;
}

.form_wrap .submit_btn{
	width: 100%;
	background: white;
	padding: 10px;
	border: 0;
	border-radius: 3px;
	text-transform: uppercase;
	letter-spacing: 3px;
	cursor: pointer;
}

.carousel-item {
    height: 24rem;
    background-color:#1a1a1a;
    color: #fff;
  }
  .grid-container {
        display: grid;
        grid-gap: 1rem;
        padding: 1rem;
    }

.grid-item {
  color: rgba(255, 255, 255, 0.9);
  text-align: center;
  padding: 20px;
  font-size: 30px;
}

.item1 {
  grid-column: 1 / span 2;
  grid-row: 1;
}

.item2 {
  grid-column: 3;
  grid-row: 1 / span 2;
}

.item5 {
  grid-column: 1 / span 3;
  grid-row: 3;
}

.download-button{
  color: white;
}

.footer-text{
  font-size: 1rem;
  color: white;
}
.footer-link{
  color: white;
  opacity: 0.5;
  font-size: 1rem;
}
.footer-link:hover{
  color: white;
  opacity: 1.0;
}
.text {
	margin-right: 200px;
}

.nav-text {
	padding-left: 30px;
}

.navbar-brand {
	font-size: 2rem;
	padding-left: 20px;

}

.nav-item {
	text-align: center;
	padding: 3px;
	font-size: 20px;
}

.form-control {
	margin-left: 20px;
}

.fa {
	color: Black;
	font-size: 25px;
	text-align: center;
	padding-right: 10px;
}

.fa:hover {
	color: black;
	box-shadow: 0 5px 15px black;
}

.text {
	margin-right: 20px;
}
.msg {
	border: 2px solid #9c1616;
	border-radius: 3px;
	padding: 10px;
	text-align: center;
	color:White;
	font-weight: bold;
	margin-top: 10px;
}
	</style>
	<header>
    <nav class="navbar navbar-expand-md navbar-dark justify-content-between" style="background-color: #9c1616;">
      <a class="navbar-brand" href="index.php">EDA</a>
      <div>
        <form class="form-inline justify-content-center" style="text-align: center;">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 300px; height:25px;">
          <button class="btn btn-inline my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true" title="Search"></i></button>
        </form>

        <ul class="navbar-nav ml-auto text">
          <li class="nav-text">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-text">
            <a class="nav-link" href="">Products</a>
          </li>
          <li class="nav-text">
            <a class="nav-link" href="Contacts.php">Contacts</a>
          </li>
        </ul>

      </div>

      <div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a class="nav-link" href="" title="Shopping cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php" title="Sign in"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" title="Log in"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Registration Form
		</div>

		<form action="vendor/reg.php" method="post">
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname">
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lname">
					</div>
				</div>

					<div class="input_wrap">
						<label for="username">Username</label>
						<input type="text" id="username" name="username">
					</div>
				<div class="input_wrap">
					<label for="email">Email Address</label>
					<input type="email" id="email" name="email">
				</div>
				<div class="input_wrap">
					<label for="phone">Phone Number</label>
					<input type="text" id="phone" name="phone">
				</div>
				<div class="input_wrap">
		<label for="password">Password</label>
		<input type="password" id="password" placeholder="********" name="password" >
	</div>
	<div class="input_wrap">
<label for="password">Repeat a Password</label>
<input type="password" id="password" placeholder="********" name="password2">
</div>
				<div class="input_wrap">
					<button type="submit" value="Register Now" class="submit_btn">Register Now</button>
				</div>
			</div>
      <?php
      if ($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';}
unset($_SESSION['message']);
?>

		</form>

	</div>
</div>

<footer>
      <div class="grid-container" style="height:36xrem;background-image:linear-gradient(#9c1616,#813131)">

  <div class="grid-item item1">
      <p class="footer-text">For Client</p>
      <div class="container">
        <a href="#" class="footer-link">Order</a><br>
        <a href="#" class="footer-link">Shipping</a><br>
        <a href="payment.php" class="footer-link">Payment Method</a>
      </div>
    </div>

  <div class="grid-item item2">
    <p>Download App</p>
    <div class="container">
    <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-google-play"></i><p style="padding:10px 10px">Google Play</p></button><br>
    <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-apple"></i><p style="padding:10px 10px">App Store</p></button>
  </div>
</div>

  <div class="grid-item item3">
    <p class="footer-text">Company</p>
    <div class="container">
      <a href="#" class="footer-link">About us</a><br>
      <a href="#" class="footer-link">News</a><br>
      <a href="#" class="footer-link">Manager</a>
    </div>
  </div>
  <div class="grid-item item4">
    <p class="footer-text">Our social net</p>
    <div class="container">
      <a href="https://www.facebook.com" class="footer-link">Facebook</a><br>
      <a href="https://www.instagram.com" class="footer-link">Instagram</a><br>
      <a href="https://www.whatsapp.com" class="footer-link">Whatsapp</a>
    </div>
  </div>
  <div class="grid-item item5"><i class="fab fa-cc-visa" style="padding:100px 5px 0 0"></i><i class="fab fa-cc-mastercard" style="padding:100px 0 0 5px"></i></div>
      </div>

    </footer>


</body>
</html>
