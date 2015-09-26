<?php 


class Html extends Web
{
	private $lang = '';
	private $contenido = '';

	function setLang($newLang){
		$this->lang = $newLang;
	}

	function getLang(){
		return $this->lang;
	}

	function showAll(){
		return $this->contenido;
	}
}




 ?>
