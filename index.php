
<?php
	$db = new PDO("mysql:host=localhost;dbname=calendar", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

	$sql = "SELECT * FROM birthdays ORDER BY month ASC, day ASC, year ASC";
	$stmt = $db->prepare($sql);
	$stmt->execute();

 	$text=array("","januari" , "februari", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");
	$currentMonth = null; 

	$birthdays = $stmt->fetchALL();
	?>

<?php require('header.php') ?>
<html>
	<body>
		<main>


		        <?php foreach($birthdays as $birthday){ ?>

		        <?php	 	
			        if  ($currentMonth != $text[$birthday["month"]]){
			        	$currentMonth = $text[$birthday["month"]];
			        	echo '<h1>';echo $text[$birthday["month"]]; echo '</h1>';
			        }
		       	?>

		        	<h2><?php echo $birthday["day"]; ?> </h2>
		  		<p>
		  			<a href="read.php?id=<?php echo $birthday["id"]; ?>"><?php echo $birthday["person"] ?></a>  <a href="delete.php?id=<?php echo $birthday["id"]; ?>">x</a>
		  			<p>(<?php echo $birthday["year"]; ?>)</p>

		  			
		  		</p>
				<?php } ?>

				<p><a href="create.php">+ Add to Calender</a></p>
		</main>
	</body>
</html>