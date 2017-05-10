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
	function getRecusaID() {
    	return $this->nRecusaID;
	}

	function getTitulo() {
    	return $this->strTitulo;
	}

	function getDescricao() {
    	return $this->strDescricao;
	}

	function getAnuncio() {
    	return $this->anuncio;
	}

	//setters
    function setRecusaID($nRecusaID) {
        $this->nRecusaID = $nRecusaID;
    }

    function setTitulo($strTitulo) {
        $this->strTitulo = $strTitulo;
    }

    function setDescricao($strDescricao) {
        $this->strDescricao = $strDescricao;
    }

    function setAnuncio($anuncio) {
        $this->anuncio = $anuncio;
    }
}

?>