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
	function getNCaoID() {
    	return $this->nCaoID;
	}

	function getStrNome() {
    	return $this->strNome;
	}

	function getCSexo() {
    	return $this->cSexo;
	}

	function getStrRaca() {
    	return $this->strRaca;
	}

	function getNIdade() {
    	return $this->nIdade;
	}

	function getStrCaracteristicas() {
    	return $this->strCaracteristicas;
	}

	function getStrCaracteristicasComport() {
    	return $this->strCaracteristicasComport;
	}

	//function getFoto() {
    //	return $this->foto;
	//}

	//function getVideo() {
    //	return $this->video;
	//}

	function getStrHistoricoResgate() {
    	return $this->strHistoricoResgate;
	}

	function getStrRestricoes() {
    	return $this->strRestricoes;
	}

	function getBStatusAdotado() {
    	return $this->bStatusAdotado;
	}

	//setters
	function setNCaoID($nCaoID) {
        $this->nCaoID = $nCaoID;
    }

    function setStrNome($strNome) {
        $this->strNome = $strNome;
    }

    function setCSexo($cSexo) {
        $this->cSexo = $cSexo;
    }

    function setStrRaca($strRaca) {
        $this->strRaca = $strRaca;
    }

    function setNIdade($nIdade) {
        $this->nIdade = $nIdade;
    }

    function setStrCaracteristicas($strCaracteristicas) {
        $this->strCaracteristicas = $strCaracteristicas;
    }

    function setStrCaracteristicasComport($strCaracteristicasComport) {
        $this->strCaracteristicasComport = $strCaracteristicasComport;
    }

    //function setFoto($foto) {
    //    $this->foto = $foto;
    //}

    //function setVideo($video) {
    //   $this->video = $video;
    //}

    function setStrHistoricoResgate($strHistoricoResgate) {
        $this->strHistoricoResgate = $strHistoricoResgate;
    }

    function setStrRestricoes($strRestricoes) {
        $this->strRestricoes = $strRestricoes;
    }

    function setBStatusAdotado($bStatusAdotado) {
        $this->bStatusAdotado = $bStatusAdotado;
    }
}

?>