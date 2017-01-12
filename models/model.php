<?php 
class EnlacesPaginas{
	public function EnlacesPaginasModelo($enlacesmodelo){
			if($enlacesmodelo == "inicio" ||
			   $enlacesmodelo == "nosotros" ||
			   $enlacesmodelo == "servicios" ||
			   $enlacesmodelo == "contactenos"){

				$enlacesmodelo = "views/modules/".$enlacesmodelo.".php";
			}

			return $enlacesmodelo;
	} 
}
?>