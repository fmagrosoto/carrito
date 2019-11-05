<?php

/**
 * SIMULACIÓN DE CATÁLOGO DE PRODUCTOS
 * Esta lista, igual se puede extraer desde una base de datos
 */
class Catalogo {

  // Simular base de datos
  static function simBD() {

    return self::bd();
  }

  // BD
  static function bd() {
    $datos = [
      [
        'id' => 'ju87hg53db',
        'producto' => 'Este es el producto uno',
        'foto' => 'https://via.placeholder.com/640x480?text=Foto+producto+uno',
        'descripcion' => 'Lorem, dolor sit amet consectetur adipisicing elit.
                  Ullam, suscipit totam maiores ut laudantium voluptatem possimus
                  nobis non porro impedit. Tempore molestiae reprehenderit
                  veritatis quo debitis veniam illo, quas omnis!',
        'precio' => 325.25,
      ],
      [
        'id' => 'loi98hy6re',
        'producto' => 'Este es el producto dos',
        'foto' => 'https://via.placeholder.com/640x480?text=Foto+producto+dos',
        'descripcion' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Ullam, suscipit totam maiores ut laudantium voluptatem possimus
                  nobis non porro impedit.',
        'precio' => 75.00,
      ],
      [
        'id' => 'mnj98ddf52',
        'producto' => 'Este es el producto tres',
        'foto' => 'https://via.placeholder.com/640x480?text=Foto+producto+tres',
        'descripcion' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Ullam, suscipit totam maiores ut laudantium voluptatem possimus
                  nobis non porro impedit. Tempore molestiae reprehenderit
                  veritatis quo debitis veniam illo, quas omnis!. Tempore molestiae reprehenderit.',
        'precio' => 189.00,
      ],
      [
        'id' => 'qwu87ju89o',
        'producto' => 'Este es el producto cuatro',
        'foto' => 'https://via.placeholder.com/640x480?text=Foto+producto+cuatro',
        'descripcion' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Ullam, suscipit totam maiores ut laudantium voluptatem possimus
                  nobis non porro impedit. Tempore molestiae reprehenderit
                  veritatis.',
        'precio' => 97.50,
      ],
      [
        'id' => '99oi5tegul',
        'producto' => 'Este es el producto cinco',
        'foto' => 'https://via.placeholder.com/640x480?text=Foto+producto+cinco',
        'descripcion' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Ullam, suscipit totam maiores ut laudantium voluptatem possimus
                  nobis non porro. Tempore molestiae reprehenderit
                  veritatis quo debitis veniam illo, quas omnis!',
        'precio' => 325.50,
      ],
      [
        'id' => 'mnjbhgvff6',
        'producto' => 'Este es el producto seis',
        'foto' => 'https://via.placeholder.com/640x480?text=Foto+producto+seis',
        'descripcion' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Ullam, suscipi.',
        'precio' => 150.50,
      ],
      [
        'id' => 'hy765tyhgt',
        'producto' => 'Este es el producto siete',
        'foto' => 'https://via.placeholder.com/640x480?text=Foto+producto+siete',
        'descripcion' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Ullam, suscipi, favoris pulis otrus ubed.',
        'precio' => 250.00,
      ]
    ];

    return $datos;
  }

  /**
   * TOTALES
   */
  static function totales() {
    return count(self::bd());
  }

}