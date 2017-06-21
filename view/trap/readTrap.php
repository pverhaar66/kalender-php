	<main>
		<img id="header" src="<?= URL; ?>css/img/etc/header.jpg">
		<img id="readimg" src="<?= URL; ?>css/img/monsters/monster<?= $monster["monster_id"] ?>.png">
		<section id="cardreader">

			<p class="readtext"> Name : <?= $monster['monster_name'];?></p>
			<p class="readtext"> Attribute : <?= $monster['monster_attribute'];?></p>
			<p class="readtext"> Type : <?= $monster['monster_type1'];?> <?= $monster['monster_type2'];?> <?= $monster['monster_type3'];?> <?= $monster['monster_type4'];?></p>
			<p class="readtext"> Attack : <?= $monster['monster_attack'];?></p>
			<p class="readtext"> Defense : <?= $monster['monster_defense'];?></p>
			<p class="readtext"> Level : <?= $monster['monster_level'];?></p>
			<p class="readtext"> Description : <?= $monster['monster_description'];?></p>

			<section id="links">
				<h1 >Links</h1>
				<a href="" class="link">rulings</a> <a href="" class="link">Trivia</a> <a href="" class="link">Tips</a>	
			</section>
			<a href="<?= URL ?>monster/editmonster/<?= $monster['monster_id'];?>"><button class="readtext">Edit</button></a>
			<a href="<?= URL ?>monster/deletemonster/<?= $monster['monster_id'];?>"><button class="readtext">Delete</button></a>

			<a href="<?= URL ?>monster/index"><button id="readback">Back</button></a> 
		</section>
	</main>

