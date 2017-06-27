<?php
	
function getAllSpells($sort, $table) {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM spells ORDER BY ". $table ." ". $sort;
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getSpell($id) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM spells WHERE spell_id =:spell_id";
	$query = $db->prepare($sql);
	$query->execute(array(":spell_id"=>$id));

	$db = null;

	return $query->fetch();
	return true;

}


function createSpell() {


	$spell_name = isset($_POST["spell_name"]) ? $_POST['spell_name'] : null;
	$spell_type = isset($_POST["spell_type"]) ? $_POST['spell_type'] : null;
	$spell_description = isset($_POST["spell_description"]) ? $_POST['spell_description'] : null;


	if (strlen($spell_name) == 0 || strlen($spell_description) == 0){
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO spells (spell_name, spell_type, spell_description) VALUES(:spell_name, :spell_type, :spell_description)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':spell_name' => $spell_name,
						 	':spell_type' => $spell_type,
						 	':spell_description' => $spell_description));

	$db = null;

	return true;


}
function editThisSpell(){

	$spell_name = isset($_POST["spell_name"]) ? $_POST['spell_name'] : null;
	$spell_type = isset($_POST["spell_type"]) ? $_POST['spell_type'] : null;
	$spell_description = isset($_POST["spell_description"]) ? $_POST['spell_description'] : null;
	$spell_id = isset($_POST["spell_id"]) ? $_POST['spell_id'] : null;

	if (strlen($spell_name) == 0 || strlen($spell_description) == 0) {
		return false;	
	}


	$db = openDatabaseConnection();

	$sql = "UPDATE spells SET spell_name = :spell_name, spell_type = :spell_type, spell_description = :spell_description 
			WHERE spell_id = :spell_id";
	
	$query = $db -> prepare($sql);
	$query -> execute(array(':spell_name' => $spell_name,
						 	':spell_type' => $spell_type,
						 	':spell_description' => $spell_description,
						 	'spell_id' => $spell_id));


	$db = null;

	return true;
}

function delete($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM spells WHERE spell_id = :spell_id";
	$query = $db->prepare($sql);
	$query->execute(array(":spell_id"=>$id));

	$db = null;

	return true;

}

