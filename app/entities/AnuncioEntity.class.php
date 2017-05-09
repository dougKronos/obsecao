<?php 
require_once OBSECAO_DIR.'/app/entities/CaoEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/ProtetorEntity.class.php';
require_once OBSECAO_DIR.'/app/entities/AdministradorEntity.class.php';

class AnuncioEntity {

	private $nAnuncioID;

	private $cao;

	private $protetor;

	private $dataAnuncio;

	private $bStatusAprovado;

	private $strTitulo;

	private $strDescricao;

	private $administrador;

	function __construct(){
		
	}
}

?>