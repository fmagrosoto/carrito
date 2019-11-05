<main>
  <div class="contenedor">
    <h1>Carrito de la compra</h1>
    <p>Lista de productos agregados.</p>
    <hr>

    <?php if ($msgAlerta): ?>
      <div class="alerta alerta-ok" role="alert">
        <?= ($msgAlerta)."
" ?>
        <button class="ocultar-alerta">&times;</button>
      </div>
    <?php endif; ?>

    <table class="carrito">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Subtotal</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th colspan="6"></th>
        </tr>
        <tr>
          <th colspan="3">Subtotal:</th>
          <th>$ 00.00</th>
          <th>&nbsp;</th>
        </tr>
        <tr>
          <th colspan="3">IVA:</th>
          <th>$ 00.00</th>
          <th>&nbsp;</th>
        </tr>
        <tr>
          <th colspan="3">Total:</th>
          <th>$ 00.00</th>
          <th>&nbsp;</th>
        </tr>
      </tfoot>
      <tbody>
        <?php foreach (($cesta?:[]) as $item): ?>
          <tr>
            <td><?= ($item['producto']) ?></td>
            <td><?= ('$ ' . number_format($item['precio'],2)) ?></td>
            <td><?= ($item['cantidad']) ?></td>
            <td><?= ('$ ' . number_format($item['subtotal'],2)) ?></td>
            <td>
              <form action="/modificar" method="POST">
                <input type="number" name="cantidad" min="1" max="9" value="<?= ($item['cantidad']) ?>">
                <input type="hidden" name="id" value="<?= ($item['id']) ?>">
                <button type="submit">Actualizar</button>
                <a href="<?= ('/eliminar/' . $item['id']) ?>" class="eliminar">&times;</a>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>