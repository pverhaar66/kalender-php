<center>
	<main>
		<section id="create">
			<p> Name : <?= $patient['patient_name'];?></p>
			
			<p> client : <?= $patient['client_firstname'] ?> <?= $patient['client_lastname'] ?></p>

		 	<p> Specie : <?= $patient['species_description'];?></p>

		 	<p> Gender : <?= $patient['patient_gender'];?></p>
		 
			<p> Status : <?= $patient['patient_status'];?></p>
			
			<a href="<?= URL ?>patient/index"><button id="createbutton">Back</button></a>
		</section>
	</main>
</center>

