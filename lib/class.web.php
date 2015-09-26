<?php 


class Web
{
	private $id = '';
	private $name = '';
	private $charset = '';
	private $contenido = '';

	function setId($newId){
		$this->id = $newId;
	}

	function setName($newName){
		$this->name = $newName;
	}

	function setCharset($newChar){
		$this->charset = $newChar;
	}


	function getId(){
		return $this->id;
	}

	function getName(){
		return $this->name;
	}

	function getCharset(){
		return $this->charset;
	}


	function add(Html $html){
		$this->contenido = $this->contenido . $html->showAll();
	}

	function showAll(){
		return $this->contenido;
	}
}


 ?>