<center>
	<main>
		<section id="create">
			<form action="<?= URL ?>patient/createSave" method="post">

			<p>Client</p>
				<select name="client_id">
					<?php foreach ($clients as $client){ ?>
						<option value="<?= $client['client_id'] ?>"><?= $client['client_firstname'] ?> <?= $client['client_lastname'] ?></option>		
					<?php } ?>	
				</select>

			<p>patient name</p><input type="text" placeholder="darius" name="patient_name" class="inputtext">

			<p>patient Specie</p> 
				<select name="specie_id">
					<?php foreach ($species as $specie){ ?>
						<option value="<?= $specie['species_id'] ?>"><?= $specie['species_description'] ?></option>		
					<?php } ?>	
				</select>

			<p> Gender</p> 
				<select name="patient_gender">
					<option value="Female">Female</option>
					<option value="Male">Male</option>
					<option value="hermafrodiet">hermafrodiet</option>

				</select>

			<p> patient status</p><input type="text" placeholder="broken leg" name="patient_status" class="inputtext">
			
			
				<input type="submit" value="submit" id="submitcreate">

				</form>
			<a href="<?= URL ?>Patient/index"><button id="createbutton">Back</button></a> 	
		</section>

	</main>
</center>
