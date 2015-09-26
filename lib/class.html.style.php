<?php 


class Style
{
	private $media = '';
	private $scoped = '';
	private $type = '';
	private $src = '';
	private $contenido = '';

	$file = new File();

	function setMedia($newMedia){
		$this->media = $newMedia;
	}

	function setScoped($newSco){
		$this->scoped = $newSco;
	}

	function setType($newType){
		$this->type = $newType;
	}


	private function setSrc($newSrc){
		$this->src = $newSrc;
	}


	function getMedia(){
		return $this->media;
	}

	function getScoped(){
		return $this->scoped;
	}

	function getType(){
		return $this->type;
	}

	function getSrc(){
		return $this->src;
	}


	function loadFile($rutaString){
		setSrc($rutaString);
		$file = new File($rutaString);
		$this->contenido = $file->showAll();
	}

	function loadFile(File $file){
		setSrc($file->getSrc());
		$this->contenido = $file->showAll();
	}
}

 ?>
