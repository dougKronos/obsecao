<?php 

class EstadoEntity {

	private $nEstadoID;

	private $strNome;

	private $strSigla;

	function __construct(){
		
	}

	//getters
	function getNEstadoID() {
    	return $this->nEnderecoID;
	}

	function getStrNome() {
    	return $this->strNome;
	}

	function getStrSigla() {
    	return $this->strSigla;
	}

	//setters
    function setNEstadoID($nEstadoID) {
        $this->nEstadoID = $nEstadoID;
    }
    
    function setStrNome($strNome) {
        $this->strNome = $strNome;
    }

    function setStrSigla($strSigla) {
        $this->strSigla = $strSigla;
    }
}

?>