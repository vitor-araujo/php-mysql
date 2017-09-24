<?php 

function dd($valueToBeShown) {
	echo '<pre>';
	var_dump($valueToBeShown);
	echo "</pre>";

};


function isOfAge($ageOfSomeone) {
	if ($ageOfSomeone > 18) {
		return true;
	} else {
		return false;
	}
};


function fetchAllStuff($pdo) {
	
	$statment = $pdo->prepare('select * from todos');

	$statment->execute();

	return	$statment->fetchAll(PDO::FETCH_CLASS, 'Task');
}


 ?>