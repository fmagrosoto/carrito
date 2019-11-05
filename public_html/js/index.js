(function () {
  console.log('CarritoPHP');

  /**
   * OCULTAR ALERTA DE MENSAJE
   */
  var ocultarAlert = document.querySelectorAll('.ocultar-alerta');
  if (ocultarAlert) {
    [].forEach.call(ocultarAlert, function (item) {
      item.addEventListener('click', function () {
        var padre = this.parentElement;
        padre.remove();
      }, false);
    });
  }

  /**
   * CONFIRM AL ELIMINAR PRODUCTO DEL CARRITO
   */
  var botElim = document.querySelectorAll('.eliminar');
  if (botElim) {
    [].forEach.call(botElim, function(item) {
      item.addEventListener('click', function(e){
        e.preventDefault();
        var url = this.href;
        if (confirm('¿Seguro quiere eliminar este producto?')) {
          location.assign(url);
        }
      }, false);
    });
  }
})();