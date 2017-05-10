<?php 

class CidadeEntity {

	private $nCidadeID;

	private $strNome;

	function __construct(){
		
	}

	//getters
	function getCidadeID() {
    	return $this->nCidadeID;
	}

	function getNome() {
    	return $this->strNome;
	}

	//setters
	function setCidadeID($nCidadeID) {
        $this->nCidadeID = $nCidadeID;
    }

    function setNome($strNome) {
        $this->strNome = $strNome;
    }
}

?>