<?php 

class CaoEntity {

	private $nCaoID;

	private $strNome;

	private $cSexo;

	private $strRaca;

	private $nIdade;

	private $strCaracteristicas;

	private $strCaracteristicasComport;

	// private $foto;

	// private $video;

	private $strHistoricoResgate;

	private $strRestricoes;

	private $bStatusAdotado;

	function __construct(){
		
	}

	//getters
	function getCaoID() {
    	return $this->nCaoID;
	}

	function getNome() {
    	return $this->strNome;
	}

	function getSexo() {
    	return $this->cSexo;
	}

	function getRaca() {
    	return $this->strRaca;
	}

	function getIdade() {
    	return $this->nIdade;
	}

	function getCaracteristicas() {
    	return $this->strCaracteristicas;
	}

	function getCaracteristicasComport() {
    	return $this->strCaracteristicasComport;
	}

	//function getFoto() {
    //	return $this->foto;
	//}

	//function getVideo() {
    //	return $this->video;
	//}

	function getHistoricoResgate() {
    	return $this->strHistoricoResgate;
	}

	function getRestricoes() {
    	return $this->strRestricoes;
	}

	function getStatusAdotado() {
    	return $this->bStatusAdotado;
	}

	//setters
	function setCaoID($nCaoID) {
        $this->nCaoID = $nCaoID;
    }

    function setNome($strNome) {
        $this->strNome = $strNome;
    }

    function setSexo($cSexo) {
        $this->cSexo = $cSexo;
    }

    function setRaca($strRaca) {
        $this->strRaca = $strRaca;
    }

    function setIdade($nIdade) {
        $this->nIdade = $nIdade;
    }

    function setCaracteristicas($strCaracteristicas) {
        $this->strCaracteristicas = $strCaracteristicas;
    }

    function setCaracteristicasComport($strCaracteristicasComport) {
        $this->strCaracteristicasComport = $strCaracteristicasComport;
    }

    //function setFoto($foto) {
    //    $this->foto = $foto;
    //}

    //function setVideo($video) {
    //   $this->video = $video;
    //}

    function setHistoricoResgate($strHistoricoResgate) {
        $this->strHistoricoResgate = $strHistoricoResgate;
    }

    function setRestricoes($strRestricoes) {
        $this->strRestricoes = $strRestricoes;
    }

    function setStatusAdotado($bStatusAdotado) {
        $this->bStatusAdotado = $bStatusAdotado;
    }
}

?>