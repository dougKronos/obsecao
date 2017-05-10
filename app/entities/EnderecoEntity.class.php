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
	function getEnderecoID() {
    	return $this->nEnderecoID;
	}

	function getEndereco() {
    	return $this->strEndereco;
	}

	function getBairro() {
    	return $this->strBairro;
	}

	function getEstado() {
    	return $this->estado;
	}

	function getCidade() {
    	return $this->cidade;
	}

	//setters
    function setEnderecoID($nEnderecoID) {
        $this->nEnderecoID = $nEnderecoID;
    }
    
    function setEndereco($strEndereco) {
        $this->strEndereco = $strEndereco;
    }

	function setBairro($strBairro) {
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