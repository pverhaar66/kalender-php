<?php

require(ROOT . "model/monsterModel.php");

function index()
{
	render("monster/Index", 
		array("monsters" => getAllmonsters()));
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