<?php

#require_once nos sirve para hacer la conexión y mandar a traer las clases que esten en un archivo especifico.
require_once  "controllers/controller.php";
$a = new MvcController();
$a -> plantilla();

?>