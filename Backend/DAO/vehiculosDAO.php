<?php
class VehiculosDAO {
	public $id;
	public $codigo;
	public $municipio;
	public $furgonetas_camiones;
	public $autobuses;
	public $turismos;
	public $motocicletas;
	public $tractores_industriales;
	public $remolques_semirremolques;
	public $otros;
	public $total;

	public function __construct($id, $codigo, $municipio, $furgonetas_camiones, $autobuses, 
		$turismos, $motocicletas, $tractores_industriales, $remolques_semirremolques, $otros,
		$total) {
		$this->id = $id;
		$this->codigo = $codigo;
		$this->municipio = $municipio;
		$this->furgonetas_camiones = $furgonetas_camiones;
		$this->autobuses = $autobuses;
		$this->turismos = $turismos;
		$this->motocicletas = $motocicletas;
		$this->tractores_industriales = $tractores_industriales;
		$this->remolques_semirremolques = $remolques_semirremolques;
		$this->otros = $otros;
		$this->total = $total;
	}

	//ID
	public function getId() {
	    return $this->id;
	}
	 
	public function setId($id) {
	    $this->id = $id;
	    return $this;
	}

	//CODIGO
	public function getCodigo() {
	    return $this->codigo;
	}
	 
	public function setCodigo($codigo) {
	    $this->codigo = $codigo;
	    return $this;
	}

	//MUNICIPIO
	public function getMunicipio() {
	    return $this->municipio;
	}
	 
	public function setMunicipio($municipio) {
	    $this->municipio = $municipio;
	    return $this;
	}

	//FURGONETAS_CAMIONES
	public function getFurgonetas_camiones() {
	    return $this->furgonetas_camiones;
	}
	 
	public function setFurgonetas_camiones($furgonetas_camiones) {
	    $this->furgonetas_camiones = $furgonetas_camiones;
	    return $this;
	}

	//AUTOBUSES
	public function getAutobuses() {
	    return $this->autobuses;
	}
	 
	public function setAutobuses($autobuses) {
	    $this->autobuses = $autobuses;
	    return $this;
	}

	//TURISMOS
	public function getTurismos() {
	    return $this->turismos;
	}
	 
	public function setTurismos($turismos) {
	    $this->turismos = $turismos;
	    return $this;
	}

	//MOTOCICLETAS
	public function getMotocicletas() {
	    return $this->motocicletas;
	}
	 
	public function setMotocicletas($motocicletas) {
	    $this->motocicletas = $motocicletas;
	    return $this;
	}

	//TRACTORES_INDUSTRIALES
	public function getTractores_industriales() {
	    return $this->tractores_industriales;
	}
	 
	public function setTractores_industriales($tractores_industriales) {
	    $this->tractores_industriales = $tractores_industriales;
	    return $this;
	}

	//REMOLQUES_SEMIRREMOLQUES
	public function getRemolques_semirremolques() {
	    return $this->remolques_semirremolques;
	}
	 
	public function setRemolques_semirremolques($remolques_semirremolques) {
	    $this->remolques_semirremolques = $remolques_semirremolques;
	    return $this;
	}

	//OTROS
	public function getOtros() {
	    return $this->otros;
	}
	 
	public function setOtros($otros) {
	    $this->otros = $otros;
	    return $this;
	}

	//TOTAL
	public function getTotal() {
	    return $this->total;
	}
	 
	public function setTotal($total) {
	    $this->total = $total;
	    return $this;
	}
}
?>