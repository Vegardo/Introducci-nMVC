<?php                                                 #el controlador se encarga de recibir las peticiones del usuario
 class MvcController{#clase 
 	public function plantilla(){ #metodo ó función publica
      include "views/template.php";
 	}

    public function enlacesPaginaControlador(){
          if(isset($_GET["variable-get"])){ #isset sirve para indicar que la variable trae información
          	$enlacesControlador = $_GET["variable-get"];#sintaxis variable GET ($_GET["NOMBRE DE LA VARIABLE"])
         }
           else{
         	$enlacesControlador = "inicio";
         }

    	    
            $respuesta = EnlacesPaginas::EnlacesPaginasModelo($enlacesControlador);
         
        
           include $respuesta;   
    }
}

 
?>