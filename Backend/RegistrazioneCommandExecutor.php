<?php

require "DAO/utenteDAO.php";
require_once(__DIR__."/Config/DB_Handler.php");


class RegistrazioneCommandExecutor extends DB_Handler {

	public function __construct() {
		parent::__construct();
	}

	public function handleWorkflow($nome, $cognome, $email, $password) {
		$utenteDAO = new UtenteDAO($email, $nome, $cognome, $password);

		$this->startConnection();

		$sql = "INSERT INTO utente (mail, nome, cognome, password, ruolo) VALUES ('". $utenteDAO->getMail() ."', '". $utenteDAO->getNome() ."', '". $utenteDAO->getCognome() ."', '". $utenteDAO->getPassword() ."', 'U')";

		$this->getConnection()->query($sql);
        
        $this->closeconnection();
	}
}


?>