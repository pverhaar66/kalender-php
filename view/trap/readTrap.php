	<main>
		<img id="header" src="<?= URL ?>css/img/etc/header.jpg">
		<img id="readimg" src="<?= URL ?>css/img/traps/<?= $trap["trap_name"] ?>.png">
		<section id="cardreader">

			<p class="readtext"> Name : <?= $trap['trap_name'];?></p>
			<p class="readtext"> Type : <?= $trap['trap_type'];?></p>
			<p class="readtext"> Description : <?= $trap['trap_description'];?></p>

			<section id="links">
				<h1 >Links</h1>
				<a href="" class="link">rulings</a> <a href="" class="link">Trivia</a> <a href="" class="link">Tips</a>	
			</section>
			<a href="<?= URL ?>trap/editTrap/<?= $trap['trap_id'];?>"><button class="readtext">Edit</button></a>
			<a href="<?= URL ?>trap/deleteTrap/<?= $trap['trap_id'];?>"><button class="readtext">Delete</button></a>

			<a href="<?= URL ?>trap/index"><button id="readback">Back</button></a> 
		</section>
	</main>

