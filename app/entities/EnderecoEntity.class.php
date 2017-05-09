<?php 
require_once OBSECAO_DIR.'/app/entities/EstadoEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/CidadeEntity.class.php';


class EnderecoEntity {

	private $nEnderecoID;

	private $strEndereco;

	private $strBairro;

	private $estado;

	private $cidade;

	function __construct(){
		
	}

	//getters
	function getNEnderecoID() {
    	return $this->nEnderecoID;
	}

	function getStrEndereco() {
    	return $this->strEndereco;
	}

	function getStrBairro() {
    	return $this->strBairro;
	}

	function getEstado() {
    	return $this->estado;
	}

	function getCidade() {
    	return $this->cidade;
	}

	//setters
    function setNEnderecoID($nEnderecoID) {
        $this->nEnderecoID = $nEnderecoID;
    }
    
    function setStrEndereco($strEndereco) {
        $this->strEndereco = $strEndereco;
    }

	function setStrBairro($strBairro) {
        $this->strBairro = $strBairro;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}

?>