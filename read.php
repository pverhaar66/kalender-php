<?php 
	$db = new PDO("mysql:host=localhost;dbname=calendar", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

	$sql = "SELECT * FROM birthdays WHERE id=:id";
	// :id tells the Database that there will be an ID input later 
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":id"=>$_GET['id']));
	// sends the inputtted ID to the Database in a array


	$birthdays = $stmt->fetch();
	// gets the data from the Database

?>

<?php require("header.php") ?>

<html>
	<body>
		<main>
			<section>
			 	<h1>INFO : </h1>
				<p>Name : <?php echo $birthdays["person"]; ?></p>
				<p>Day : <?php echo $birthdays["day"]; ?></p></p>
				<p>Month : <?php echo $birthdays["month"]; ?></p></p>
				<p>Year : <?php echo $birthdays["year"]; ?></p></p>
				<a href="index.php"><button>back</button></a> <a href="edit.php?id=<?php echo $birthdays["id"]; ?>"><button>Edit</button></a>
			</section>
		</main>
	</body>
</html>