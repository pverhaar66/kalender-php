<?php
	
function getAllTraps($sort, $table) {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM traps ORDER BY ". $table ." ". $sort;
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getTrap($id) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM traps WHERE trap_id =:trap_id";
	$query = $db->prepare($sql);
	$query->execute(array(":trap_id"=>$id));

	$db = null;

	return $query->fetch();
	return true;

	
}


function createTrap() {


	$trap_name = isset($_POST["trap_name"]) ? $_POST['trap_name'] : null;
	$trap_type = isset($_POST["trap_type"]) ? $_POST['trap_type'] : null;
	$trap_description = isset($_POST["trap_description"]) ? $_POST['trap_description'] : null;


	if (strlen($trap_name) == 0 || strlen($trap_description) == 0){
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO traps (trap_name, trap_type, trap_description) VALUES(:trap_name, :trap_type, :trap_description)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':trap_name' => $trap_name,
						 	':trap_type' => $trap_type,
						 	':trap_description' => $trap_description));

	$db = null;

	return true;


}
function editThisTrap(){

	$trap_name = isset($_POST["trap_name"]) ? $_POST['trap_name'] : null;
	$trap_type = isset($_POST["trap_type"]) ? $_POST['trap_type'] : null;
	$trap_description = isset($_POST["trap_description"]) ? $_POST['trap_description'] : null;
	$trap_id = isset($_POST["trap_id"]) ? $_POST['trap_id'] : null;

	if (strlen($trap_name) == 0 || strlen($trap_description) == 0) {
		return false;	
	}


	$db = openDatabaseConnection();

	$sql = "UPDATE traps SET trap_name = :trap_name, trap_type = :trap_type, trap_description = :trap_description 
			WHERE trap_id = :trap_id";
	
	$query = $db -> prepare($sql);
	$query -> execute(array(':trap_name' => $trap_name,
						 	':trap_type' => $trap_type,
						 	':trap_description' => $trap_description,
						 	'trap_id' => $trap_id));


	$db = null;

	return true;
}

function delete($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM traps WHERE trap_id = :trap_id";
	$query = $db->prepare($sql);
	$query->execute(array(":trap_id"=>$id));

	$db = null;

	return true;

}

