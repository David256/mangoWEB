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

	function add($html){
		$this->contenido = $this->contenido . $html->showAll();
	}

	function showAll(){
		return "<html lang='$this->lang'>"."\r\n".$this->contenido."</html>";
	}
}




 ?>
