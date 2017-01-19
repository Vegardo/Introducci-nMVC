<?php 
class EnlacesPaginas{
	public function EnlacesPaginasModelo($enlacesmodelo){
			if(
			   $enlacesmodelo == "nosotros" ||
			   $enlacesmodelo == "servicios" ||
			   $enlacesmodelo == "contactenos"){

				$enlacesmodelo = "views/modules/".$enlacesmodelo.".php";
			}
		    else if($enlacesmodelo == "inicio"){
		    	$enlacesmodelo = "views/modules/inicio.php";
		    }
		    else{
		    	$enlacesmodelo = "views/modules/inicio.php";
		    }

			return $enlacesmodelo;
	} 
}
?>