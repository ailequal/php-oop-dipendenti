<?php

	require_once __DIR__ . '/classes/Profile.php';
	require_once __DIR__ . '/classes/ChiefExecutiveOfficer.php';

	// amazon team building
	// chief executive officer
	$jeffBezos = new ChiefExecutiveOfficer('Jeff', 'Bezos', 'IFJ32LHSI3');

	var_dump($jeffBezos);

	var_dump($jeffBezos->getName());
	$jeffBezos->setName('Tom');
	var_dump($jeffBezos->getName());

	$jeffBezos->setFiscalCode('ER96FHSDXDSAW3');
	var_dump($jeffBezos->getFiscalCode());
	$jeffBezos->setFiscalCode('RTBS5SD093JDS1');
	var_dump($jeffBezos->getFiscalCode());

?>
