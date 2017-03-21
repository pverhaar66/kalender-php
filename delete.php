<?php 
	$db = new PDO("mysql:host=localhost;dbname=calendar", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

	$sql = "DELETE FROM birthdays WHERE id=:id";
	// :id tells the Database that there will be an ID input later
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":id"=>$_GET['id'])); 
	// sends the inputtted ID to the Database in a array
	header("Location: index.php");
?>