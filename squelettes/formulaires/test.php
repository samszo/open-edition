<?php
/*
include_spip('inc/actions');
include_spip('inc/editer');*/


function formulaires_test_charger_dist() {
	$valeurs = array(
		"la_demo" => ""
	);
	return $valeurs;
}


function formulaires_test_verifier_dist() {

	$erreurs = array();
	
	if( empty($_POST["la_demo"]) )
	{
		$erreurs["la_demo"] = 'Erreur ! Le champ est VIDE ! ';
	}
	return $erreurs;
}



function formulaires_test_traiter_dist() {
	// Effectuer des traitements
	
	// Valeurs de retours
	return array(
		'message_ok' => 'Vous avez écris '.$_POST["la_demo"].'...'
		//'message_erreur' => 'Et mince, une erreur.'
	);
}
