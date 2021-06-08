<?php

require __DIR__ . '/../vendor/autoload.php';

use GeorefAR\GeorefAR;

$georef = new GeorefAR();

$direcciones = $georef->direcciones('San Martin 1549', 'Santa Fe');

var_dump($direcciones);