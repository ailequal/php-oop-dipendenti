<?php

	require_once 'Profile.php';

	class Developer extends Profile {
		// attributes
		protected $role;
		protected $languages;
		protected $section;
		
		// functions
		// construct
		public function __construct($_name, $_surname, $_identityCard, $_role = 'Developer') {
			parent::__construct($_name, $_surname, $_identityCard);

			if (!is_string($_role) || empty($_role)) {
				throw new Exception('Wrong value');
			}

			$this->role = $_role;
		}

		// role
		public function getRole() {
			return $this->role;
		}

		public function setRole($role) {
			if (!is_string($role) || empty($role)) {
				throw new Exception('Wrong value');
			}

			$this->role = $role;
		}

		// languages
		public function getLanguages() {
			return $this->languages;
		}

		public function setLanguages($languages) {
			if (!is_string($languages) || empty($languages)) {
				throw new Exception('Wrong value');
			}

			$this->languages = $languages;
		}

		// section
		public function getSection() {
			return $this->section;
		}

		public function setSection($section) {
			if (!is_string($section) || empty($section)) {
				throw new Exception('Wrong value');
			}

			$this->section = $section;
		}

		// info
		public function getInfo() {
			return $this->info;
		}

		public function setInfo($year) {
			parent::setInfo($year);
			$role = '<h3>Role: ' . $this->role . '</h3>';
			$languages = '<h3>Languages: ' . $this->languages . '</h3>';
			$section = '<h3>Section: ' . $this->section . '</h3>';
			$this->info .= $role . $languages . $section;
		}
	}

?>
