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


    // Inicializamos $carrito como vacío y luego
    // verificamos que hay una variable de sesión iniciada
    // para asignar el valor de la variable de sesión a $carrito
    $carrito = [];
    if ($f3->get('SESSION.carrito')) {
      $carrito = $f3->get('SESSION.carrito');
    }

    // VARIABLES PARA CADA PÁGINA INTERNA
    $f3->mset([
      'interna' => '/_catalogo.html', // Página interna que se muestra en el templete
      'catalogo' => Catalogo::simBD(), // Extraer el listado de productos
      'msgAlerta' => self::proAlerta(), // Procesar mensajes de alerta
      'prodCesta' => count($carrito) // Número de item en la cesta
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

    // Inicializamos $carrito como vacío y luego
    // verificamos que hay una variable de sesión iniciada
    // para asignar el valor de la variable de sesión a $carrito
    $carrito = [];
    if ($f3->get('SESSION.carrito')) {
      $carrito = $f3->get('SESSION.carrito');
    }

    // VARIABLES PARA CADA PÁGINA INTERNA
    $f3->mset([
      'interna' => '/_carrito.html', // Página interna que se muestra en el templete
      'prodCesta' => count($carrito), // Cantidad de items en la cesta
      'cesta' => $carrito, // El contenido completo del carrito
      'msgAlerta' => self::proAlerta(), // Procesar mensajes de alerta
    ]);

    // Sale una página 🍕!!
    echo Template::instance()->render('/principal.html');
  }


  /**
   * AGREGAR PRODUCTO AL CARRITO
   */
  static function agregar() {
    $f3 = \Base::instance();

    // Bajamos la información del formulario
    $cantidad = intval($f3->get('POST.cantidad'));
    $precio = floatval($f3->get('POST.precio'));
    $subtotal = $cantidad * $precio;
    $id = $f3->get('POST.id');
    $producto = $f3->get('POST.producto');

    // Nos aseguramos que haya una variable de sesión iniciada
    // y la guaradamos en una variable local $cesta
    if ($f3->get('SESSION.carrito')) {
      $cesta = $f3->get('SESSION.carrito');
      $hay = false;

      // Buscamos dentro de $cesta un producto con el mismo ID
      // para no duplicar productos y solo modificarlos.
      foreach ($cesta as $key => $value) {
        if ($value['id'] == $id) {
          $cesta[$key]['cantidad'] = $cantidad;
          $cesta[$key]['subtotal'] = $subtotal;
          $f3->set('SESSION.carrito', $cesta);
          $hay = true;
        }
      }

      // Si no hay coincidencias, entonces añadir a $cesta un producto nuevo.
      if(!$hay) {
        $nuevo = [
          'id' => $id,
          'producto' => $producto,
          'cantidad' => $cantidad,
          'precio' => $precio,
          'subtotal' => $subtotal
        ];
        array_push($cesta, $nuevo);
        $f3->set('SESSION.carrito', $cesta);
      }

    } else {
      // Si no hay una variable de sesión, entonces inicializamos una con el
      // contenido del formulario.
      $carrito = [];
      $nuevo = [
        'id' => $id,
        'producto' => $producto,
        'cantidad' => $cantidad,
        'precio' => $precio,
        'subtotal' => $subtotal
      ];
      array_push($carrito, $nuevo);
      $f3->set('SESSION.carrito', $carrito);
    }

    // Agragamos un mensaje de alerta y redireccionamos al catálogo.
    $f3->set('SESSION.msgAlerta', 'El producto ha sido agregado.');
    $f3->reroute('/');
  }


  /**
   * ELIMINAR PRODUCTO DEL CARRITO
   */
  static function eliminar() {
    $f3 = \Base::instance();
    $producto = $f3->get('PARAMS.producto');

    // Nos aseguramos que haya una variable de sesión inicializada
    if ($f3->get('SESSION.carrito')) {

      $cesta = $f3->get('SESSION.carrito');
      // Buscamos que en los productos coincidan con el producto enviado por GET
      $hay = false;
      foreach ($cesta as $key => $value) {
        if ($value['id'] == $producto) {
          unset($cesta[$key]);
          $f3->set('SESSION.carrito', $cesta);
          $hay = true;
        }
      }

      if (!$hay) {
        $f3->reroute('/carrito');
      }

    } else {
      // Si no hay una variable de sesión, entonces nos regresamos al catálogo
      $f3->reroute('/');
    }

    // Agragamos un mensaje de alerta y redireccionamos al catálogo.
    $f3->set('SESSION.msgAlerta', 'El producto ha sido eliminado.');
    $f3->reroute('/carrito');
  }


  /**
   * MODIFICAR PRODUCTO
   */
  static function modificar() {
    $f3 = \Base::instance();

    // Datos del producto
    $cantidad = intval($f3->get('POST.cantidad'));
    $id = $f3->get('POST.id');

    // Asegurarnos que haya una variable de sesión
    if($f3->get('SESSION.carrito')) {

      $cesta = $f3->get('SESSION.carrito');

      // Buscamos que en los productos coincidan con el producto enviado por POST
      $hay = false;
      foreach ($cesta as $key => $value) {
        if ($value['id'] == $id) {
          $cesta[$key]['cantidad'] = $cantidad;
          $precio = $cesta[$key]['precio'];
          $subtotal = $cantidad * $precio;
          $cesta[$key]['subtotal'] = $subtotal;
          $f3->set('SESSION.carrito', $cesta);
          $hay = true;
        }
      }

      if (!$hay) {
        $f3->reroute('/carrito');
      }

    } else {
      // Si no hay una variable de sesión, entonces nos regresamos al catálogo
      $f3->reroute('/');
    }

    // Agragamos un mensaje de alerta y redireccionamos al catálogo.
    $f3->set('SESSION.msgAlerta', 'El producto ha sido modificado.');
    $f3->reroute('/carrito');
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
   * Eliminar todas las variables de sesión y empezar de cero.
   */
  static function limpiar() {
    $f3 = \Base::instance();
    $f3->clear('SESSION');
    $f3->set('SESSION.msgAlerta', 'La cesta ha sido limpiada.');
    $f3->reroute('/');
  }


  /**
   * MOSTRAR EL CONTENIDO DE LA VARIABLE DE SESIÓN
   * @uses /contenido
   */
  static function contenido() {
    $f3 = \Base::instance();
    if ($f3->get('SESSION.carrito')) {
      print_r($f3->get('SESSION.carrito'));
    } else {
      echo 'El carrito está limpio.';
    }
  }

}