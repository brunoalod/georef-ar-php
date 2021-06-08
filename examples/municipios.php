<?php

require __DIR__ . '/../vendor/autoload.php';

use GeorefAR\GeorefAR;

$georef = new GeorefAR();

$municipios = $georef->municipios('Santa Fe');

var_dump($municipios);