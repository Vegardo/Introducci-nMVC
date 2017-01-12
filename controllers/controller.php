<?php                                                 #el controlador se encarga de recibir las peticiones del usuario
 class MvcController{#clase 
 	public function plantilla(){ #metodo ó función publica
      include "views/template.php";
 	}

    public function enlacesPaginaControlador(){#metodo ó función publica
    	$enlacesControlador = $_GET["variable-get"];#sintaxis variable GET ($_GET["NOMBRE DE LA VARIABLE"])
         $respuesta = EnlacesPaginas::EnlacesPaginasModelo($enlacesControlador);
         include $respuesta;   
    }

 }
?>