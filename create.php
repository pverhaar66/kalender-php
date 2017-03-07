<?php  require('header.php');	 ?>

<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>

<main>
	<form action = "<?php $_PHP_SELF ?>" method = "POST">
		<p class="names"> Name <input type="text" name="person"> </p>

		
			<?php for ($Day=1; $Day <=31 ; $Day++){ ?>
				<option value="<?php echo $Day ?>"><?php echo $Day ?></option>
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

	<input id="submit" type="submit" value="Add">
		
	</form>
</main>	

<?php }else if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$db = new PDO("mysql:host=localhost;dbname=calendar", "root", "");

	$stmt = $db -> prepare("INSERT INTO birthdays (person, day, month, year) VALUES (:person, :day, :month, :year)");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt->bindParam(':person', $_POST["person"]);
    $stmt->bindParam(':day', $_POST["day"]);
    $stmt->bindParam(':month', $_POST["month"]);
    $stmt->bindParam(':year', $_POST["year"]);
    $stmt->execute();
?>

	<main>
		<p>saved</p>
		<button><a href="index.php">back</a></button>
	</main>	

<?php } ?>

</body>
</html>