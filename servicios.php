<?php
require 'twig.php';
require 'array_contenido.php';
// S L I D E R S
$slider[0] = array(
	'img' => 'https://dummyimage.com/2540x700/0fd637/fff.png',
	'imgmov' => 'https://dummyimage.com/500x400/1f3022/fff.png',
	'link' => '/night-tours.php',
	'title' => 'Buy tickets for parties and nightclubs all over cancun',
);

$slider[1] = array(
	'img' => 'https://dummyimage.com/2540x700/000/fff.png',
	'imgmov' => 'https://dummyimage.com/500x400/1f3022/fff.png',
	'link' => '/best-snorkel-tour.php',
	'title' => 'Snorkel Paradise Tour',
);

$slider[2] = array(
	'img' => 'https://dummyimage.com/2540x700/0ff637/fff.png',
	'imgmov' => 'https://dummyimage.com/500x400/1f3022/fff.png',
	'link' => '/day-tours.php',
	'title' => 'Mezcal Hostel Experience',
);
$params = array(
	'title' => 'The Best Parties, Awesome Tours!',
	'op' => $op,
	'ope' => $ope[servicios],
	'sliders' => $slider,

);
$template = $twig->load('servicios.twig');
echo $template->render($params);

?>