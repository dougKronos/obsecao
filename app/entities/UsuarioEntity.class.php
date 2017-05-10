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
	function getUsuarioID() {
    	return $this->nUsuarioID;
	}

	function getNome() {
    	return $this->strNome;
	}

	function getEmail() {
    	return $this->strEmail;
	}

	function getTelefone() {
    	return $this->strTelefone;
	}

	function getTelefoneAlternativo() {
    	return $this->strTelefoneAlternativo;
	}

	function getEmailAlternativo() {
    	return $this->strEmailAlternativo;
	}

	function getFoto() {
    	return $this->foto;
	}

	//function getIdFacebook() {
    //	return $this->idFacebook;
	//}

	function getPermissao() {
    	return $this->permissao;
	}

	//setters
    function setUsuarioID($nUsuarioID) {
        $this->nUsuarioID = $nUsuarioID;
    }

    function setNome($strNome) {
        $this->strNome = $strNome;
    }

    function setEmail($strEmail) {
        $this->strEmail = $strEmail;
    }

    function setSenha($strSenha) {
        $this->strSenha = $strSenha;
    }

    function setTelefone($strTelefone) {
        $this->strTelefone = $strTelefone;
    }

    function setTelefoneAlternativo($strTelefoneAlternativo) {
        $this->strTelefoneAlternativo = $strTelefoneAlternativo;
    }

    function setEmailAlternativo($strEmailAlternativo) {
        $this->strEmailAlternativo = $strEmailAlternativo;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    // function setIdFacebook($idFacebook) {
        // $this->idFacebook = $idFacebook;
    // }

    function setPermissao($permissao) {
        $this->permissao = $permissao;
    }
	
}

?>