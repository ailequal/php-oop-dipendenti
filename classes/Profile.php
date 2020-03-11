<?php

	class Profile {
		private $name;
		private $surname;
		private $identityCard;
		private $fiscalCode;
		private $cellphoneNumber;
		private $dateOfBirth;
		private $town;

		public function __construct($_name, $_surname, $_identityCard) {
			$this->name = $_name;
			$this->surname = $_surname;
			$this->identityCard = $_identityCard;
		}
	}

?>