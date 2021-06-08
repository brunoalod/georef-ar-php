# georef-ar-php
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