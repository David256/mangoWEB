<?php 

class File
{
	private $src = '';

	function __construct(){
		
	}

	function __construct($ruta){
		setSrc($ruta);
	}

	function setSrc($newSrc){
		$this->src = $newSrc;
	}

	function getSrc(){
		return $this->src;
	}
}


 ?>
