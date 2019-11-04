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

    $f3->mset([
      'interna' => '/_catalogo.html',
      'catalogo' => Catalogo::simBD(),
      'msgAlerta' => self::proAlerta()
    ]);

    // Sale una página 🍕!!
    echo Template::instance()->render('/principal.html');
  }


  /**
   * MOSTRAR EL CARRITO DE LA COMPRA
   * @uses /carrito
   */
  static function carrito() {
    $f3 = \Base::instance();

    $f3->mset([
      'interna' => '/_carrito.html'
    ]);

    // Sale una página 🍕!!
    echo Template::instance()->render('/principal.html');
  }



  /**
   * MOSTRAR EL CONTENIDO DE LA VARIABLE DE SESIÓN
   * @uses /contenido
   */
  static function contenido() {
    $f3 = \Base::instance();

    $cesta = $f3->get('SESSION.cesta');
    print_r($cesta);
  }


  /**
   * AGREGAR PRODUCTO AL CARRITO
   */
  static function agregar() {
    $f3 = \Base::instance();

    $f3->set('SESSION.msgAlerta', 'El producto ha sido agregado.');
    $f3->reroute('/');
  }


  /**
   * ELIMINAR PRODUCTO DEL CARRITO
   */
  static function eliminar() {
    $f3 = \Base::instance();
    $producto = $f3->get('GET.p');

    $f3->set('SESSION.msgAlerta', 'El producto ha sido eliminado.');
    $f3->reroute('/');
  }



  /**
   * PROCESAR ALERTA
   */
  static function proAlerta() {
    $f3 = \Base::instance();
    $salida = false;
    if ($f3->get('SESSION.msgAlerta')) {
      $salida = $f3->get('SESSION.msgAlerta');
      $f3->clear('SESSION.msgAlerta');
    }
    return $salida;
  }


  /**
   * LIMPIAR BD
   */
  static function limpiar() {
    $f3 = \Base::instance();
    $f3->clear('SESSION');
    $f3->set('SESSION.msgAlerta', 'La cesta ha sido limpiada.');
    $f3->reroute('/');
  }

}