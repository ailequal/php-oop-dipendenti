<?php

	require_once __DIR__ . '/classes/Profile.php';
	require_once __DIR__ . '/classes/ChiefExecutiveOfficer.php';
	require_once __DIR__ . '/classes/Developer.php';
	require_once __DIR__ . '/classes/BusinessConsultant.php';
	require_once __DIR__ . '/classes/DeliveryMan.php';
	require_once __DIR__ . '/classes/WarehouseWorker.php';
	require_once __DIR__ . '/classes/SystemAdministrator.php';

	// amazon team building
	// ChiefExecutiveOfficer
	var_dump('ChiefExecutiveOfficer');
	try {
		$jeffBezos = new ChiefExecutiveOfficer('Jeff', 'Bezos', 'IFJ32LHSI3');
	} catch (Exception $e) {
		echo 'Exception: ' . $e->getMessage();
	}
	$jeffBezos->setFiscalCode('BR96FHSDXDSAW3');
	$jeffBezos->setCellphoneNumber('2376899754');
	$jeffBezos->setDateOfBirth('1964');
	$jeffBezos->setTown('Albuquerque');
	$jeffBezos->setShares('51%');
	$jeffBezos->setInfo(2020);
	echo $jeffBezos->getInfo();

	//  Developer
	var_dump('Developer');
	try {
		$lucasSmith = new Developer('Lucas', 'Smith', 'R41QA3SD8O');
	} catch (Exception $e) {
		echo 'Exception: ' . $e->getMessage();
	}
	$lucasSmith->setFiscalCode('9TR7DHGBFMCD3W');
	$lucasSmith->setCellphoneNumber('2349800761');
	$lucasSmith->setDateOfBirth('1995');
	$lucasSmith->setTown('California');
	$lucasSmith->setLanguages('HTML, CSS, JavaScript');
	$lucasSmith->setSection('Front-end web development');
	$lucasSmith->setInfo(2020);
	echo $lucasSmith->getInfo();

?>
