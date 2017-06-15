<center>
	<main>
		<section id="cardreader">

			<p><?= $monster['monster_name'];?></p>
			<p><?= $monster['monster_attribute'];?></p>
			<p><?= $monster['monster_type1'];?></p>
			<p><?= $monster['monster_type2'];?></p>
			<p><?= $monster['monster_type3'];?></p>
			<p><?= $monster['monster_attack'];?></p>
			<p><?= $monster['monster_defense'];?></p>
			<p><?= $monster['monster_level'];?></p>
			<p><?= $monster['monster_description'];?></p>

			<a href="<?= URL ?>monster/index"><button id="createbutton">Back</button></a> 
		</section>
	</main>
</center>

