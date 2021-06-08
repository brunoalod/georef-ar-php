# georef-ar-php
[![Latest Stable Version](https://poser.pugx.org/brunoalod/georef-ar-php/v)](//packagist.org/packages/brunoalod/georef-ar-php) [![Total Downloads](https://poser.pugx.org/brunoalod/georef-ar-php/downloads)](//packagist.org/packages/brunoalod/georef-ar-php) [![Latest Unstable Version](https://poser.pugx.org/brunoalod/georef-ar-php/v/unstable)](//packagist.org/packages/brunoalod/georef-ar-php) [![License](https://poser.pugx.org/brunoalod/georef-ar-php/license)](//packagist.org/packages/brunoalod/georef-ar-php)

Librería en PHP para consumir la API de georef-ar desarrollada por @datosgobar.

### Instalación
-----------
Se puede instalar utilizando composer.
```
composer require bruno-alod/georef-ar-php
```

### Uso
-----------
En la carpeta example hay ejemplos de uso.
``` php
<?php

require __DIR__ . '/../vendor/autoload.php';

use GeorefAR\GeorefAR;

$georef = new GeorefAR();

$direcciones = $georef->direcciones('San Martin 1549', 'Santa Fe');

var_dump($direcciones);
```
