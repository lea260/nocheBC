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
      }); //end item click
    }); //end item click items foreach

    //console.log("hola");
  });
})(jQuery);
