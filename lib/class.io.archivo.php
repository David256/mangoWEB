<?php 

class Archivo
{
	private $src = '';
	private $dato = '';
	private $error = false;

	function setSrc($newSrc){
		$this->src = $newSrc;
		if(!file_exists($this->getSrc()) || $newSrc == ''){
			$this->error = true;
			throw new Exception('Archivo '.$this->getSrc().' no es accesible');
		}
	}

	function __construct($ruta=''){
		try{
			$this->setSrc($ruta);	
		}catch(Exception $e){
			echo 'Error : '.$e;
		}		
	}

	function getSrc(){
		return $this->src;
	}

	function showAll(){
		if($this->error){
			return '';
		}
		$hdFile = fopen($this->getSrc(), 'r');
		$contenido = fread($hdFile, filesize($this->getSrc()));
		return $contenido;
	}
}


 ?>
