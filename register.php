<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="../css/style.css">
	
	<body style = " color:white;   background-image: url(../Imgs/bg.jpg);">
	<div class = "form-group container">
		<div class = "row">
			<h1 class = "col-md-12">Sign Up Page</h1>
		</div>
		<form action="../php/register_action.php" method="POST">
		<div class = "row">
			<div class = "col-md-12">
				<label>Enter Your Name
					<input type = "text" style  = "padding-right: 14.3pc;" name = "name" class = "form-control " placeholder = "Your Full Name" required/>
				</label>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-12">
				<label>Address
					<input type = "text"  name = "address" class = "form-control col-md-12" placeholder = "Your Address Please?" required/ >
				</label>
				<label>Email-ID
					<input type = "email" name = "email" class = "form-control col-md-12" placeholder = "Your Email-ID" required/>
				</label>
				</div>
		</div>
		<div class = "row">
				<div class = "col-md-12">
		<label>Member Type (Guest or Permanent)
						<label style = "padding-right: 20.8pc;" class="form-control  radio-inline" ><input  type="radio" value = "permanent" name="mem_type" >Permanent</label>
				<label style = "padding-right: 20.8pc;" class="form-control radio-inline"  ><input  type="radio" value = "guest" name="mem_type" checked>Guest</label>
					</label>
				
				</div>
		</div>		
			<div class = "row">
				<div class = "col-md-12">
					<label>Password
						<input type = "password" name = "password" class = "form-control col-md-12" placeholder = "Your Password" required/>
					</label>
					<label>Re-enter Password
						<input type = "password" name = "rePassword" class = "form-control col-md-12" placeholder = "Re-enter Password" required/>
					</label>
					
				</div>
		</div>
			<input type = "submit" name = "register" class = " btn btn-secondary col-md-2 mt-4" value = "Register"/>
		</form>

</div>

  </body>
</html>