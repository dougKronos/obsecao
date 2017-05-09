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
	function getNNoticiaID() {
    	return $this->nNoticiaID;
	}

	function getStrTopico() {
    	return $this->strTopico;
	}

	function getStrDescricao() {
    	return $this->strDescricao;
	}

	function getAdministrador() {
    	return $this->administrador;
	}

	function getDataPublicacao() {
    	return $this->dataPublicacao;
	}

	//setters
    function setNNoticiaID($nNoticiaID) {
        $this->nNoticiaID = $nNoticiaID;
    }

    function setStrTopico($strTopico) {
        $this->strTopico = $strTopico;
    }

    function setStrDescricao($strDescricao) {
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