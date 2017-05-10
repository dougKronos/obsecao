<?php 
require_once OBSECAO_DIR.'/app/entities/CaoEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/AdotanteEntity.class.php';


class DepoimentoEntity {

	private $nDepoimentoID;

	private $cao;

	private $adotante;

	private $strDepoimento;

	private $foto;

	private $video;

	private $dataHora;

	private $cStatusSituacao;


	function __construct(){
		
	}

	//getters
	function getDepoimentoID() {
    	return $this->nDepoimentoID;
	}

	function getCao() {
    	return $this->cao;
	}

	function getAdotante() {
    	return $this->adotante;
	}

	function getDepoimento() {
    	return $this->strDepoimento;
	}

	function getFoto() {
    	return $this->foto;
	}

	function getVideo() {
    	return $this->video;
	}

	function getDataHora() {
    	return $this->dataHora;
	}

	function getStatusSituacao() {
    	return $this->cStatusSituacao;
	}

	//setters
	function setDepoimentoID($nDepoimentoID) {
        $this->nDepoimentoID = $nDepoimentoID;
    }

    function setCao($cao) {
        $this->cao = $cao;
    }

    function setAdotante($adotante) {
        $this->adotante = $adotante;
    }

    function setDepoimento($strDepoimento) {
        $this->strDepoimento = $strDepoimento;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setVideo($video) {
        $this->video = $video;
    }

    function setDataHora($dataHora) {
        $this->dataHora = $dataHora;
    }

    function setStatusSituacao($cStatusSituacao) {
        $this->cStatusSituacao = $cStatusSituacao;
    }

}

?>