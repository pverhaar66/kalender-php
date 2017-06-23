<center>
	<main>
	<img id="header" src="<?= URL ?>css/img/etc/header.jpg">
		<section id="create">
			<form action="<?= URL ?>trap/createSave" method="post">

			<p>Name</p><input type="text" placeholder="darius" name="trap_name" class="inputtext">

			<p>Type</p>
			<select name="trap_type">
				<option value="Normal">Normal</option>
				<option value="continuous">continuous</option>	
				<option value="counter">counter</option>
			</select>

			<p>Description</p><textarea maxlength="500" rows="12" type="text" name="trap_description" class="inputtext3"></textarea> <br>

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