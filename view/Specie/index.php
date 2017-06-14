<center>
	<main>
		<table>

				<tr>
					<td class="top">Speice_name</td>
					<td class="top">specie_gendert</td>
					<td class="top" colspan="3">options</td>
				</tr>

				<?php foreach ($species as $specie) {  ?>
				<tr>
					<td class="bottom"><?= $specie['species_description'];?></td>
					<td class="bottom"><a href="<?= URL ?>specie/readspecie/<?= $specie['species_id'];?>"><button class="indexbutton">Info</button></a></td>
					<td class="bottom"><a href="<?= URL ?>specie/editspecie/<?= $specie['species_id'];?>"><button class="indexbutton">Edit</button></a></td>
					<td class="bottom"><a href="<?= URL ?>specie/deletespecie/<?= $specie['species_id'];?>"><button class="indexbutton">Delete</button></a></td>
				</tr>
				<?php } ?>
				 <a href='<?= URL ?>specie/create'><button id="addbutton">Add specie</button></a>

			</table>	

			 <aside>
			 <a href='<?= URL ?>client/index'><button class="navbutton">Go to clients</button></a>
			 <a href='<?= URL ?>patient/index'><button class="navbutton">Go to patients</button></a>
			 </aside>	
	</main>
</center>

