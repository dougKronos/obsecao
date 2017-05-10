<?php 
require_once OBSECAO_DIR.'/app/entities/AdministradorEntity.class.php';

class noticiaEntity {

	private $nNoticiaID;

	private $strTopico;

	private $strDescricao;

	private $administrador;

	private $dataPublicacao;

	function __construct(){
		
	}

	//getters
	function getNoticiaID() {
    	return $this->nNoticiaID;
	}

	function getTopico() {
    	return $this->strTopico;
	}

	function getDescricao() {
    	return $this->strDescricao;
	}

	function getAdministrador() {
    	return $this->administrador;
	}

	function getDataPublicacao() {
    	return $this->dataPublicacao;
	}

	//setters
    function setNoticiaID($nNoticiaID) {
        $this->nNoticiaID = $nNoticiaID;
    }

    function setTopico($strTopico) {
        $this->strTopico = $strTopico;
    }

    function setDescricao($strDescricao) {
        $this->strDescricao = $strDescricao;
    }

    function setAdministrador($administrador) {
        $this->administrador = $administrador;
    }

    function setDataPublicacao($dataPublicacao) {
        $this->dataPublicacao = $dataPublicacao;
    }

}

?>