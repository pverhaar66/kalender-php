<center>
	<main>
		<section id="create">
			<form action="<?= URL ?>specie/editSave" method="post">
			
			
			<p>Name</p><input type="text" value="<?= $specie['species_description'] ?>" name="species_description" class="inputtext">
			<input type="hidden" value="<?= $specie['species_id'] ?>" name="species_id">
			
				<input type="submit" value="submit" id="submitcreate">
				</form>
			<a href="<?= URL ?>specie/index"><button id="createbutton">Back</button></a> 	
		</section>

	</main>
</center>