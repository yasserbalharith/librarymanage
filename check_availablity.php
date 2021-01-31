<html lang="en">
  <head>
    <title>Welcome</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="../css/style.css">
	
	<body>
<?php
 include("../../config/db_login.php");
 session_start();
?>
<div class = "container">
<a class = "btn-danger btn mt-4 " href = "../php/logout.php">Logout</a>
<a class = "btn-danger btn mt-4 " href = "../public/index.php">HomePage</a>
<a class = "btn-danger btn mt-4 " href = "books.php"> BOOKS</a>
<button class = "btn-danger btn mt-4 " onclick="myFunction()">Confirm</button>

<?php

if(!isset($_SESSION['id'])){
	
	echo "<script>alert('Something is not good')
				
			</script>";
			header("location:../public/login.php");
	
}

if (isset ($_POST["book"]))
{
	$book_id = $_POST["bookID"];
	$choice = $_POST["book_stat"];
	$query = "Select * from books where book_id = '".$book_id."'";
   
    $result = mysqli_query($connection, $query);
   if( mysqli_num_rows($result) > 0)  
           {  
		    while($row = mysqli_fetch_array($result))  
                {  
	if($book_id == $row['book_id'])
	{
		
		?><h3 style = "text-align:center;"> <?php echo "The chosen Book::  ".$row['title']. "  ::IS AVAILABLE " ?></h3>
		
	
		<?php
	if ($choice == "Borrow")
	{
		?>	<h4 style = "text-align:center;">The Price for Borrowing Per Day is 0.50$</h4><?php
	}
	else if ($choice == "purchase")
	{
	?>	<h4 style = "text-align:center;">The Price for Purchasing is :: <?php echo $row["price"] ?></h4>
	<div class = "col-md-12" style = "margin-left: 38pc;
    margin-bottom: 2pc;">
	
				
				</div>
	<?php
	}
	}
	else if($book_id != $row['book_id'])
	{
		?><h4 style = "text-align:center;"><?php echo "No Book AVAILABLE with This chosen ID !! Try Again" ?></h4>
		<a class = "btn-danger btn mt-4 " href = "books.php"><?php echo "Go To Books Again"?></a><?php
	}
				}
		   }
}


?>

<script>

function myFunction() {
  alert("Your Booking is Confirmed!");
}
</script>

</body>
</html>