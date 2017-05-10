<?php

class PermissaoEntity {
	
	private $nPermissaoID;

	private $strDescricaoPermissao;

	function __construct(){
		
	}

	//getters
	function getPermissaoID() {
    	return $this->nPermissaoID;
	}

	function getDescricaoPermissao() {
    	return $this->strDescricaoPermissao;
	}

	//setters
    function setPermissaoID($nPermissaoID) {
        $this->nPermissaoID = $nPermissaoID;
    }

    function setDescricaoPermissao($strDescricaoPermissao) {
        $this->strDescricaoPermissao = $strDescricaoPermissao;
    }
}


?>