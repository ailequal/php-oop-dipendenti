<?php

	require_once 'Profile.php';

	class Developer extends Profile {
		// attributes
		private $role;
		private $shares;
		
		// functions
		// construct
		public function __construct($_name, $_surname, $_identityCard, $_role = 'Chief executive officer') {
			parent::__construct($_name, $_surname, $_identityCard);

			if (!is_string($_role) || empty($_role)) {
				die('Wrong value');
			}

			$this->role = $_role;
		}

		// role
		public function getRole() {
			return $this->role;
		}

		public function setRole($role) {
			if (!is_string($role) || empty($role)) {
				die('Wrong value');
			}

			$this->role = $role;
		}

		// shares
		public function getShares() {
			return $this->shares;
		}

		public function setShares($shares) {
			if (!is_string($shares) || empty($shares)) {
				die('Wrong value');
			}

			$this->shares = $shares;
		}
	}

?>
