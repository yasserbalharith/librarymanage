<?php 

	include("../../config/db_login.php");
	if(isset($_POST["register"]))
	{
        $name = $_POST["name"];
        $address = $_POST["address"];
        $email = $_POST["email"];
		$mem_type = $_POST["mem_type"];
		$password = $_POST['password'];
		$re_enterPassword = $_POST["rePassword"];
	
		//matching the passwords
		if( $password == $re_enterPassword)
		{
		
		//inserting data into Student table after getting through POST method
		$query = "INSERT into members (username,password, name ,address , member_type) 
        values ('$email','$password','$name','$address','$mem_type');";
		$result = mysqli_query($connection, $query);
		
		$query1 = "INSERT into login_details (username,password) 
        values ('$email','$password');";
		$result1 = mysqli_query($connection, $query1);
	
	echo "<script>alert('Registered Successfully, Redirecting to Login Page')
			window.location.href='../Public/login.php';
			</script>";
	}
	else
	{
	echo "<script>alert('Passwords Did not matched, try again!!')
			window.location.href='../Public/register.php';
			</script>";
	}
	}
	
	else
	{
		
		echo "<script>alert('Registration Failed, Try Again!')
		window.location.href='../Public/register.php';
			</script>";
	}		
?>