<?php 

require('../lib/class.web.php');
require('../lib/class.html.php');
require('../lib/class.html.style.php');
require('../lib/class.head.php');

//creamos objetos web que es la página en si
//creamos objeto html que contiene todo el codigo html
$web = new Web();
$html = new Html();
$style = new Style();
$head = new Head();

$style->setMedia('display');
$style->setType('text/css');
$style->cargar('../css/ejemplo.css');

$head->add($style);
$html->add($head);



$web->add($html);
echo $web->showAll();

 ?>
