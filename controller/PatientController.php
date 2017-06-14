<?php

require(ROOT . "model/SpecieModel.php");
require(ROOT . "model/ClientModel.php");
require(ROOT . "model/PatientModel.php");

function index()
{
if (isset($_GET["table"])) {

	if ($_GET["table"] == "patients") {
		$table = "patient_name";

		}else if($_GET["table"] == "species"){
			$table = "species_id";

		}else if($_GET["table"] == "gender"){
			$table = "patient_gender";
			
		}else if($_GET["table"] == "client"){
			$table = "client_id";
	}

}else{
	$table = "patient_name";
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

	render("Patient/Index", 
		array("patients" => getAllPatients($sort, $table), 
			"sort" => $sort == "ASC" ? "DESC" : "ASC"

	));
}

function create()
{
	render("Patient/createPatient", 
		array("species" => getAllSpecies(),
			  "clients" => getALlClients()
			  ));
	
}

function createSave()
{


if (!createPatient()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "patient/index");
}


function deletePatient($id)
{
	if (!deletePatients($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "patient/index");
	
}

function readPatient($id)
{
	render("patient/readPatient" ,array('patient' => getPatient($id)));
}

function editPatient($id)
{
	render("patient/editPatient", array('patient' => getPatient($id),
											"species" => getAllSpecies(),
			  								"clients" => getALlClients()));
}

function editSave() {

	 	if (!editThisPatient()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "patient/index");
}