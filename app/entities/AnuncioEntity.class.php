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
	function getAnuncioID() {
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

	function getStatusAprovado() {
    	return $this->bStatusAprovado;
	}

	function getTitulo() {
    	return $this->strTitulo;
	}

	function getDescricao() {
    	return $this->strDescricao;
	}

	function getAdministrador() {
    	return $this->administrador;
	}

	//setters
	function setAnuncioID($nAnuncioID) {
        $this->nAnuncioID = $nAnuncioID;
    }

    function setCao($cao) {
        $this->cao = $cao;
    }

    function setProtetor($protetor) {
        $this->protetor = $protetor;
    }

    function setDataAnuncio($dataAnuncio) {
        $this->dataAnuncio = $dataAnuncio;
    }

    function setStatusAprovado($bStatusAprovado) {
        $this->bStatusAprovado = $bStatusAprovado;
    }

    function setTitulo($strTitulo) {
        $this->strTitulo = $strTitulo;
    }

    function setDescricao($strDescricao) {
        $this->strDescricao = $strDescricao;
    }

    function setAdministrador($administrador) {
        $this->administrador = $administrador;
    }

}

?>