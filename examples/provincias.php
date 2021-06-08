<?php

require __DIR__ . '/../vendor/autoload.php';

use GeorefAR\GeorefAR;

$georef = new GeorefAR();

$provincias = $georef->provincias('Salta');

var_dump($provincias);