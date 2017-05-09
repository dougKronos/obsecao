<?php 
require_once OBSECAO_DIR.'/app/entities/UsuarioEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/EnderecoEntity.class.php';

class AdotanteEntity {

	private $nAdotanteID;

	private $usuario;

	private $strDetalhesLocal;

	private $strTipoResidencia;

	private $bPossuiCriancas;

	private $bPossuiBichos;

	private $bAdotouAntes;

	private $endereco;

	function __construct(){
		
	}
}
?>