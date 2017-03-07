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

<?php  require('header.php');	 ?>

<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>

<main>
	<form action = "<?php $_PHP_SELF ?>" method = "POST">
		<p class="names"> Name <input type="text" value="<?php echo $birthdays["person"]; ?>" name="person"> </p>

		
		<p class="names"> Day <select name="day">

			<?php for ($Day=1; $Day <=31 ; $Day++){ ?>
				<?php if(selected)?><option value="<?php echo $Day ?>" selected="true"><?php echo $Day ?></option>
			<?php } ?>

		</select></p>

		

		<p class="names"> Month <select name="month">

			<?php for ($Month=1; $Month <=12 ; $Month++){ ?>
				<option value="<?php echo $Month ?>"><?php echo $Month ?></option>
			<?php } ?>
		
		</select></p>



		<p class="names"> Year <select name="year">

			<?php for ($Year=1960; $Year <=2017 ; $Year++){ ?>
				<option value="<?php echo $Year ?>"><?php echo $Year ?></option>
			<?php } ?>
		
		</select> </p>


	<input id="submit" type="submit" value="Update">
		

	</form>
</main>	



<?php }else if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$db = new PDO("mysql:host=localhost;dbname=calendar", "root", "");

	$stmt = $db -> prepare("UPDATE birthdays (person, day, month, year) VALUES (:person, :day, :month, :year)");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// updates the set values in the statement

	$stmt->bindParam(':person', $_POST["person"]);
    $stmt->bindParam(':day', $_POST["day"]);
    $stmt->bindParam(':month', $_POST["month"]);
    $stmt->bindParam(':year', $_POST["year"]);
    $stmt->execute();
    // binds the updated parameters given by the user
?>

	<main>
		<h1>Updated</h1>
		<button><a href="index.php">back</a></button>
	</main>	

<?php } ?>

</body>
</html>