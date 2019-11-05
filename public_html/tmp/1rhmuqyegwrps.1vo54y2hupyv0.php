<main>
  <div class="contenedor">
    <h1>Tabla de productos</h1>
    <p>Lista ficticia de productos.</p>
    <hr>

    <?php if ($msgAlerta): ?>
      <div class="alerta alerta-ok" role="alert">
        <?= ($msgAlerta)."
" ?>
        <button class="ocultar-alerta">&times;</button>
      </div>
    <?php endif; ?>

    <div class="flex-productos">
      <?php if (count($catalogo) > 0): ?>
        
          <?php foreach (($catalogo?:[]) as $item): ?>
            <div class="producto-item">
              <div>
                <img src="<?= ($item['foto']) ?>" alt="">
                <h3><?= ($item['producto']) ?></h3>
                <p>
                  <?= ($item['descripcion'])."
" ?>
                </p>
              </div>
              <form method="POST" action="/agregar">
                <hr>
                <div class="form-flex">
                  <p><?= ('$ ' . number_format($item['precio'],2)) ?></p>
                  <input type="number" name="cantidad" value="1" min="1" max="9">
                  <input type="hidden" name="id" value="<?= ($item['id']) ?>">
                  <input type="hidden" name="producto" value="<?= ($item['producto']) ?>">
                  <input type="hidden" name="precio" value="<?= ($item['precio']) ?>">
                  <button type="submit">Agregar</button>
                </div>
              </form>
            </div>
          <?php endforeach; ?>
        
        <?php else: ?>
          <div class="alerta" style="margin-bottom: 0;">
            Por el momento, no hay datos.
          </div>
        
      <?php endif; ?>
    </div>

    <hr>
    <p>Total de productos: <strong><?= (Catalogo::totales()) ?></strong></p>
  </div>
</main>