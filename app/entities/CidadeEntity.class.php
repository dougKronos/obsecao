<?php 

class CidadeEntity {

	private $nCidadeID;

	private $strNome;

	function __construct(){
		
	}

	//getters
	function getNCidadeID() {
    	return $this->nCidadeID;
	}

	function getStrNome() {
    	return $this->strNome;
	}

	//setters
	function setNCidadeID($nCidadeID) {
        $this->nCidadeID = $nCidadeID;
    }

    function setStrNome($strNome) {
        $this->strNome = $strNome;
    }
}

?>