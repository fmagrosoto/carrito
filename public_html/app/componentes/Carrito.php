<?php

/**
 * DETALLES DEL CARRITO DE COMPRAS
 */
class Carrito {

  public $cesta;
  public $productos;
  public $items;
  public $subtotal;
  public $iva;
  public $total;

  /**
   * CONSTRUCTOR DEL OBJETO
   * @param
   */
  public function __construct($cesta) {
    $this->cesta = $cesta;
    $this->productos = count($this->cesta);
    $this->items = $this->setItems();
    $this->subtotal = $this->setSubTotal();
    $this->iva = $this->setIva();
    $this->total = $this->setTotal();
  }

  /**
   * CONTABILIZAR LOS ITEMS (numero de piezas de todos los productos)
   */
  private function setItems() {
    $salida = 0;

    foreach ($this->cesta as $value) {
      $salida = $salida + $value['cantidad'];
    }

    return $salida;
  }

  /**
   * CALCULAR EL SUBTOTAL
   */
  private function setSubTotal() {
    $salida = 0;

    foreach ($this->cesta as $value) {
      $salida = $salida + $value['subtotal'];
    }

    return $salida;
  }

  /**
   * CALCULAR EL IVA
   */
  private function setIva() {
    return $this->subtotal * .16;
  }

  /**
   * CALCULAR EL TOTAL
   */
  private function setTotal() {
    return $this->subtotal * 1.16;
  }

}