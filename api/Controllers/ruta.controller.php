<?php
 require "./Models/Cors.model.php";
class RutaController {

    public function inicio() {

        Cors::useHeaders();  //Evitar Cors
        include '././paths/rutas.php';

    }

}

?>