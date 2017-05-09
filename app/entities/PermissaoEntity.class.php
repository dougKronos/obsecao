<?php

class PermissaoEntity {
	
	private $nPermissaoID;

	private $strDescricaoPermissao;

	function __construct(){
		
	}

	//getters
	function getNPermissaoID() {
    	return $this->nPermissaoID;
	}

	function getStrDescricaoPermissao() {
    	return $this->strDescricaoPermissao;
	}

	//setters
    function setNPermissaoID($nPermissaoID) {
        $this->nPermissaoID = $nPermissaoID;
    }

    function setStrDescricaoPermissao($strDescricaoPermissao) {
        $this->strDescricaoPermissao = $strDescricaoPermissao;
    }
}


?>