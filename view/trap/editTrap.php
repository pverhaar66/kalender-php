<center>

	<main>
	<img id="header" src="img/etc/header.jpg">
	<section id="create">
		<form action="<?= URL ?>monster/editSave" method = "POST">
				<p>Name</p><input type="text" value="<?= $monster['monster_name'] ?>" name="monster_name" class="inputtext">

				<p>Attribute</p>
				<select name="monster_attribute">
				<?php 

				$types = array("Dark" => "Dark", 
					"Divine" => "Divine", 
					"Earth" => "Earth", 
					"Fire" => "Fire", 
					"Light" => "Light",
					 "Water" => "Water", 
					 "Wind" => "Wind");
				
				foreach ($types as $attribute) { 
				?>
					<option value="<?= $attribute; ?>" 
					<?php 
						if ($attribute == $monster["monster_attribute"]) {
							echo "selected=\"true\"";
						} 
					?>
						> 
						<?= $attribute ?>
					</option>
					<?php	} ?>
				</select>


				<p>Type</p>
				<select name="monster_type1">
				<?php
				$typei = array("Aqua" => "Aqua",
				"Beast" => "Beast",
				"Beast-Warrior" => "Beast-Warrior",
				"Creator God" => "Creator God",
				"Cyverse" => "Cyverse",
				"Dinosaur" => "Dinosaur",
				"Divine Beast" => "Divine Beast",
				"Dragon" => "Dragon",
				"Fairy" => "Fairy",
				"Fiend" => "Aqua",
				"Fish" => "Fish",
				"Insect" => "Insect",
				"Machine" => "Machine",
				"Plant" => "Plant",
				"Psychic" => "Psychic",
				"Pyro" => "Pyro",
				"Reptile" => "Reptile",
				"Rock" => "Rock",
				"Sea Serpent" => "Sea Serpent",
				"Spellcaster" => "Spellcaster",
				"Thunder" => "Thunder",
				"Warrior" => "Warrior",
				"Winged Beast" => "Winged Beast",
				"Wyrm" => "Wyrm",
				"Zombie" => "Zombie"); 
				
				foreach ($typei as $type1) { 
				?>
					<option value="<?= $type1; ?>" 
					<?php 
						if ($type1 == $monster["monster_type1"]) {
							echo "selected=\"true\"";
						} 
					?>
						> 
						<?= $type1 ?>
					</option>
					<?php	} ?>
				</select>


				

				<select name="monster_type2">
				<?php
				$typeii = array(" " => " ",
				"effect" => "effect",
				"tuner" => "tuner",
				"ritual" => "ritual",
				"Fusion" => "Fusion",
				"xyz" => "xyz",
				"synchro" => "synchro",
				"pendalum" => "pendalum",
				"gemini" => "gemini",
				"flip" => "flip");
				
				foreach ($typeii as $type2) { 
				?>
					<option value="<?= $type2; ?>" 
					<?php 
						if ($type2 == $monster["monster_type2"]) {
							echo "selected=\"true\"";
						} 
					?>
						> 
						<?= $type2 ?>
					</option>
					<?php	} ?>
				</select>

				<select name="monster_type3">
				<?php
				$typeiii = array(" " => " ",
				"effect" => "effect",
				"tuner" => "tuner",
				"pendalum" => "pendalum",
				"gemini" => "gemini");
				
				
				foreach ($typeiii as $type3) { 
				?>
					<option value="<?= $type3; ?>" 
					<?php 
						if ($type3 == $monster["monster_type3"]) {
							echo "selected=\"true\"";
						} 
					?>
						> 
						<?= $type3 ?>
					</option>
					<?php	} ?>
				</select>

				<select name="monster_type4">
				<?php
				$typeiv = array(" " => " ",
				"effect" => "effect");
				
				
				
				foreach ($typeiv as $type4) { 
				?>
					<option value="<?= $type4; ?>" 
					<?php 
						if ($type4 == $monster["monster_type4"]) {
							echo "selected=\"true\"";
						} 
					?>
						> 
						<?= $type4 ?>
					</option>
					<?php	} ?>
				</select>

				<p>ATK</p><input type="text" value="<?= $monster['monster_attack']; ?>" name="monster_attack" class="inputtext" maxlength="4">

				<p>DEF</p><input type="text" value="<?= $monster['monster_defense']; ?>" name="monster_defense" class="inputtext" maxlength="4">

				<p>Level/Rank</p>
				<select name="monster_level">
					
				<?php for ($level=1; $level <=12 ; $level++) { ?>
					<option value="<?= $level ?>" 
						<?php  
							if ($level == $monster['monster_level']) {
								echo "selected=\"true\"";
							} ?>>
						<?= $level ?>
					</option>
				<?php } ?>
				</select>

				<p>Description</p><textarea maxlength="1000" rows="10" type="text" name="monster_description" class="inputtext3"> <?= $monster['monster_description']; ?> </textarea> <br>

				<input type="hidden" value="<?= $monster['monster_id']; ?>" name="monster_id" class="inputtext" > <br>

				
				
					<input type="submit" value="submit" id="submitcreate">
					</form>
				<a href="<?= URL ?>monster/index"><button id="createbutton">Back</button></a> 	

		</section>


	</main>
</center>
<script type="text/javascript">
	$(document).ready(function() {
	  $(window).keydown(function(event){
	    if(event.keyCode == 13) {
	      event.preventDefault();
	      return false;
	    }
	  });
	});
</script>