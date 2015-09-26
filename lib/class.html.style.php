<?php 

require('./class.io.file.php');

class Style
{
	private $media = '';
	private $scoped = '';
	private $type = '';
	private $src = '';
	private $contenido = '';

	$file = new Archivo();

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


	private function setSrc($newSrc){
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


	function loadFile($rutaString){
		setSrc($rutaString);
		$file = new Archivo($rutaString);
		$this->contenido = $file->showAll();
	}

	function loadFile(Archivo $file){
		setSrc($file->getSrc());
		$this->contenido = $file->showAll();
	}

	function showAll(){
		return "<style type='getType()' media='getMedia()' scoped='getScoped()' >"."\r\n".$this->contenido."\r\n"."</style>";
	}
}

 ?>
