<main>
  <div class="contenedor">
    <h1>Carrito de la compra</h1>
    <p>Lista de productos agregados.</p>
    <hr>

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
        <tr>
          <td>Producto</td>
          <td>Precio</td>
          <td>1</td>
          <td>subtotal</td>
          <td>
            <form>
              <input type="number" name="cantidad">
              <input type="hidden" name="id">
              <button type="submit">Actualizar</button>
              <a href="" class="eliminar">&times;</a>
            </form>
          </td>
        </tr>
        <tr>
          <td>Producto</td>
          <td>Precio</td>
          <td>2</td>
          <td>subtotal</td>
          <td>
            <form>
              <input type="number" name="cantidad">
              <input type="hidden" name="id">
              <button type="submit">Actualizar</button>
              <a href="" class="eliminar">&times;</a>
            </form>
          </td>
        </tr>
        <tr>
          <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum blanditiis reiciendis perferendis nobis!</td>
          <td>Precio</td>
          <td>3</td>
          <td>subtotal</td>
          <td>
            <form>
              <input type="number" name="cantidad">
              <input type="hidden" name="id">
              <button type="submit">Actualizar</button>
              <a href="" class="eliminar">&times;</a>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</main>