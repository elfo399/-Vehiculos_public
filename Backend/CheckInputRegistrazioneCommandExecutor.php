<?php

require_once(__DIR__."/Config/DB_Handler.php");

class CheckInputRegistrazioneCommandExecutor extends DB_Handler {
	
	private $result;

	public function __construct() {
		parent::__construct();
		$this->result = array('result' => true, 'comment' => "");
	}

	public function handleWorkflow($email, $password, $Confirm) {

		
		if ($this->checkEmail($email)) {
			return $this->result;
		}

		if ($this->checkPassword($password, $Confirm)) {
			return $this->result;
		}

		return $this->result;
	}

	private function checkEmail($email) {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$this->result = array('result' => false, 'comment' => "Correo electrónico no válido");
		}

		$this->startConnection();

		$sql = "SELECT mail FROM utente WHERE mail ='". $email ."'";

		$result = $this->getConnection()->query($sql);
        
        $this->closeconnection();

        if (mysqli_num_rows($result)) {
        	$this->result = array('result' => false, 'comment' => "Correo electrónico ya existente");
        }

		if ($this->result['result']) {
			return false;
		}

		return true;
	}

	private function checkPassword($password, $Confirm) {
		if (strcmp($password, $Confirm)) {
			$this->result = array('result' => false, 'comment' => "Diferentes contraseñas");
			return false;
		}

		if (strlen($password) > 32) {
			$this->result = array('result' => false, 'comment' => "Contraseña demasiado larga");
			return false;
		}

		if (strlen($password) < 6) {
			$this->result = array('result' => false, 'comment' => "Contraseña demasiado corta");
			return false;
		}

		if(!preg_match('/[A-Z]/', $password)) {
 			$this->result = array('result' => false, 'comment' => "Contraseña ingresada sin mayúscula");
 			return false;
		}
 
		if (!preg_match('/[0-9]/', $password)) {
			$this->result = array('result' => false, 'comment' => "Contraseña ingresada sin número");
			return false;
		}

		if (!preg_match('/[\'^£$%&*()}{@#~?>!<>,|=_+¬-]/', $password)) {
			$this->result = array('result' => false, 'comment' => "Contraseña ingresada sin caracteres especiales");
			return false;
		}

		return true;
	}
}

?>