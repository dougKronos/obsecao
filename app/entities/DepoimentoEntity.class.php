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
	function getNDepoimentoID() {
    	return $this->nDepoimentoID;
	}

	function getCao() {
    	return $this->cao;
	}

	function getAdotante() {
    	return $this->adotante;
	}

	function getStrDepoimento() {
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

	function getCStatusSituacao() {
    	return $this->cStatusSituacao;
	}

	//setters
	function setNDepoimentoID($nDepoimentoID) {
        $this->nDepoimentoID = $nDepoimentoID;
    }

    function setCao($cao) {
        $this->cao = $cao;
    }

    function setAdotante($adotante) {
        $this->adotante = $adotante;
    }

    function setStrDepoimento($strDepoimento) {
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

    function setCStatusSituacao($cStatusSituacao) {
        $this->cStatusSituacao = $cStatusSituacao;
    }

}

?>