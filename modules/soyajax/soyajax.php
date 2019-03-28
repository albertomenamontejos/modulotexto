<?php

if (!defined('_CAN_LOAD_FILES_'))
    exit;

class Soyajax extends Module {

    protected $_html;
    protected $_display;

    public function __construct() {
        $this->name = 'soyajax';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Soy.es';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Ajax');
        $this->description = $this->l('Módulo de ejemplo Ajax');
        $this->secure_key = Tools::encrypt($this->name);
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => '1.6.99.99');
    }

    public function install() {
        
        if (
            !parent::install() || 
            !$this->registerHook('footer')
        )
            return false;
        
        return true;
    }

    public function uninstall() {
        
        if (!parent::uninstall())
            return false;
        
        return true;
    }


    public function hookFooter() {
        
        // Incluimos los ficheros js
        $this->context->controller->addJs(($this->_path) . 'views/js/ajax.js', 'all');
        
        //Creamos el enlace al controlador y lo añadimos al fichero js
        $link = new Link;
        $ajax_link = $link->getModuleLink('soyajax', 'ajax');  //Nombre del módulo, nombrel del controlador.

        Media::addJsDef(array(
            "ajax_link" => $ajax_link
        ));
        
        
        $this->context->smarty->assign("ajax_link", $ajax_link);
        
        //Mostrarmos la plantilla
        return $this->display(__FILE__, 'form.tpl');
    }

}