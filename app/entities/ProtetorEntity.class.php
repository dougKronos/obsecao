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
	function getProtetorID() {
    	return $this->nProtetorID;
	}

	function getUsuario() {
    	return $this->usuario;
	}

	function getEndereco() {
    	return $this->endereco;
	}

	function getRealizaEntrega() {
    	return $this->bRealizaEntrega;
	}

	//setters
    function setProtetorID($nProtetorID) {
        $this->nProtetorID = $nProtetorID;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setRealizaEntrega($bRealizaEntrega) {
        $this->bRealizaEntrega = $bRealizaEntrega;
    }

}

?>