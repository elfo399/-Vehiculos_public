<?php

require "DAO/vehiculosDAO.php";
require_once(__DIR__."/Config/DB_Handler.php");

class RetriveRecordFromDBCommandExecutor extends DB_Handler {

	public function __construct() {
		parent::__construct();
	}
	
	public function handleWorkflow($id, $codice) {	
		if($codice == null) {
			$this->startConnection();

			$sql = "SELECT * FROM vehiculos WHERE Id='". $id ."'";

			$select = $this->getConnection()->query($sql);
   
        	$this->closeconnection();

        	$stack = array();

        	while($row = mysqli_fetch_array($select, MYSQLI_NUM)){
        		$vehiculosDAO = new VehiculosDAO($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
        		array_push($stack, $vehiculosDAO);
        	}
        	return $stack;
		} else {
			$this->startConnection();

			$sql = "SELECT * FROM vehiculos WHERE Id='". $id ."' and Codigo='". $codice ."'";

			$select = $this->getConnection()->query($sql);
   
        	$this->closeconnection();

        	while($row = mysqli_fetch_array($select, MYSQLI_NUM)){
        		$vehiculosDAO = new VehiculosDAO($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
        	}

        	return $vehiculosDAO;
		}
		
	}
}

?>