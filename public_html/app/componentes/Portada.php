<?php

/**
 * CLASE PRINCIPAL PARA MOSTRAR LA PÁGINA DE INICIO Y EL CARRITO
 * @see /app/rutas.cfg
 * @example localhost/ o localhost/carrito
 * @author Fernando Magrosoto V.
 */
class Portada {

  /**
   * MOSTRAR LA PORTADA DEL EJEMPLO
   * @example localhost/
   */
  static function inicio() {
    $f3 = \Base::instance();

    // Sale una página 🍕!!
    echo Template::instance()->render('/principal.html');
  }

}