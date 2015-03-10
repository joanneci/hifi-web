<?php

require_once('config.php');

$places = json_decode(file_get_contents('https://metaverse.highfidelity.io/api/v1/places?flag=homepage'));
View::write('places', array_slice($places->data->places, 0, 8));

View::write('page', 'home');
View::addScript('js/home.js');
View::addStyle('css/home.css');

View::addScript('js/chosen/chosen.jquery.min.js');
View::addStyle('css/chosen/chosen.min.css');

View::renderCommonLayout('home');

