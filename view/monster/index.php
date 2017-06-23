<center>
	<img id="header" src="<?= URL; ?>css/img/etc/header.jpg">

	<main>

		<nav>
			 <a href='<?= URL ?>monster/create'><button class="navbutton">Add Monster</button></a>
			 <a href='<?= URL ?>spell/index'><button class="navbutton">Go to Spells</button></a>
			 <a href='<?= URL ?>trap/index'><button class="navbutton">Go to Traps</button></a>
			 <a href='<?= URL ?>monster/htpygo'><button class="navbutton">How to play</button></a>
		</nav>	
		<table>

				<tr>
					<td class="topnamemonster"><a href="<?= URL ?>monster/index?sort=<?= $sort ?>&table=monster">name</td>
					<td class="topmonster"> <a href="<?= URL ?>monster/index?sort=<?= $sort ?>&table=attribute">attribute</td>
					<td class="topmonster" colspan="4"> <a href="<?= URL ?>monster/index?sort=<?= $sort ?>&table=type">type</td>
					<td class="topmonster"> <a href="<?= URL ?>monster/index?sort=<?= $sort ?>&table=level">Level</td>
					<td class="toptextmonster">description</td>
				</tr>

				<?php foreach ($monsters as $monster) {  ?>
				<tr>
					<td class="bottomnamemonster"><a href="<?= URL ?>monster/readmonster/<?= $monster['monster_id'];?>"><?= $monster['monster_name'];?></a></td>
					<td class="bottom"><?= $monster['monster_attribute'];?></td>
				 	<td class="bottom"><?= $monster['monster_type1'];?></td>
				 	<td class="bottom"><?= $monster['monster_type2'];?></td>
				 	<td class="bottom"><?= $monster['monster_type3'];?></td>
				 	<td class="bottom"><?= $monster['monster_type4'];?></td>
				 	<td class="bottom"><?= $monster['monster_level'];?></td>
				 	<td class="bottomtext"><?= $monster['monster_description'];?></td>
				</tr>
				<?php } ?>
				 

			</table>	
	</main>
</center>

