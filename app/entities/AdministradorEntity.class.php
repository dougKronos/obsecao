<?php

require_once OBSECAO_DIR.'/app/entities/UsuarioEntity.class.php';

class AdministradorEntity {

	private $nAdministradorID;

	private $usuario;

	private $nNivelGerencial;

	function __construct(){
		
	}

	//getters
	function getNAdministradorID() {
    	return $this->nAdministradorID;
	}

	function getUsuario() {
    	return $this->usuario;
	}

	function getNNivelGerencial() {
    	return $this->nNivelGerencial;
	}

	//setters
	function setNAdministradorID($nAdministradorID) {
        $this->nAdministradorID = $nAdministradorID;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setNNivelGerencial($nNivelGerencial) {
        $this->nNivelGerencial = $nNivelGerencial;
    }
}

?>