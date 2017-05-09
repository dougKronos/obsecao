<?php 
require_once OBSECAO_DIR.'/app/entities/AnuncioEntity.class.php';

class RecusaEntity {

	private $nRecusaID;

	private $strTitulo;

	private $strDescricao;

	private $anuncio;

	function __construct(){
		
	}

	//getters
	function getNRecusaID() {
    	return $this->nRecusaID;
	}

	function getStrTitulo() {
    	return $this->strTitulo;
	}

	function getStrDescricao() {
    	return $this->strDescricao;
	}

	function getAnuncio() {
    	return $this->anuncio;
	}

	//setters
    function setNRecusaID($nRecusaID) {
        $this->nRecusaID = $nRecusaID;
    }

    function setStrTitulo($strTitulo) {
        $this->strTitulo = $strTitulo;
    }

    function setStrDescricao($strDescricao) {
        $this->strDescricao = $strDescricao;
    }

    function setAnuncio($anuncio) {
        $this->anuncio = $anuncio;
    }
}

?>