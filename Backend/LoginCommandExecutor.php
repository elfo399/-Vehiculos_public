<?php

require "DAO/utenteDAO.php";
require_once(__DIR__."/Config/DB_Handler.php");

class LoginCommandExecutor extends DB_Handler {
	private $result;

	public function __construct() {
		parent::__construct();
		$this->result = array('result' => true, 'comment' => "");
	}

	public function handleWorkflow($email, $password) {
		$this->startConnection();

		$sql = "SELECT * FROM utente WHERE mail ='". $email ."' AND password ='". $password ."'";

		$select = $this->getConnection()->query($sql);
   
        $this->closeconnection();

        if (mysqli_num_rows($select) > 0) {
			$row = $select->fetch_assoc();
        	$utenteDAO = new UtenteDAO($row['mail'], $row['nome'], $row['cognome'], "");
        	$utenteDAO->setRuolo($row['ruolo']);

        	$_SESSION['mail'] = $row['mail'];
      		$_SESSION['ruolo'] = $row['ruolo'];
        } else {
        	$this->result = array('result' => false, 'comment' => "Correo electrónico o contraseña no válidos");
        }

        return $this->result;
	}
}
?>