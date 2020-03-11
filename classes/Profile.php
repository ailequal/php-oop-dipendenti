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

			if (!is_string($_name) || empty($_name)) {
				die('Wrong value');
			}

			if (!is_string($_surname) || empty($_surname)) {
				die('Wrong value');
			}

			if (!is_string($_identityCard) || empty($_identityCard) || strlen($_identityCard) !== 10) {
				die('Wrong value');
			}

			$this->name = $_name;
			$this->surname = $_surname;
			$this->identityCard = $_identityCard;
		}

		// name
		public function getName() {
			return $this->name;
		}

		public function setName($name) {
			if (!is_string($name) || empty($name)) {
				die('Wrong value');
			}

			$this->name = $name;
		}

		// surname
		public function getSurname() {
			return $this->surname;
		}

		public function setSurname($surname) {
			if (!is_string($surname) || empty($surname)) {
				die('Wrong value');
			}

			$this->surname = $surname;
		}

		// identityCard
		public function getIdentityCard() {
			return $this->identityCard;
		}

		public function setIdentityCard($identityCard) {
			if (!is_string($identityCard) || empty($identityCard) || strlen($identityCard) !== 10) {
				die('Wrong value');
			}

			$this->identityCard = $identityCard;
		}

		// fiscalCode
		public function getFiscalCode() {
			return $this->fiscalCode;
		}

		public function setFiscalCode($fiscalCode) {
			if (!is_string($fiscalCode) || empty($fiscalCode) || strlen($fiscalCode) !== 14) {
				die('Wrong value');
			}

			$this->fiscalCode = $fiscalCode;
		}

		// cellphoneNumber
		public function getCellphoneNumber() {
			return $this->cellphoneNumber;
		}

		public function setCellphoneNumber($cellphoneNumber) {
			if (!is_string($cellphoneNumber) || empty($cellphoneNumber) || strlen($cellphoneNumber) !== 10) {
				die('Wrong value');
			}

			$this->cellphoneNumber = $cellphoneNumber;
		}

		// dateOfBirth
		public function getDateOfBirth() {
			return $this->dateOfBirth;
		}

		public function setDateOfBirth($dateOfBirth) {
			if (!is_string($dateOfBirth) || empty($dateOfBirth)) {
				die('Wrong value');
			}

			$this->dateOfBirth = $dateOfBirth;
		}

		// town
		public function getTown() {
			return $this->town;
		}

		public function setTown($town) {
			if (!is_string($town) || empty($town)) {
				die('Wrong value');
			}

			$this->town = $town;
		}
	}

?>