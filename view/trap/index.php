<center>
	<img id="header" src="<?= URL ?>css/img/etc/header.jpg">

	<main>

		<nav>
			 <a href='<?= URL ?>trap/create'><button class="navbutton">Add trap</button></a>
			 <a href='<?= URL ?>monster/index'><button class="navbutton">Go to Monsters</button></a>
			 <a href='<?= URL ?>spell/index'><button class="navbutton">Go to Spells</button></a>
			 <a href='<?= URL ?>monster/htpygo'><button class="navbutton">How to play</button></a>
		</nav>	
		<table>

				<tr>
					<td class="topnametrap"><a href="<?= URL ?>trap/index?sort=<?= $sort ?>&table=trap">name</td>
					<td class="toptrap"> <a href="<?= URL ?>trap/index?sort=<?= $sort ?>&table=type">type</td>
					<td class="toptexttrap">description</td>
				</tr>

				<?php foreach ($traps as $trap) {  ?>
				<tr>
					<td class="bottomnametrap"><a href="<?= URL ?>trap/readTrap/<?= $trap['trap_id'];?>"><?= $trap['trap_name'];?></a></td>
				 	<td class="bottom"><?= $trap['trap_type'];?></td>
				 	<td class="bottomtext"><?= $trap['trap_description'];?></td>
				</tr>
				<?php } ?>
				 

			</table>	
	</main>
</center>

