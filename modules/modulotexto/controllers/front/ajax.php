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
                case 'cambioSelectPaginacion':
                $this->cambioSelectPaginacion();
                break;
                default : exit ; break;
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
        echo json_encode(['error' => $error,'id' => Tools::getValue('id')]);
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

    public function cambioSelectPaginacion()
    {
        //Select mostrar productos
        $sql_producto = "SELECT id_product,name FROM " ._DB_PREFIX_."preguntanos p 
        INNER JOIN ps_product_lang pl 
        ON p.id_producto = pl.id_product 
        GROUP BY p.id_producto";
        $productos = Db::getInstance()->ExecuteS($sql_producto);
        $where = "";
        $producto_seleccionado = "";

        if( Tools::getValue('select_producto') && Tools::getValue('select_producto')!= 'mostrar_todos'){
            $where = "WHERE id_producto = " . Tools::getValue('select_producto');
            $producto_seleccionado = Tools::getValue('select_producto');
        }

        $sql = "SELECT COUNT(*) FROM " ._DB_PREFIX_."preguntanos " . $where;
        $num_registros = Db::getInstance()->getValue($sql);

        //Consulta obtener el nuumero de registros
        define('NUM_PREGUNTAS',6);
        $pregunta_inicial = 0;
        $sql = "SELECT COUNT(*) FROM " ._DB_PREFIX_."preguntanos " . $where;
        $num_registros = Db::getInstance()->getValue($sql);
        $num_paginas = $num_registros/NUM_PREGUNTAS;
        $pagina_actual = 0;

        if(Tools::isSubmit('paginacion_a')){
            $pagina = Tools::getValue('pagina_actual');
            $opcion = Tools::getValue('paginacion_a');
            switch($opcion){
                case '<<': 
                    $pagina_actual = 0;
                    break;
                case '<': 
                    $pagina_actual = $pagina - 1;
                    break;
                case '>':
                    $pagina_actual = $pagina + 1;
                    break;
                case '>>': 
                    $pagina_actual = ceil($num_paginas - 1) ;
                    break;
                default: 
                    $pagina_actual = $pagina;
                    break;
            }

            $pregunta_inicial = $pagina_actual * NUM_PREGUNTAS;

        }else if(Tools::isSubmit('paginacion')){
            $pagina_actual= Tools::getValue('paginacion') - 1;
            $pregunta_inicial = $pagina_actual * NUM_PREGUNTAS;
        }
        
        $sql_productos = "SELECT * FROM " ._DB_PREFIX_. "preguntanos ".$where." LIMIT $pregunta_inicial, " . NUM_PREGUNTAS;
        $respuestas = Db::getInstance()->executeS($sql_productos);

        for($i = 0; $i < count($respuestas);$i++){
            for($j = 0 ; $j < count($productos);$j++){
                if($respuestas[$i]['id_producto'] == $productos[$j]['id_product']){
                    $respuestas[$i]['name'] = $productos[$j]['name'];
                }
            }
        }
        
        echo json_encode([
        'titulo' => Configuration::get('MODULO_TEXTO_TIT'),
        'form_respuestas' => $respuestas,
        'num_paginas' => ceil($num_paginas),
        'pagina_actual' => $pagina_actual,
        'productos' => $productos,
        'producto_seleccionado' => $producto_seleccionado
        ]);
        die;
    }
}
