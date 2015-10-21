<?php 


class Html extends Web
{
	private $lang = '';
	private $contenido = '';

	function __construct($idioma='es'){
		$this->lang = $idioma; //valor por defecto pues
	}

	function setLang($newLang){
		$this->lang = $newLang;
	}

	function getLang(){
		return $this->lang;
	}

	function add($html){
		$this->contenido = $this->contenido . $html->showAll();
	}

	function showAll(){
		return "<!DOCTYPE html><html lang='$this->lang'>"."\r\n".$this->contenido."</html>";
	}
}




 ?>
