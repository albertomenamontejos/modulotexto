<?php

if (!defined('_PS_VERSION_'))
exit;

class ModuloTexto extends Module{

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->name="modulotexto";
        $this->tab="front_office_features";
        $this->author="Soy.es";
        $this->version = '1.0.0';
        $this->need_instance = 1;
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Mi modulo');
        $this->description = $this->l('Descripción de mi módulo.');
        $this->ps_versions_compliancy = array('min' => '1.7.0', 'max' => _PS_VERSION_);
        $this->confirmUninstall = $this->l('¿Seguro que quiere desinstalar?');
    }

    /**
     * install
     *
     * @return void
     */
    public function install()
    {
        if (parent::install() &&
            $this->registerHook('displayAfterProductThumbs') &&
            $this->registerHook('header')){
                if(!Configuration::hasKey('MODULO_TEXTO_TIT')){
                    Configuration::updateValue('MODULO_TEXTO_TIT', 'Preguntas frecuentes');
                }
                return Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'preguntanos` (
                    `id` int(10) NOT NULL AUTO_INCREMENT,
                    `pregunta` VARCHAR(255),
                    `respuesta` VARCHAR(1000),
                    `id_producto` INT(10) NOT NULL,
                    `contestada` TINYINT DEFAULT 0,
                    PRIMARY KEY(`id`)
                ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8');
            }
            return false;
    }

    /**
     * uninstall
     *
     * @return void
     */
    public function uninstall()
    {
        if (parent::uninstall())
           Db::getInstance()->execute('DROP TABLE IF EXISTS '._DB_PREFIX_.'preguntanos');
                return true;
            return false;
    }

    /**
     * getContent
     *
     * @return void
     */
    public function getContent()
    {
        $this->context->controller->addCSS($this->_path.'views/css/back_styles.css', 'all');
        $this->context->controller->addJS($this->_path.'views/js/back_index.js', 'all');
        //Link para las llamadas ajax
        $link = new Link;
        $ajax_link = $link->getModuleLink('modulotexto', 'ajax');  //Nombre del módulo, nombrel del controlador.
        Media::addJsDef(array(
            "ajax_link" => $ajax_link
        ));

        $errores = []; 

        //Guardar cambios en la DB
        if(Tools::isSubmit('guardar_cambios') && Tools::getValue('respuestas')){
            $respuestas=Tools::getValue('respuestas');
            $titulo = Tools::getValue('titulo');
            foreach($respuestas as $key => $valor){
                if($this->validarRespuestas($key,$valor,$errores)){
                    $contestada = 1;
                    if($valor === '')$contestada = 0;   
                    $sql = "UPDATE "._DB_PREFIX_."preguntanos SET respuesta = '$valor', contestada = $contestada 
                    WHERE id = $key";
                    Db::getInstance()->execute($sql);
                }
            }
 
            if($this->validarTitulo($titulo,$errores)) Configuration::updateValue('MODULO_TEXTO_TIT',$titulo);
      
            //Enviar errores o confirmacion
            if(empty($errores)){
                $this->context->smarty->assign("confirmacion", $this->displayConfirmation('Cambios modificados correctamente'));
            }else{
                $mensaje_err='';
                foreach($errores as $error){
                    $mensaje_err .= "<p>$error</p>";
                }
                $this->context->smarty->assign("mensaje_error",$this->displayError($mensaje_err));
            }
        }

        $this->paginacion();
        
        return $this->display(__FILE__, 'backconfig.tpl');
    }

    public function paginacion(){

        //Select mostrar productos
        $sql_producto = "SELECT id_product,name FROM " ._DB_PREFIX_."preguntanos p 
        INNER JOIN ps_product_lang pl 
        ON p.id_producto = pl.id_product 
        GROUP BY p.id_producto";
        $productos = Db::getInstance()->ExecuteS($sql_producto);
        $producto_seleccionado = "";

        //Consulta obtener el nuumero de registros
        define('NUM_PREGUNTAS',6);
        $pregunta_inicial = 0;
        $pagina_actual = 0;
        $sql = "SELECT COUNT(*) FROM " ._DB_PREFIX_."preguntanos";
        $num_registros = Db::getInstance()->getValue($sql);
        $num_paginas = $num_registros/NUM_PREGUNTAS;
        $sql_productos = "SELECT * FROM " ._DB_PREFIX_. "preguntanos LIMIT $pregunta_inicial, " . NUM_PREGUNTAS;
        $respuestas = Db::getInstance()->executeS($sql_productos);

        for($i = 0; $i < count($respuestas);$i++){
            for($j = 0 ; $j < count($productos);$j++){
                if($respuestas[$i]['id_producto'] == $productos[$j]['id_product']){
                    $respuestas[$i]['name'] = $productos[$j]['name'];
                }
            }
        }

        $this->context->smarty->assign([
            'titulo' => Configuration::get('MODULO_TEXTO_TIT'),
            'form_respuestas' => $respuestas,
            'num_paginas' => ceil($num_paginas),
            'pagina_actual' => $pagina_actual,
            'productos' => $productos,
            'producto_seleccionado' => $producto_seleccionado
        ]);

    }

    /**
     * hookDisplayAfterProductThumbs
     *
     * @param  mixed $params
     *
     * @return void
     */
    public function  hookDisplayAfterProductThumbs($params)
    {   
        $sql = "SELECT * FROM "._DB_PREFIX_."preguntanos where contestada = 1 AND mostrar = 1 AND id_producto = " . Tools::getValue('id_product');
        $respuestas = Db::getInstance()->executeS($sql);
        $errores = [];
        $variables  = [
            'titulo' => Configuration::get('MODULO_TEXTO_TIT'),
            'form_respuestas' => $respuestas
        ];

        if(Tools::isSubmit('preguntanos')){
            $pregunta = Tools::getValue('preguntanos');
            $id_producto = tools::getValue('id_product');
            if($this->validarInputFront($pregunta,$errores,$id_producto)){
                $sql = "INSERT INTO ". _DB_PREFIX_ ."preguntanos (pregunta,id_producto) VALUES ('$pregunta','$id_producto')";
                Db::getInstance()->execute($sql);
            }
            $variables['errores'] = $errores;
        }

        $this->context->smarty->assign($variables);
        return $this->display(__FILE__, 'modulotexto.tpl');
    }
    

    /**
     * hookHeader
     *
     * @param  mixed $params
     *
     * @return void
     */
    public function hookHeader($params)
    {
        $this->context->controller->addCSS($this->_path.'views/css/styles.css', 'all');
    }


    /**
     * validarInputFront
     *
     * @param  mixed $pregunta
     * @param  mixed $errores
     * @param  mixed $id_producto
     *
     * @return void
     */
    public function validarInputFront(&$pregunta,&$errores,$id_producto)
    {

        $pregunta = filter_var($pregunta,FILTER_SANITIZE_STRING);
        $sql =  "SELECT * FROM ". _DB_PREFIX_ ."preguntanos WHERE id_producto = $id_producto AND pregunta LIKE '$pregunta'";
        if(empty(trim($pregunta))){
            $errores[]= 'El campo no puede estar vacío.'; 
            return false;
        }else if(strlen($pregunta)>255 ){
            $errores[]= 'El número máximo de caracteres es 255.'; 
            return false;
        }else if(strlen($pregunta)<5){
            $errores[]= 'El número mínimo de caractere es de 5.';
            return false;
        }else if(!empty(Db::getInstance()->executeS($sql))){
            $errores[] = 'Esta pregunta ya ha sido enviada anteriormente.';    
            return false;
        }
        return true;        
    }

    
    /**
     * validarRespuestas
     *
     * @param  mixed $key
     * @param  mixed $respuesta
     * @param  mixed $errores
     *
     * @return void
     */
    public function validarRespuestas($key,&$respuesta,&$errores)
    {

        $respuesta = filter_var($respuesta,FILTER_SANITIZE_STRING);
        if(strlen($respuesta) > 1000 ){
            $errores[]= "Error en la respuesta con id $key: El número máximo de caracteres es 1000."; 
            return false;          
        }
        return true;

    }


    /**
     * validarTitulo
     *
     * @param  mixed $titulo
     * @param  mixed $errores
     *
     * @return void
     */
    public function validarTitulo(&$titulo,&$errores)
    {

        $titulo = filter_var($titulo,FILTER_SANITIZE_STRING);

        if(strlen($titulo) > 50 ){
            $errores[]= 'Error en el título: El número máximo de caracteres es 50.'; 
            return false;    
        }
        return true;
    }

}