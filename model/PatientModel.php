<?php
function getAllPatients($sort, $table) {
	$db = openDatabaseConnection();

	$sql =  "SELECT * FROM patients
	INNER JOIN clients on patients.client_id = clients.client_id
	INNER JOIN species on patients.species_id = species.species_id
	ORDER BY patients.". $table ." ". $sort;
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getPatient($id) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients
	INNER JOIN clients on patients.client_id = clients.client_id
	INNER JOIN species on patients.species_id = species.species_id
	WHERE patient_id =:patient_id ";
	$query = $db->prepare($sql);
	$query->execute(array(":patient_id"=>$id));

	$db = null;

	return $query->fetch();
	return true;

	
}


function createPatient() {

	$patient_name = isset($_POST["patient_name"]) ? $_POST['patient_name'] : null;
	$species_id = isset($_POST["specie_id"]) ? $_POST['specie_id'] : null;
	$patient_gender = isset($_POST["patient_gender"]) ? $_POST['patient_gender'] : null;
	$client_id = isset($_POST["client_id"]) ? $_POST['client_id'] : null;
	$patient_status = isset($_POST["patient_status"])? $_POST['patient_status'] : null;

	if (strlen($patient_name) == 0 || strlen($patient_status) == 0) {
		return false;	
	}


	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, patient_gender, client_id, patient_status) VALUES(:patient_name, :species_id, :patient_gender, :client_id, :patient_status)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':patient_name' => $patient_name,
						 	':species_id' => $species_id,
						 	':patient_gender' => $patient_gender,
						 	':client_id' => $client_id,
						  	':patient_status' => $patient_status));

	$db = null;

	return true;


}
function editThisPatient(){

	$client_id = isset($_POST["client_id"]) ? $_POST['client_id'] : null;
	$patient_name = isset($_POST["patient_name"]) ? $_POST['patient_name'] : null;
	$species_id = isset($_POST["species_id"]) ? $_POST['species_id'] : null;
	$patient_status = isset($_POST["patient_status"])? $_POST['patient_status'] : null;
	$patient_id = isset($_POST["patient_id"])? $_POST['patient_id'] : null;	


	if (strlen($patient_name) == 0 || strlen($patient_status) == 0) {
		return false;	
	}


	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET client_id = :client_id, patient_name = :patient_name, species_id = :species_id, patient_status = :patient_status 
	WHERE patient_id = :patient_id";
	
	$stmt = $db->prepare($sql);
	$stmt->execute(array(
					":client_id" =>$client_id,
					":patient_name" => $patient_name,
					":species_id" => $species_id,
					":patient_status" => $patient_status,	
					":patient_id" => $patient_id
				   ));

	$db = null;

	return true;
}

function deletePatients($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM patients WHERE patient_id=:patient_id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":patient_id"=>$id));

	$db = null;

	return true;

}

