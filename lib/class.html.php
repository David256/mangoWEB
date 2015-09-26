<?php 


class Html extends Web
{
	private $lang = '';

	function setLang($newLang){
		$this->lang = $newLang;
	}

	function getLang(){
		return $this->lang;
	}
}




 ?>
