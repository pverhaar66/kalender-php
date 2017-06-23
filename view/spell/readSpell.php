	<main>
		<img id="header" src="<?= URL ?>css/img/etc/header.jpg">
		<img id="readimg" src="<?= URL ?>css/img/spells/spell<?= $spell["spell_id"] ?>.png">
		<section id="cardreader">

			<p class="readtext"> Name : <?= $spell['spell_name'];?></p>
			<p class="readtext"> Type : <?= $spell['spell_type'];?></p>
			<p class="readtext"> Description : <?= $spell['spell_description'];?></p>

			<section id="links">
				<h1 >Links</h1>
				<a href="" class="link">rulings</a> <a href="" class="link">Trivia</a> <a href="" class="link">Tips</a>	
			</section>
			<a href="<?= URL ?>spell/editspell/<?= $spell['spell_id'];?>"><button class="readtext">Edit</button></a>
			<a href="<?= URL ?>spell/deletespell/<?= $spell['spell_id'];?>"><button class="readtext">Delete</button></a>

			<a href="<?= URL ?>spell/index"><button id="readback">Back</button></a> 
		</section>
	</main>

