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
	function getAdotanteID() {
    	return $this->nAdotanteID;
	}

	function getUsuario() {
    	return $this->usuario;
	}

	function getDetalhesLocal() {
    	return $this->strDetalhesLocal;
	}

	function getTipoResidencia() {
    	return $this->strTipoResidencia;
	}

	function getPossuiCriancas() {
    	return $this->bPossuiCriancas;
	}

	function getPossuiBichos() {
    	return $this->bPossuiBichos;
	}

	function getAdotouAntes() {
    	return $this->bAdotouAntes;
	}

	function getEndereco() {
    	return $this->endereco;
	}

	//setters
	function setAdotanteID($nAdotanteID) {
        $this->nAdotanteID = $nAdotanteID;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setDetalhesLocal($strDetalhesLocal) {
        $this->strDetalhesLocal = $strDetalhesLocal;
    }

    function setTipoResidencia($strTipoResidencia) {
        $this->strTipoResidencia = $strTipoResidencia;
    }

    function setPossuiCriancas($bPossuiCriancas) {
        $this->bPossuiCriancas = $bPossuiCriancas;
    }

    function setPossuiBichos($bPossuiBichos) {
        $this->bPossuiBichos = $bPossuiBichos;
    }

    function setAdotouAntes($bAdotouAntes) {
        $this->bAdotouAntes = $bAdotouAntes;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}
?>