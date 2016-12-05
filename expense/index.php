<?php 
	include 'include/functions.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Expense Manager</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h2>Expense Manager</h2>
		</div>
		<div class="container">
			<div class="form">
				<h3>Enter expense details</h3>
				<form method="POST" action="process.php">
					<label>Item price</label></br>
					<input type="text" name="price" required></br>
					<label>Name</label></br>
					<input type="text" name="name" required></br></br>
					<input type="submit" value="Save it" class="submit">
				</form>
			</div>
			<div class="report">
				<h3>Total Expenditure</h3>
				<?php totalExpenditure(); ?>
			</div>
			<!--Item list display-->
			<div class="list_display">
				<h3>Expense list</h3>
				<?php retriveItem(); ?>
			</div>
		</div>
	</div>
</body>
</html>