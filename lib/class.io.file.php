<?php 

class File
{
	private $src = '';
	private $dato = '';

	function __construct(){

	}

	function __construct($ruta){
		setSrc($ruta);
	}

	function setSrc($newSrc){
		$this->src = $newSrc;
		if(!file_exists(getSrc())){
			throw new Exception('Archivo '.getSrc().' no es accesible');
		}
	}

	function getSrc(){
		return $this->src;
	}

	function showAll(){
		$hdFile = fopen(getSrc(), 'r');
		$contenido = fread($hdFile, filesize(getSrc()));
		return $contenido;
	}
}


 ?>
