<?php 

class EstadoEntity {

	private $nEstadoID;

	private $strNome;

	private $strSigla;

	function __construct(){
		
	}

	//getters
	function getEstadoID() {
    	return $this->nEnderecoID;
	}

	function getNome() {
    	return $this->strNome;
	}

	function getSigla() {
    	return $this->strSigla;
	}

	//setters
    function setEstadoID($nEstadoID) {
        $this->nEstadoID = $nEstadoID;
    }
    
    function setNome($strNome) {
        $this->strNome = $strNome;
    }

    function setSigla($strSigla) {
        $this->strSigla = $strSigla;
    }
}

?>