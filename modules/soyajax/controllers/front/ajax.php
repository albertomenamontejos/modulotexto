<?php

//[NombreDelModulo][NombreDelFichero]ModuleFrontController
class SoyajaxAjaxModuleFrontController extends ModuleFrontController{
    
    public function initContent() {
        
        $response = "Salida de Ajax";
        $json = Tools::jsonEncode($response);
        echo $json;
        die;

    }
}

?>