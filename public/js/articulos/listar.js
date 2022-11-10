(function ($) {
  $(document).ready(function () {
    var $lista = [];
    let url = $("#url").val();
    let urlReq = url + "apiarticulos/listar";
    //console.log("url: "+urlReq);
    //console.log(param);
    let headers = { "Content-Type": "application/json;charset=utf-8" };
    let data = {};
    $.ajax({
      url: urlReq,
      headers: headers,
      type: "POST",
      data: data,
      dataType: "json",
    })
      .done(function (data) {
        //$listaArticulos = data.datos;
        $lista = data.lista;
        //console.log($lista);
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        //console.log(textStatus);
      });

    $(".btnAgregar").each(function (index) {
      $(this).on("click", function () {
        //console.log("hola");
        //let articuloId = this.dataset.articuloId;
        //obtengo el id del articulo, mediante
        let $id = $(this).data("articuloId");
        let articuloDescripcion = $(this).data("articuloDescripcion");
        let articuloCodigo = $(this).data("articuloCodigo");
        //console.log(articuloId);
        let articulo = $lista.find((art) => art.id == $id);
        //console.log(articulo);
        let cantidad = $("#art-" + $id).val();
        //console.log("cantidad:" + cantidad);
        let item = {
          id: $id,
          precio: articulo.precio,
          descripcion: articulo.descripcion,
          url: articulo.url,
          cantidad: cantidad,
          codigo: articulo.codigo,
        };

        let carritoStr = localStorage.getItem("carrito");
        let carritoArr = [];
        if (carritoStr) {
          //console.log(carritoStr);
          console.log("entro if");
          carritoArr = JSON.parse(carritoStr);
          //agrego el elemento al carrito
          carritoArr.push(item);
          localStorage.setItem("carrito", JSON.stringify(carritoArr));
        } else {
          console.log("entro else");
          carritoArr.push(item);
          localStorage.setItem("carrito", JSON.stringify(carritoArr));
        }
      });
    });
  }); //end ready
})(jQuery);
