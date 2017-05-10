<?php

require_once OBSECAO_DIR.'/app/entities/UsuarioEntity.class.php';

class AdministradorEntity {

	private $nAdministradorID;

	private $usuario;

	private $nNivelGerencial;

	function __construct(){
		
	}

	//getters
	function getAdministradorID() {
    	return $this->nAdministradorID;
	}

	function getUsuario() {
    	return $this->usuario;
	}

	function getNivelGerencial() {
    	return $this->nNivelGerencial;
	}

	//setters
	function setAdministradorID($nAdministradorID) {
        $this->nAdministradorID = $nAdministradorID;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setNivelGerencial($nNivelGerencial) {
        $this->nNivelGerencial = $nNivelGerencial;
    }
}

?>