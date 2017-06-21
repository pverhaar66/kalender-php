<center>
	<img id="header" src="img/etc/header.jpg">

	<main>

		<nav>
			 <a href='<?= URL ?>monster/create'><button class="navbutton">Add monster</button></a>
			 <a href='<?= URL ?>spell/index'><button class="navbutton">Go to spells</button></a>
			 <a href='<?= URL ?>trap/index'><button class="navbutton">Go to traps</button></a>
			 <a href='<?= URL ?>monster/htpygo'><button class="navbutton">How to play</button></a>
		</nav>	
		<table>

				<tr>
					<td class="topname"><a href="<?= URL ?>monster/index?sort=<?= $sort ?>&table=monster">name</td>
					<td class="top"> <a href="<?= URL ?>monster/index?sort=<?= $sort ?>&table=attribute">attribute</td>
					<td class="top" colspan="4"> <a href="<?= URL ?>monster/index?sort=<?= $sort ?>&table=type">type</td>
					<td class="top"> <a href="<?= URL ?>monster/index?sort=<?= $sort ?>&table=level">Level</td>
					<td class="toptext">description</td>
				</tr>

				<?php foreach ($monsters as $monster) {  ?>
				<tr>
					<td class="bottomname"><a href="<?= URL ?>monster/readmonster/<?= $monster['monster_id'];?>"><?= $monster['monster_name'];?></a></td>
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

