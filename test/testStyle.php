<?php 
require('../lib/class.html.style.php');
require('../lib/class.head.php');

$estilo = new Style();

$estilo->cargar('../css/ejemplo.css');
$estilo->setMedia('display');

//echo $estilo->showAll();

$head = new Head();
$head->add($estilo);
echo $head->showAll();
 ?>
