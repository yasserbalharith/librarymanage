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


<?php

if(!isset($_SESSION['id'])){
	
	echo "<script>alert('Something is not good')
				
			</script>";
			header("location:../public/login.php");
	
}
{
  // echo "WELCOME". $_SESSION['f_name'];
    $id = $_SESSION['id'];

    $query = "Select * from books JOIN book_info";
   
    $result = mysqli_query($connection, $query);
   if( mysqli_num_rows($result) > 0)  
           {  
	   ?>
	   <h2>Currently Available Books</h2>
	   <table class="table mt-4 table-bordered">
  <thead class="thead-dark ">
    <tr>
	<th>Book ID</th>
	<th>Title of Book</th>
	<th>Author</th>
	<th>Price</th>
	<th>status</th>
	<th>due_date</th>
	<th>issue_date</th>
	<th>return_date</th>
	</tr>
      <?php
                while($row = mysqli_fetch_array($result))  
                {  
			?>
					<tr>
				<td> <?php echo $row['book_id'] ?> </td>
				<td> <?php echo $row['title'] ?> </td>
				<td> <?php echo $row['author'] ?> </td>
				<td> <?php echo $row['price'] ?> </td>
				<td> <?php echo $row['status'] ?> </td>
				<td> <?php echo $row['due_date'] ?> </td>
				<td> <?php echo $row['issue_date'] ?> </td>
				<td> <?php echo $row['return_date'] ?> </td>
                </tr>
				<?php
				}
		   }
}
  
  

?>
</table>

<div class = "form-group container">
		<div class = "row">
			<h3>Enter Book ID to purchase or Borrow Book</h3>
		</div>
		<form action="check_availablity.php" method="POST">
		<div class = "row">
			<div class = "col-md-12">
				<label><b>Book ID</b>
					<input type = "text" name = "bookID" class = "form-control " placeholder = "Enter Book ID" required/>
				</label>
				</div>
				<div class = "col-md-12">
				<label><b>Choose Your Wish!</b></label>
				<label class="radio-inline"><input type="radio" value = "Borrow" name="book_stat" >Borrow</label>
				<label class="radio-inline"><input type="radio" value = "purchase" name="book_stat" checked>Purchase</label>
				
			</div>
			<div class = "col-md-12">
				<input type = "submit" name = "book" class = " btn btn-secondary col-md-2 mt-4" value = "CHECK AVAILABLITY"/>
				</div>
		</div>
		</form>
</div>
</div>

</body>
</html>