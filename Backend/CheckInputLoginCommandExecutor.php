<?php

require_once(__DIR__."/Config/DB_Handler.php");

class CheckInputLoginCommandExecutor extends DB_Handler {

	private $result;

	public function __construct() {
		parent::__construct();
		$this->result = array('result' => true, 'comment' => "");
	}

	public function handleWorkflow($email) {
		if ($this->checkEmail($email)) {
			return $this->result;
		}
		return $this->result;
	}

	private function checkEmail($email) {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$this->result = array('result' => false, 'comment' => "Correo electrónico no válido");
		}

		if ($this->result['result']) {
			return false;
		}

		return true;
	}
}
?>