(function ($) {
  $(document).ready(function () {
    var $lista = [];
    let url = $("#url").val();
    let urlReq = url + "apiarticulos/listar";
    let headers = { "Content-Type": "application/json;charset=utf-8" };
    let data = {};

    $.ajax({
      url: urlReq,
      headers: headers,
      type: "GET",
      data: data,
      dataType: "json",
    })
      .done(function (data) {
        console.log(data);
        $lista = data.lista;
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus);
      });

    $(".btnAgregar").each(function (index) {
      $(this).on("click", function () {
        //console.log("hola");
        let articuloId = this.dataset.articuloId;
        let $id = $(this).data("articuloId");
        console.log($id);
        $articulo = $lista.find((art) => art.id == $id);
        let cantidad = $("#art-" + $id).val();
        item = {
          id: $articulo.id,
          codigo: $articulo.codigo,
          descripcion: $articulo.descripcion,
          precio: $articulo.precio,
          url: $articulo.url,
          cantidad: cantidad,
        };
        let carritoStr = localStorage.getItem("carrito");
        let carritoArr = [];
        if (carritoStr) {
          carritoArr = JSON.parse(carritoStr);
        } else {
          carritoArr.push(item);
          localStorage.setItem("carrito", JSON.stringify(carritoArr));
        }
      }); //end item click
    }); //end item click items foreach

    //console.log("hola");
  });
})(jQuery);
