<center>
	<main>
		<table>

				<tr>
					<td class="top">name</td>
					<td class="top">attribute</td>
					<td class="top" colspan="3">type</td>
					<td class="top" colspan="2">ATK/DEF</td>
					<td class="top">Level</td>
					<td class="top">description</td>
					<td class="top" colspan="3">options</td>
				</tr>

				<?php foreach ($monsters as $monster) {  ?>
				<tr>
					<td class="bottom"><?= $monster['monster_name'];?></td>
					<td class="bottom"><?= $monster['monster_attribute'];?></td>
				 	<td class="bottom"><?= $monster['monster_type1'];?></td>
				 	<td class="bottom"><?= $monster['monster_type2'];?></td>
				 	<td class="bottom"><?= $monster['monster_type3'];?></td>
				 	<td class="bottom"><?= $monster['monster_attack'];?></td>
				 	<td class="bottom"><?= $monster['monster_defense'];?></td>
				 	<td class="bottom"><?= $monster['monster_level'];?></td>
				 	<td class="bottom"><?= $monster['monster_description'];?></td>
					<td class="bottom"> <a href="<?= URL ?>monster/readmonster/<?= $monster['monster_id'];?>"><button class="indexbutton">Info</button></a> </td>
					<td class="bottom">	<a href="<?= URL ?>monster/editmonster/<?= $monster['monster_id'];?>"><button class="indexbutton">Edit</button></a> </td>
					<td class="bottom">	<a href="<?= URL ?>monster/deletemonster/<?= $monster['monster_id'];?>"><button class="indexbutton">Delete</button></a></td>

				</tr>
				<?php } ?>
				 <a href='<?= URL ?>monster/create'><button id="addbutton">Add monster</button></a>

			</table>	

			 <aside>
			 <a href='<?= URL ?>spell/index'><button class="navbutton">Go to spells</button></a>
			 <a href='<?= URL ?>trap/index'><button class="navbutton">Go to traps</button></a>
			 <a href='<?= URL ?>monster/htpygo'><button class="navbutton">How to play</button></a>
			 </aside>	
	</main>
</center>

