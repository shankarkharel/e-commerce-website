<!DOCTYPE html>
<html>
<head>
	<title> SignUp Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="app.php" method ="POST">
				<img src="img/ab3c0a16-6f14-4817-a30b-443273de911d.svg">
				<div ></div>
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div name">
           		   		<h5>Username</h5>
           		   		<input type="name" name = "name" class="input">
           		   </div>
					  
					 
           		</div>

				   <div class="input-div pass">
					<div class="i"> 
						 <i class="fas far fa-envelope"></i>
					</div>
					<div class="div">
						 <h5>Email</h5>
						 <input type="email"  name = "mail" class="input">
				 </div>
			  </div>
			
			
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name = "pass" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Sign Up">
				<input type="button" onclick="redirection()"  class="btn" value="  Not first time ? LogIn! ">

            </form>
        </div>
    </div>
	<script type="text/javascript" src="./js/main.js"></script>

	<script>
function redirection() {
		window.location = `login.php`;
}
</script>

	 <!-- <?php include "app.php"?> -->


</body>
</html>
