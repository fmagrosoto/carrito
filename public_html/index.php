<?php

/**
 * CARRITO DE LA COMPRA PARA PHP
 * App de ejemplo para armar un carrito de compra
 * usando variables de sesión de PHP.
 * @copyright 2019, Fernando Magrosoto
 * @author Fernando Magrosoto V.
 */

 // Cargamos la dependencia desde COMPOSER
require("vendor/autoload.php");

// Cargamos en una varibale global ($f3) todo el framework
$f3 = \Base::instance();

// Organizamos nuestras variables globales y rutas en distintos
// archivos, para poder mantener el proyetco de manera más fácil.
$f3->config('app/globales.cfg');
$f3->config('app/rutas.cfg');

## Un espacio limpio es un espacio bonito 🍻##

#######################
## INICIAR FRAMEWORK ##
#######################
$f3->run();