<?php

require(ROOT . "model/SpecieModel.php");

function index()
{
	render("specie/index", 
		array("species" => getAllSpecies()));
}

function create()
{
	render("specie/createSpecie");
	
}

function createSave()
{

 	if (!createSpecie()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "specie/index");
}


function deleteSpecie($id)
{
	if (!deleteSpecies($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "specie/index");
	
}

function readSpecie($id)
{
	render("specie/readSpecie" ,array('specie' => getSpecie($id)));

}

function editSpecie($id)
{
	render("specie/editSpecie", array('specie' => getSpecie($id)));
}

function editSave() {

	 	if (!editThisSpecie()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "specie/index");
}
