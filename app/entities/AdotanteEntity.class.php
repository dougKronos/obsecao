<?php 
require_once OBSECAO_DIR.'/app/entities/UsuarioEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/EnderecoEntity.class.php';

class AdotanteEntity {

	private $nAdotanteID;

	private $usuario;

	private $strDetalhesLocal;

	private $strTipoResidencia;

	private $bPossuiCriancas;

	private $bPossuiBichos;

	private $bAdotouAntes;

	private $endereco;

	function __construct(){
		
	}

	//getters
	function getNAdotanteID() {
    	return $this->nAdotanteID;
	}

	function getUsuario() {
    	return $this->usuario;
	}

	function getStrDetalhesLocal() {
    	return $this->strDetalhesLocal;
	}

	function getStrTipoResidencia() {
    	return $this->strTipoResidencia;
	}

	function getBPossuiCriancas() {
    	return $this->bPossuiCriancas;
	}

	function getBPossuiBichos() {
    	return $this->bPossuiBichos;
	}

	function getBAdotouAntes() {
    	return $this->bAdotouAntes;
	}

	function getEndereco() {
    	return $this->endereco;
	}

	//setters
	function setNAdotanteID($nAdotanteID) {
        $this->nAdotanteID = $nAdotanteID;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setStrDetalhesLocal($strDetalhesLocal) {
        $this->strDetalhesLocal = $strDetalhesLocal;
    }

    function setStrTipoResidencia($strTipoResidencia) {
        $this->strTipoResidencia = $strTipoResidencia;
    }

    function setBPossuiCriancas($bPossuiCriancas) {
        $this->bPossuiCriancas = $bPossuiCriancas;
    }

    function setBPossuiBichos($bPossuiBichos) {
        $this->bPossuiBichos = $bPossuiBichos;
    }

    function setBAdotouAntes($bAdotouAntes) {
        $this->bAdotouAntes = $bAdotouAntes;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}
?>