<?php

header('Content-Type: application/json');
//[NombreDelModulo][NombreDelFichero]ModuleFrontController
class ModuloTextoAjaxModuleFrontController extends ModuleFrontController{
    
    public function initContent()
    {
        switch(Tools::getValue('accion')){
            case 'eliminar':
                    $this->eliminarPregunta();
                    break;
            case 'modificar':
                $this->modificarPregunta();
                break;
        }
    }

    public function eliminarPregunta()
    {
        Db::getInstance()->delete(
            'preguntanos',
            'id = ' . Tools::getValue('id'),
            1);
        $error = true;
        if(Db::getInstance()->Affected_Rows()){
            $error = false;
        }
        echo json_encode(['error' => true,'id' => Tools::getValue('id')]);
        die;
    }

    public function modificarPregunta()
    {
        $id = Tools::getValue('id');
        $pregunta = Tools::getValue('pregunta');
        Db::getInstance()->update(
            'preguntanos',
            ['pregunta' => pSQL($pregunta)],
            'id = '.$id
        );
        $error = true;
        if(Db::getInstance()->Affected_Rows()){
            $error = false;
        }
        echo json_encode(['error'=> $error,'id' => $id ,'pregunta' => $pregunta]);
        die;
    }

}
