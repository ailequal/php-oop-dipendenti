<?php

	require_once 'Profile.php';

	class ChiefExecutiveOfficer extends Profile {
		private $role;
		
		public function __construct($_name, $_surname, $_identityCard, $_role = 'Chief executive officer') {
			parent::__construct($_name, $_surname, $_identityCard);
			$this->role = $_role;
		}
	}

?>
