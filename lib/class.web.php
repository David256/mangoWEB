<?php 


class Web
{
	private $id = '';
	private $name = '';
	private $charset = '';

	function setId($newId){
		$id = $newId;
	}

	function setName($newName){
		$name = $newName;
	}

	function setCharset($newChar){
		$charset = $newChar;
	}


	function getId(){
		return $id;
	}

	function getName(){
		return $name;
	}

	function getCharset(){
		return $charset;
	}
}


 ?>