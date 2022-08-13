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
      type: "GET",
      data: data,
      dataType: "json",
    })
      .done(function (data) {
        $lista = data.lista;
        console.table($lista);

        /*$listaArticulos = data.datos;
        console.table($listaArticulos);*/
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus);
      });

    /*agregar click al boton*/

    $(".btnAgregar").each(function (index) {
      $(this).on("click", function () {
        console.log("aprete btn");
        //let articuloId = this.dataset.articuloId;
        let articuloId = $(this).data("articuloId");
        console.log("id:" + articuloId);
        console.log(articuloId);
      });
    });
  }); //end ready
})(jQuery);
