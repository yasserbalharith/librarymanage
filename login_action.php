<?php
	session_start();
	include("../../config/db_login.php");
	
	if(isset($_POST["login"]))
	{
	$email = $_POST["email"];

	$password = $_POST["password"];

  $query = "SELECT * from login_details where username = '".$email."' ";
	
	
	$results = mysqli_query($connection, $query);
	if(mysqli_num_rows($results)>0)
	{
		while($row = mysqli_fetch_assoc($results))
		{
			$email =  $row["username"];
			$pw = $row["password"];
			
			if($password == $pw)
			{
				//storing session variable to later use
			$_SESSION["id"] = $email;
				echo "<script>alert('Redirecting')
				
			</script>";
			header("location:../public/books.php");
			
			}
			
			else if ($pw != $password || $password == "")
			{
					echo "<script>alert('Passwords Did not matched, try again!!')
			window.location.href='../Public/login.php';
			</script>";
			
			}
			
		}
	}
	else 
	{
	echo "wrong details try again";
	echo "<script>alert('Passwords Did not matched, try again!!')
			window.location.href='../Public/login.php';
			</script>";
			
		
	}
	}
	else
	{
		echo "<script>alert('Passwords Did not matched, try again!!')
			window.location.href='../Public/login.php';
			</script>";
			
	}
	
	
	
?>