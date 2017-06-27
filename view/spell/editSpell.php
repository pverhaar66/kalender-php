<center>

	<main>
	<img id="header" src="<?= URL ?>css/img/etc/header.jpg">
	<section id="create">
		<form action="<?= URL ?>spell/editSave" method = "POST">
				<p>Name</p><input type="text" value="<?= $spell['spell_name'] ?>" name="spell_name" class="inputtext">


				<p>Type</p>
				<select name="spell_type">
				<?php
				$type = array("Normal" => "Normal",
				"Quick" => "Quick",
				"continuous" => "continuous",
				"Equip" => "Equip",
				"ritual" => "ritual"); 
				
				foreach ($type as $type) { 
				?>
					<option value="<?= $type; ?>" 
					<?php 
						if ($type == $spell["spell_type"]) {
							echo "selected=\"true\"";
						} 
					?>
						> 
						<?= $type ?>
					</option>
					<?php	} ?>
					<!-- $type gets its names from the assositive array -->
				</select>

				<p>Description</p><textarea maxlength="1000" rows="10" type="text" name="spell_description" class="inputtext3"> <?= $spell['spell_description']; ?> </textarea> <br>

				<input type="hidden" value="<?= $spell['spell_id']; ?>" name="spell_id" class="inputtext" > <br>

				
				
					<input type="submit" value="submit" id="submitcreate">
					</form>
				<a href="<?= URL ?>spell/index"><button id="createbutton">Back</button></a> 	

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