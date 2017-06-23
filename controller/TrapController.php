<?php

require(ROOT . "model/trapModel.php");

function index()
{

	if (isset($_GET["table"])) {

	if ($_GET["table"] == "trap") {
		$table = "trap_name";

		}else if($_GET["table"] == "type"){
			$table = "trap_type";
}
}else{
	$table = "trap_name";
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

	render("trap/Index", 
		array("traps" => getAllTraps($sort, $table),
			"sort" => $sort == "ASC" ? "DESC" : "ASC"

	));
}

function create()
{
	render("trap/createTrap");
	
}

function createSave()
{

 	if (!createTrap()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "trap/index");
}


function deleteTrap($id)
{
	if (!delete($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "trap/index");
	
}

function readTrap($id)
{
	render("trap/readTrap" ,array('trap' => gettrap($id)));

}

function editTrap($id)
{
	render("trap/editTrap", array('trap' => gettrap($id)));
}

function editSave() {

	 	if (!editThisTrap()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "trap/index");
}

function htpygo(){
	render("monster/htpygo");
}

