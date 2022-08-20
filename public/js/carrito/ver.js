(function ($) {
  $(document).ready(function () {
  //alert("Hola");
  let carrito = JSON.parse(localStorage.getItem("carrito"));
      //$("#carrito").text(carrito.length);
      carrito.forEach(element => {
        //let insert = `<button type="button" class="btn btn-primary">${element.id}</button>` 
        let insert02 = `<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4 p-3"
        id="art-${element.id}">
        <div class="card">
          <img class="card-img-top" src="${element.url}" alt="Card image cap"/>
          <div class="card-body">
            <h5 class="card-title">ID:${element.id} ${element.codigo}</h5>
            <p class="card-text">${element.descripcion}</p>
            <p class="card-text">$ ${element.precio}</p>
            <input id="cant-${element.id}" class="form-control"
            value="${element.cantidad}" type="number" disabled
            ></p>
            <button type="button" class="btn btn-danger btnEliminar"
            data-articulo-id="${element.id}"
                        >Eliminar</button>
          </div>
          </div><!-- end card -->
        </div><!-- end col --><?php }`;
        $("#carritoid").after(insert02);
      });

  });
})(jQuery);