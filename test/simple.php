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

//usamos el objeto style para configurarlo con un media
$style->setMedia('display');
//un tipo de estilo
$style->setType('text/css');
//y el pasamos la ruta donde se encuentra el estilo
$style->cargar('../css/ejemplo.css');


//ahora lo añadimos a head
$head->add($style);
//y este finalmente al documento html
$html->add($head);


//tenemos que anadir el documento html a el gran objeto web
$web->add($html);
//para luego ser mostrado con todas las cosas cargadas
echo $web->showAll();

 ?>
