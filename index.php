<?php

	require_once __DIR__ . '/classes/Profile.php';
	require_once __DIR__ . '/classes/ChiefExecutiveOfficer.php';

	// amazon team building
	// ChiefExecutiveOfficer
	var_dump('ChiefExecutiveOfficer');
	$jeffBezos = new ChiefExecutiveOfficer('Jeff', 'Bezos', 'IFJ32LHSI3');
	$jeffBezos->setFiscalCode('ER96FHSDXDSAW3');
	$jeffBezos->setCellphoneNumber('2376899754');
	$jeffBezos->setDateOfBirth('12-01-1964');
	$jeffBezos->setTown('Albuquerque');
	$jeffBezos->setShares('51%');
	echo $jeffBezos->getInfo();

?>
