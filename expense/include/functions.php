<?php

$con = mysqli_connect("localhost","root"," ","expense");
return $con;

if (mysqli_connect_errno($con)) 
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//function for inserting item data to db
function 
insertItem($item_name, $item_price) 
{
$result = mysqli_query($con,"INSERT INTO spent(item_name,item_price) VALUES ('$item_name','$item_price')");
if($result === false) {
    // Handle failure - log the error, notify administrator, etc.
echo "Query unseccessful";
} 
else {
// We successfully inserted a row into the database
echo "Go back to <a href=\"index.php\">Home page</a>";
	}
mysqli_close($con);
}
//function for retriving item data from db
function 
retriveItem() 
{
$sql = "SELECT id, item_name, item_price FROM spent";
$result = mysqli_query($con, $sql);

	
if (mysqli_num_rows($result) >= 1) 
{
// output data of each row
while($row = mysqli_fetch_assoc($result)) {	        
echo "UID: " . $row["id"]. ", Item: " . $row["item_name"]. ",  Spent: " . $row["item_price"]. "<br>";
}
} 
else 
{
echo "0 results";
}
}
//function for showing total expenditure
function 
totalExpenditure() 
{
$result = mysqli_query($con,'SELECT SUM(item_price) AS value_sum FROM spent'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
echo "<b>".$sum."</b>";
}
?>