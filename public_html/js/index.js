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
})();