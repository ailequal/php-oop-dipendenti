<?php

	require_once __DIR__ . '/classes/Profile.php';
	require_once __DIR__ . '/classes/ChiefExecutiveOfficer.php';

	// amazon team building
	// ChiefExecutiveOfficer
	var_dump('ChiefExecutiveOfficer');
	try {
		$jeffBezos = new ChiefExecutiveOfficer('Jeff', 'Bezos', 'IFJ32LHSI3');
	} catch (Exception $e) {
		echo 'Exception: ' . $e->getMessage();
	}
	$jeffBezos->setFiscalCode('ER96FHSDXDSAW3');
	$jeffBezos->setCellphoneNumber('2376899754');
	$jeffBezos->setDateOfBirth('1964');
	$jeffBezos->setTown('Albuquerque');
	$jeffBezos->setShares('51%');
	echo $jeffBezos->getInfo(2020);
	try {
		$jeffBezos->setFiscalCode('ER96HSDXDSAWE3');
	 } catch (Exception $e) {
		echo 'Exception: ' . $e->getMessage();
	 }

?>
