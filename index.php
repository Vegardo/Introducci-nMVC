<?php
#require_once nos sirve para hacer la conexión y mandar a traer las clases que esten en un archivo especifico.


require_once  "controllers/controller.php";#inclúyeme todas las clases que estan es esta ruta
require_once  "models/model.php";#inclúyeme todas la clases que esten en esta ruta
$a = new MvcController();#se crea el objeto a partir del nombre de la clase
$a -> plantilla();#se ejcuta la función que se encuuntra en esa clase
?>