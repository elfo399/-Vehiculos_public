<?php

class UtenteDAO {
	
	private $mail;
	private $nome;
	private $cognome;
	private $password;
	private $ruolo;
	
	public function __construct($mail, $nome, $cognome, $password) {
		$this->mail = $mail;
		$this->nome = $nome;
		$this->cognome = $cognome;
		$this->password = $password;
	}
	
	public function getMail()
	{
	    return $this->mail;
	}
	 
	public function setMail($mail)
	{
	    $this->mail = $mail;
	    return $this;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	 
	public function setNome($nome)
	{
	    $this->nome = $nome;
	    return $this;
	}

	public function getCognome()
	{
	    return $this->cognome;
	}
	 
	public function setCognome($cognome)
	{
	    $this->cognome = $cognome;
	    return $this;
	}

	public function getPassword()
	{
	    return $this->password;
	}
	 
	public function setPassword($password)
	{
	    $this->password = $password;
	    return $this;
	}

	public function getRuolo()
	{
	    return $this->ruolo;
	}
	 
	public function setRuolo($ruolo)
	{
	    $this->ruolo = $ruolo;
	    return $this;
	}

}

?>