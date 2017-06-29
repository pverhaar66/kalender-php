<?php

require(ROOT . "model/spellModel.php");

function index()
{

	if (isset($_GET["table"])) {

	if ($_GET["table"] == "spell") {
		$table = "spell_name";

		}else if($_GET["table"] == "type"){
			$table = "spell_type";
}
}else{
	$table = "spell_name";
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

	render("spell/Index", 
		array("spells" => getAllspells($sort, $table),
			"sort" => $sort == "ASC" ? "DESC" : "ASC"

	));
}

function spellSearch()
{

	if (isset($_GET["table"])) {

	if ($_GET["table"] == "spell") {
		$table = "spell";

		}else if($_GET["table"] == "type"){
			$table = "type";
	}

}else{
	$table = "spell";
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


$search = null;
if (isset($_GET["search"])) {

	$search = $_GET["search"];
}

 		render("spell/index",
 			array("spells" => searchSpell($search),
 				"sort" => $sort == "ASC" ? "DESC" : "ASC"

 			));
}


function create()
{
	render("spell/createspell");
	
}

function createSave()
{

 	if (!createspell()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "spell/index");
}


function deletespell($id)
{
	if (!delete($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "spell/index");
	
}

function readspell($id)
{
	render("spell/readspell" ,array('spell' => getspell($id)));

}

function editspell($id)
{
	render("spell/editspell", array('spell' => getspell($id)));
}

function editSave() {

	 	if (!editThisspell()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "spell/index");
}

function htpygo(){
	render("spell/htpygo");
}

