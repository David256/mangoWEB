<?php 

require('class.io.archivo.php');

class Style
{
	private $media = '';
	private $scoped = '';
	private $type = '';
	private $src = '';
	private $contenido = '';

//	$archivo = new Archivo();

	function __construct(){

	}

	function setMedia($newMedia){
		$this->media = $newMedia;
	}

	function setScoped($newSco){
		$this->scoped = $newSco;
	}

	function setType($newType){
		$this->type = $newType;
	}


	function setSrc($newSrc){
		$this->src = $newSrc;
	}


	function getMedia(){
		return $this->media;
	}

	function getScoped(){
		return $this->scoped;
	}

	function getType(){
		return $this->type;
	}

	function getSrc(){
		return $this->src;
	}


	function cargar($rutaString){
		//setSrc($rutaString);
		$this->src = $rutaString;
		$archivo = new Archivo($rutaString);
		$this->contenido = $archivo->showAll();
	}
/*
	function cargar($archivo){
		setSrc($archivo->getSrc());
		$this->contenido = $archivo->showAll();
	}
*/
	function showAll(){
		return "<style type='$this->type' media='$this->media' scoped='$this->scoped' >"."\r\n".$this->contenido."\r\n"."</style>";
	}
}

 ?>
