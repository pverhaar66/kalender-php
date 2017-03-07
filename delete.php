<?php 
	$db = new PDO("mysql:host=localhost;dbname=calendar", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

	$sql = "DELETE FROM birthdays WHERE id=:id";
	// :id tells the Database that there will be an ID input later
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":id"=>$_GET['id'])); 
	// sends the inputtted ID to the Database in a array 
?>


<?php  require('header.php');	 ?>
<body>
	<main>
		<section>
			<h1> Delete succes</h1>
			<a href="index.php"><button>Back</button></a>
		</section>
	</main>
</body>
