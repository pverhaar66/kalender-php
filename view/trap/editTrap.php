<center>

	<main>
	<img id="header" src="<?= URL ?>css/img/etc/header.jpg">
	<section id="create">
		<form action="<?= URL ?>trap/editSave" method = "POST">
				<p>Name</p><input type="text" value="<?= $trap['trap_name'] ?>" name="trap_name" class="inputtext">


				<p>Type</p>
				<select name="trap_type">
				<?php
				$type = array("Normal" => "Normal",
				"counter" => "Counter",
				"continuous" => "Continuous"); 
				
				foreach ($type as $type) { 
				?>
					<option value="<?= $type; ?>" 
					<?php 
						if ($type == $trap["trap_type"]) {
							echo "selected=\"true\"";
						} 
					?>
						> 
						<?= $type ?>
					</option>
					<?php	} ?>
				</select>

				<p>Description</p><textarea maxlength="1000" rows="10" type="text" name="trap_description" class="inputtext3"> <?= $trap['trap_description']; ?> </textarea> <br>

				<input type="hidden" value="<?= $trap['trap_id']; ?>" name="trap_id" class="inputtext" > <br>

				
				
					<input type="submit" value="submit" id="submitcreate">
					</form>
				<a href="<?= URL ?>trap/index"><button id="createbutton">Back</button></a> 	

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