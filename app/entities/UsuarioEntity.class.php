<?php
require_once OBSECAO_DIR.'/app/entities/PermissaoEntity.class.php';


class UsuarioEntity {

	private $nUsuarioID;

	private $strNome;

	private $strEmail;

	private $strSenha;

	private $strTelefone;

	private $strTelefoneAlternativo;

	private $strEmailAlternativo;

	private $foto;

	// private $idFacebook;

	private $permissao;

	function __construct(){
		
	}

	//getters
	function getnUsuarioID() {
    	return $this->nUsuarioID;
	}

	function getstrNome() {
    	return $this->strNome;
	}

	function getstrEmail() {
    	return $this->strEmail;
	}

	function getstrTelefone() {
    	return $this->strTelefone;
	}

	function getstrTelefoneAlternativo() {
    	return $this->strTelefoneAlternativo;
	}

	function getstrEmailAlternativo() {
    	return $this->strEmailAlternativo;
	}

	function getfoto() {
    	return $this->foto;
	}

	//function getidFacebook() {
    //	return $this->idFacebook;
	//}

	function getpermissao() {
    	return $this->permissao;
	}

	//setters
    function setnUsuarioID($nUsuarioID) {
        $this->nUsuarioID = $nUsuarioID;
    }

    function setstrNome($strNome) {
        $this->strNome = $strNome;
    }

    function setstrEmail($strEmail) {
        $this->strEmail = $strEmail;
    }

    function setstrSenha($strSenha) {
        $this->strSenha = $strSenha;
    }

    function setstrTelefone($strTelefone) {
        $this->strTelefone = $strTelefone;
    }

    function setstrTelefoneAlternativo($strTelefoneAlternativo) {
        $this->strTelefoneAlternativo = $strTelefoneAlternativo;
    }

    function setstrEmailAlternativo($strEmailAlternativo) {
        $this->strEmailAlternativo = $strEmailAlternativo;
    }

    function setfoto($foto) {
        $this->foto = $foto;
    }

    function setidFacebook($idFacebook) {
        $this->idFacebook = $idFacebook;
    }

    function setpermissao($permissao) {
        $this->permissao = $permissao;
    }
	
}

?>