<center>
	<main>
		<section id="create">
			<form action="<?= URL ?>monster/editSave" method="post">
			
			
			<p>Name</p><input type="text" value="<?= $monster['monster_name'] ?>" name="monster_name" class="inputtext">
			<p>Attribute</p><input type="text" value="<?= $monster['monster_attribute'] ?>" name="monster_attribute" class="inputtext">
			<p>Type</p><input type="text" value="<?= $monster['monster_type'] ?>" name="monster_type" class="inputtext">
			<p>Description</p><input type="text" value="<?= $monster['monster_description'] ?>" name="monster_description" class="inputtext">

			<input type="hidden" value="<?= $monster['monster_id'] ?>" name="monster_id">


			
			
				<input type="submit" value="submit" id="submitcreate">
				</form>
			<a href="<?= URL ?>monster/index"><button id="createbutton">Back</button></a> 	
		</section>

	</main>
</center>