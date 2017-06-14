<?php

function getAllmonsters() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM monsters";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getmonster($id) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM monsters WHERE monster_id =:monster_id";
	$query = $db->prepare($sql);
	$query->execute(array(":monster_id"=>$id));

	$db = null;

	return $query->fetch();
	return true;

	
}


function createmonster() {


	$monster_name = isset($_POST["monster_name"]) ? $_POST['monster_name'] : null;
	$monster_attribute = isset($_POST["monster_attribute"]) ? $_POST['monster_attribute'] : null;
	$monster_type1 = isset($_POST["monster_type1"]) ? $_POST['monster_type1'] : null;
	$monster_type2 = isset($_POST["monster_type2"]) ? $_POST['monster_type2'] : null;
	$monster_type3 = isset($_POST["monster_type3"]) ? $_POST['monster_type3'] : null;
	$monster_description = isset($_POST["monster_description"]) ? $_POST['monster_description'] : null;


	if (strlen($monster_name) == 0 || strlen($monster_attribute) == 0 || strlen($monster_description) == 0) {
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO monsters (monster_name, monster_attribute, monster_type1, monster_type2, monster_type3, monster_description) VALUES(:monster_name, :monster_attribute, :monster_type1, :monster_type2, :monster_type3, :monster_description)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':monster_name' => $monster_name,
						 	':monster_attribute' => $monster_attribute,
						 	':monster_type1' => $monster_type1,
						 	':monster_type2' => $monster_type2,
						 	':monster_type3' => $monster_type3,
						 	':monster_description' => $monster_description));

	$db = null;

	return true;


}
function editThismonster(){

	$monster_name = isset($_POST["monster_name"]) ? $_POST['monster_name'] : null;
	$monster_type = isset($_POST["monster_type"]) ? $_POST['monster_type'] : null;
	$monster_id = isset($_POST["monster_id"])? $_POST['monster_id'] : null;	

	if (strlen($monster_name) == 0 || strlen($monster_type) == 0) {
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE monsters SET monster_name = :monster_name, monster_type = :monster_type WHERE monster_id = :monster_id";
	
	$stmt = $db->prepare($sql);
	$stmt->execute(array(
					":monster_name" => $monster_name,
					":monster_type" => $monster_type,		
					":monster_id" => $monster_id));

	$db = null;

	return true;
}

function delete($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM monsters WHERE monster_id = :monster_id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":monster_id"=>$id));

	$db = null;

	return true;

}

