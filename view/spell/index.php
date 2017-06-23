<center>
	<img id="header" src="<?= URL ?>css/img/etc/header.jpg">

	<main>

		<nav>
			 <a href='<?= URL ?>spell/create'><button class="navbutton">Add Spell</button></a>
			 <a href='<?= URL ?>monster/index'><button class="navbutton">Go to Monsters</button></a>
			 <a href='<?= URL ?>trap/index'><button class="navbutton">Go to Traps</button></a>
			 <a href='<?= URL ?>monster/htpygo'><button class="navbutton">How to play</button></a>
		</nav>	
		<table>

				<tr>
					<td class="topnamespell"><a href="<?= URL ?>spell/index?sort=<?= $sort ?>&table=spell">name</td>
					<td class="topspell"> <a href="<?= URL ?>spell/index?sort=<?= $sort ?>&table=type">type</td>
					<td class="toptextspell">description</td>
				</tr>

				<?php foreach ($spells as $spell) {  ?>
				<tr>
					<td class="bottomnamespell"><a href="<?= URL ?>spell/readspell/<?= $spell['spell_id'];?>"><?= $spell['spell_name'];?></a></td>
				 	<td class="bottom"><?= $spell['spell_type'];?></td>
				 	<td class="bottomtext"><?= $spell['spell_description'];?></td>
				</tr>
				<?php } ?>
				 

			</table>	
	</main>
</center>

