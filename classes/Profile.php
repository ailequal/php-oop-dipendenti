<?php

	class Profile {
		// attributes
		protected $name;
		protected $surname;
		protected $identityCard;
		protected $fiscalCode;
		protected $cellphoneNumber;
		protected $dateOfBirth;
		protected $town;
		protected $info;

		// functions
		// construct
		public function __construct($_name, $_surname, $_identityCard) {

			if (!is_string($_name) || empty($_name)) {
				throw new Exception('Wrong value');
			}

			if (!is_string($_surname) || empty($_surname)) {
				throw new Exception('Wrong value');
			}

			if (!is_string($_identityCard) || empty($_identityCard) || strlen($_identityCard) !== 10) {
				throw new Exception('Wrong value');
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
				throw new Exception('Wrong value');
			}

			$this->name = $name;
		}

		// surname
		public function getSurname() {
			return $this->surname;
		}

		public function setSurname($surname) {
			if (!is_string($surname) || empty($surname)) {
				throw new Exception('Wrong value');
			}

			$this->surname = $surname;
		}

		// identityCard
		public function getIdentityCard() {
			return $this->identityCard;
		}

		public function setIdentityCard($identityCard) {
			if (!is_string($identityCard) || empty($identityCard) || strlen($identityCard) !== 10) {
				throw new Exception('Wrong value');
			}

			$this->identityCard = $identityCard;
		}

		// fiscalCode
		public function getFiscalCode() {
			return $this->fiscalCode;
		}

		public function setFiscalCode($fiscalCode) {
			if (!is_string($fiscalCode) || empty($fiscalCode) || strlen($fiscalCode) !== 14) {
				throw new Exception('Wrong value');
			}

			$this->fiscalCode = $fiscalCode;
		}

		// cellphoneNumber
		public function getCellphoneNumber() {
			return $this->cellphoneNumber;
		}

		public function setCellphoneNumber($cellphoneNumber) {
			if (!is_string($cellphoneNumber) || empty($cellphoneNumber) || strlen($cellphoneNumber) !== 10) {
				throw new Exception('Wrong value');
			}

			$this->cellphoneNumber = $cellphoneNumber;
		}

		// dateOfBirth
		public function getDateOfBirth() {
			return $this->dateOfBirth;
		}

		public function setDateOfBirth($dateOfBirth) {
			if (!is_string($dateOfBirth) || empty($dateOfBirth) || strlen($dateOfBirth) !== 4) {
				throw new Exception('Wrong value');
			}

			$this->dateOfBirth = $dateOfBirth;
		}

		// town
		public function getTown() {
			return $this->town;
		}

		public function setTown($town) {
			if (!is_string($town) || empty($town)) {
				throw new Exception('Wrong value');
			}

			$this->town = $town;
		}

		// age
		public function getAge($year) {
			return $year - $this->dateOfBirth;
		}

		// info
		public function getInfo() {
			return $this->info;
		}

		public function setInfo($year) {
			$name = '<h2>Name: ' . $this->name . '</h2>';
			$surname = '<h2>Surname: ' . $this->surname . '</h2>';
			$identityCard = '<h3>Identity card: ' . $this->identityCard . '</h3>';
			$fiscalCode = '<h3>Fiscal code: ' . $this->fiscalCode . '</h3>';
			$cellphoneNumber = '<h3>Cellphone number: ' . $this->cellphoneNumber . '</h3>';
			$dateOfBirth = '<h3>Date of birth: ' . $this->dateOfBirth . '</h3>';
			$town = '<h3>Town: ' . $this->town . '</h3>';
			$age = '<h3>Age: ' . $this->getAge($year) . '</h3>';
			$this->info = $name . $surname . $identityCard . $fiscalCode . $cellphoneNumber . $dateOfBirth .$town . $age;
		}
	}

?>