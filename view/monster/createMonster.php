<center>
	<main>
		<section id="create">
			<form action="<?= URL ?>monster/createSave" method="post">

			<p>Name</p><input type="text" placeholder="darius" name="monster_name" class="inputtext">

			<p>Attribute</p>
			<select name="monster_attribute">
			<option value="Dark">Dark</option>
			<option value="Divine">Divine</option>
			<option value="Earth">Earth</option>
			<option value="Fire">Fire</option>
			<option value="Light">Light</option>
			<option value="Water">Water</option>
			<option value="Wind">Wind</option>
			</select>

			<p>Type</p>
			<select name="monster_type1">
				<option value="Aqua">Aqua</option>
				<option value="Beast">Beast</option>	
				<option value="Beast-Warrior">Beast-Warrior</option>
				<option value="Creator God">Creator God</option>
				<option value="Cyverse">Cyverse</option>
				<option value="Dinosaur">Dinosaur</option>
				<option value="Divine Beast">Divine Beast</option>
				<option value="Dragon">Dragon</option>
				<option value="Fairy">Fairy</option>
				<option value="Fiend">Fiend</option>
				<option value="Fish">Fish</option>
				<option value="Insect">Insect</option>
				<option value="Machine">Machine</option>
				<option value="Plant">Plant</option>
				<option value="Psychic">Psychic</option>
				<option value="Pyro">Pyro</option>
				<option value="Reptile">Reptile</option>
				<option value="Rock">Rock</option>
				<option value="Sea Serpent">Sea Serpent</option>
				<option value="Spellcaster">spellcaster</option>
				<option value="Thunder">Thunder</option>
				<option value="Warrior">Warrior</option>
				<option value="Winged Beast">Winged Beast</option>
				<option value="Wyrm">Wyrm</option>
				<option value="Zombie">Zombie</option>
			</select>

			<select name="monster_type2">
				<option value=" "> </option>
				<option value="effect">Effect</option>
				<option value="tuner">Tuner</option>
				<option value="ritual">Ritual</option>
			</select>

			<select name="monster_type3">
				<option value=" "> </option>
				<option value="effect">Effect</option>
				<option value="ritual">Ritual</option>
			</select>

			<p>ATK</p><input type="text" placeholder="darius" name="monster_attack" class="inputtext" maxlength="4">

			<p>DEF</p><input type="text" placeholder="darius" name="monster_defense" class="inputtext" maxlength="4">

			<p>Level/Rank</p>
			<select name="monster_level">
				<option>
					<?php for ($Month=1; $Month <=12 ; $Month++){ ?>
				<option value="<?php echo $Month ?>"><?php echo $Month ?></option>
			<?php } ?>
			</select>

			<p>Description</p><input type="text" placeholder="darius" name="monster_description" class="inputtext"> <br>


			
			
				<input type="submit" value="submit" id="submitcreate">
				</form>
			<a href="<?= URL ?>monster/index"><button id="createbutton">Back</button></a> 	
		</section>

	</main>
</center>