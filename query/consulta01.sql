SELECT * FROM `item` i
INNER JOIN `productos` p
ON i.articulo_id=p.id_productos
WHERE i.pedido_id=159;

SELECT i.precio,i.cantidad,p.codigo,
p.descripcion FROM `item` i
INNER JOIN `productos` p
ON i.articulo_id=p.id_productos
WHERE i.pedido_id=159;
