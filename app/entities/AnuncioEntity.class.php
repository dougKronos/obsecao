<?php 
require_once OBSECAO_DIR.'/app/entities/CaoEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/ProtetorEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/AdministradorEntity.class.php';

class AnuncioEntity {

	private $nAnuncioID;

	private $cao;

	private $protetor;

	private $dataAnuncio;

	private $bStatusAprovado;

	private $strTitulo;

	private $strDescricao;

	private $administrador;

	function __construct(){
		
	}

	//getters
	function getNAnuncioID() {
    	return $this->nAnuncioID;
	}

	function getCao() {
    	return $this->cao;
	}

	function getProtetor() {
    	return $this->protetor;
	}

	function getDataAnuncio() {
    	return $this->dataAnuncio;
	}

	function getBStatusAprovado() {
    	return $this->bStatusAprovado;
	}

	function getStrTitulo() {
    	return $this->strTitulo;
	}

	function getStrDescricao() {
    	return $this->strDescricao;
	}

	function getAdministrador() {
    	return $this->administrador;
	}

	//setters
	function setNAnuncioID($nAnuncioID) {
        $this->nAnuncioID = $nAnuncioID;
    }

    function setNao($cao) {
        $this->cao = $cao;
    }

    function setNrotetor($protetor) {
        $this->protetor = $protetor;
    }

    function setDataAnuncio($dataAnuncio) {
        $this->dataAnuncio = $dataAnuncio;
    }

    function setBStatusAprovado($bStatusAprovado) {
        $this->bStatusAprovado = $bStatusAprovado;
    }

    function setStrTitulo($strTitulo) {
        $this->strTitulo = $strTitulo;
    }

    function setStrDescricao($strDescricao) {
        $this->strDescricao = $strDescricao;
    }

    function setAdministrador($administrador) {
        $this->administrador = $administrador;
    }

}

?>