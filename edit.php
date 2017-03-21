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

		
		<p class="names">Day 
		<select name="day">

		<?php for ($day=1; $day <=31 ; $day++){ ?>
			<option value="<?php echo $day ?>" 
				<?php 
					if ($day == $birthdays["day"]){
			            echo "selected=\"true\"";
			        } ?>><?php echo $day 
			    ?>	
		    </option>
		<?php } ?>

		</select></p>

		

		<p class="names"> Month 
		<select name="month">

			<?php for ($month=1; $month <=12 ; $month++){ ?>
				<option value="<?php echo $month ?>"
					<?php 
						if ($month == $birthdays["month"]){
			            	echo "selected=\"true\"";
			        	} ?>>
			        <?php echo $month ?>	
				</option>
			<?php } ?>
		
		</select></p>



		<p class="names"> Year 
		<select name="year">

			<?php for ($year=1960; $year <=2017 ; $year++){ ?>
				<option value="<?php echo $year ?>"
					<?php 
						if ($year == $birthdays["year"]){
			            	echo "selected=\"true\"";
			        	} ?>>
			       	<?php echo $year ?>
			    </option>
			<?php } ?>
		
		</select> </p>


	<input id="update" type="submit" value="Update">
		

	</form>
</main>	



<?php }else if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$db = new PDO("mysql:host=localhost;dbname=calendar", "root", "");

	$stmt = $db -> prepare ("UPDATE birthdays SET `person` = :person, `day`= :day, `month` = :month, `year` = :year WHERE id=:id");


	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$stmt->bindParam(':person', $_POST["person"]);
    $stmt->bindParam(':day', $_POST["day"]);
    $stmt->bindParam(':month', $_POST["month"]);
    $stmt->bindParam(':year', $_POST["year"]);
    $stmt->bindParam(':id', $_GET["id"]);
    $stmt->execute();
    // binds the updated parameters given by the user
<<<<<<< HEAD
    header("Location: index.php");
?>

=======
?>

	<main>
		<h1>Succesfully Updated :D</h1>
		<button><a href="index.php">back</a></button>
	</main>	

>>>>>>> e814da98e39b4fbb3bd939ccd50df1a77fecc603
<?php } ?>

</body>
</html>