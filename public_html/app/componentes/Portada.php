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
   * @uses localhost/
   */
  static function inicio() {
    $f3 = \Base::instance();

    // Sale una página 🍕!!
    echo Template::instance()->render('/principal.html');
  }


  /**
   * MOSTRAR EL CONTENIDO DE LA VARIABLE DE SESIÓN
   * @uses /contenido
   */
  static function contenido() {
    $f3 = \Base::instance();

    $f3->set('SESSION.cesta', [
      ['id' => '85373949', 'nombre' => 'Producto UNO', 'precio' => 35.60, 'cantidad' => 1],
      ['id' => 'dfdfer44', 'nombre' => 'Producto DOS', 'precio' => 75.20, 'cantidad' => 3],
      ['id' => '56fdfg324', 'nombre' => 'Producto TRES', 'precio' => 25.10, 'cantidad' => 1]
    ]);

    $cesta = $f3->get('SESSION.cesta');
    print_r($cesta);
  }

}