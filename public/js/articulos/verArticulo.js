(function ($, param) {
  $(document).ready(function () {
    //alert("fff");
    //console.log("funciona ver articulo");
    $("#btnEliminar").click(function (e) {
      e.preventDefault();
      const confirm = window.confirm("Deseas actualizar el elemento?");
      if (confirm) {
        $("#form02").submit();
      }
    }); //end enviar Form post
  }); //end ready
})(jQuery, "hola mundo");
