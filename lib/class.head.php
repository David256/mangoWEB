<?php 


class Head
{
	private $contenido = '';

	function add($html){
		$this->contenido = $this->contenido . $html->showAll() . "\r\n";
	}
	function showALl(){
		return "<head>"."\r\n".$this->contenido."\r\n"."</head>";
	}
}


 ?>
