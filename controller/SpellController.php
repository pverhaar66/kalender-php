<?php

require(ROOT . "model/monsterModel.php");

function index()
{

	if (isset($_GET["table"])) {

	if ($_GET["table"] == "monster") {
		$table = "monster_name";

		}else if($_GET["table"] == "attribute"){
			$table = "monster_attribute";

		}else if($_GET["table"] == "type"){
			$table = "monster_type1";
			
		}else if($_GET["table"] == "level"){
			$table = "monster_level";
	}

}else{
	$table = "monster_name";
}



if (isset($_GET["sort"])) {

if ($_GET["sort"] == "ASC") {
		$sort = "ASC";
	}else{
		$sort = "DESC";
	}
}else{
	$sort = "ASC";
}

	render("monster/Index", 
		array("monsters" => getAllMonsters($sort, $table),
			"sort" => $sort == "ASC" ? "DESC" : "ASC"

	));
}

function create()
{
	render("monster/createmonster");
	
}

function createSave()
{

 	if (!createmonster()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "monster/index");
}


function deletemonster($id)
{
	if (!delete($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "monster/index");
	
}

function readmonster($id)
{
	render("monster/readmonster" ,array('monster' => getmonster($id)));

}

function editmonster($id)
{
	render("monster/editmonster", array('monster' => getmonster($id)));
}

function editSave() {

	 	if (!editThismonster()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "monster/index");
}

function htpygo(){
	render("monster/htpygo");
}

