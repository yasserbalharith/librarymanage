<!doctype html>
<html lang="en">
  <head>
    <title>Welcome</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="../css/style.css">
	
	<body style = " color:white;   background-image: url(../Imgs/bg.jpg);">
	
	
	<div class = "form-group container">
	<div class = "row">
	<h1 class = "col-md-12">Login Page</h1>
<form action="../php/login_action.php" method="POST" onsubmit="return validateForm()">
<label>E-mail
<input type = "email" name = "email" class = "form-control col-md-12" placeholder = "Enter Email ID" required/>
</label>
<label>Password
	<input type = "password" name = "password" class = "form-control col-md-12" placeholder = "Enter Password" required/>
	</label>
	<input type = "submit" name = "login" class = " btn btn-secondary col-md-4 mt-4" value = "Login"/>
</form>
</div>
</div>

 
</body>
</html>