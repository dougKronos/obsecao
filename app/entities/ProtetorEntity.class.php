<?php 
require_once OBSECAO_DIR.'/app/entities/UsuarioEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/EnderecoEntity.class.php';

class ProtetorEntity {

	private $nProtetorID;

	private $usuario;

	private $endereco;

	private $bRealizaEntrega;

	function __construct(){
		
	}

	//getters
	function getNProtetorID() {
    	return $this->nProtetorID;
	}

	function getUsuario() {
    	return $this->usuario;
	}

	function getEndereco() {
    	return $this->endereco;
	}

	function getBRealizaEntrega() {
    	return $this->bRealizaEntrega;
	}

	//setters
    function setNProtetorID($nProtetorID) {
        $this->nProtetorID = $nProtetorID;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setBRealizaEntrega($bRealizaEntrega) {
        $this->bRealizaEntrega = $bRealizaEntrega;
    }

}

?>