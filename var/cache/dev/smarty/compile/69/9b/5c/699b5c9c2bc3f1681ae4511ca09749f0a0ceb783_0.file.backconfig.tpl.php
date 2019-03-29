<?php
/* Smarty version 3.1.33, created on 2019-03-29 14:49:23
  from '/Applications/MAMP/htdocs/prestashop/modules/modulotexto/views/templates/hook/backconfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9e2263722bd9_79971065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699b5c9c2bc3f1681ae4511ca09749f0a0ceb783' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/modulotexto/views/templates/hook/backconfig.tpl',
      1 => 1553867003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9e2263722bd9_79971065 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block modulo_texto -->
<div id="mymodule_block_home" class="block block-modulo"><?php if (isset($_smarty_tpl->tpl_vars['confirmacion']->value)) {
echo $_smarty_tpl->tpl_vars['confirmacion']->value;
}
if (isset($_smarty_tpl->tpl_vars['mensaje_error']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje_error']->value;
}?><form name="form_respuestas" action="" method="POST" class="formulario"><div class="caja-titulo"><h4>Titulo: <input type="text" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
"></h4></div><div class = "seleccionar-producto"><h4 class="w-50" >Seleccionar producto:<select name="select_producto" id="select_productos"><option value="mostrar_todos">Mostrar todos</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
if ($_smarty_tpl->tpl_vars['producto_seleccionado']->value == $_smarty_tpl->tpl_vars['item']->value['id_product']) {?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_product'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['item']->value['id_product'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_product'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['id_product'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></h4></div><div class="block-content d-flex justify-content-center flex-column flex-wrap" id="contenedor_preguntas" ><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_respuestas']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><div class="pregunta border border-dark rounded" id="box_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><label for="articulo_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_producto'];?>
"><div class="ids"><div class="ids-row"><p class="id-pregunta" id="pregunta_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">ID pregunta: <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</p><p class="nom-product text-center text-secondary"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p><p class="id-articulo" id="articulo_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_producto'];?>
">ID artículo: <?php echo $_smarty_tpl->tpl_vars['item']->value['id_producto'];?>
</p></div></div><p class="st-pregunta"><span id="st_pregunta_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['pregunta'];?>
 </span><a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="a-modificar" id="modificar_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">modificar</a><a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="a-guardar" id="guardar_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Guardar cambios</a></p><textarea name="respuestas[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" placeholder="Escriba su respuesta aqui."><?php echo $_smarty_tpl->tpl_vars['item']->value['respuesta'];?>
</textarea></label><div class="footer-preg"><a href="#" class="a-eliminar" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Eliminar</a></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><footer class="footer-modulo"><div class="paginacion" id="form_paginacion"><form method="POST" action="" name="formulario_paginacion" id="form_paginacion"><?php if ($_smarty_tpl->tpl_vars['pagina_actual']->value != 0) {?><input type="submit" value="<<" name="paginacion_a"><input type="submit" value="<" name="paginacion_a"><?php }
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pagina_actual']->value+1 - ($_smarty_tpl->tpl_vars['pagina_actual']->value-2) : $_smarty_tpl->tpl_vars['pagina_actual']->value-2-($_smarty_tpl->tpl_vars['pagina_actual']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pagina_actual']->value-2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;
if ($_smarty_tpl->tpl_vars['i']->value >= 0 && $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['pagina_actual']->value) {?><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" name="paginacion"><?php }
}
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? ($_smarty_tpl->tpl_vars['pagina_actual']->value+2)+1 - ($_smarty_tpl->tpl_vars['pagina_actual']->value) : $_smarty_tpl->tpl_vars['pagina_actual']->value-(($_smarty_tpl->tpl_vars['pagina_actual']->value+2))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pagina_actual']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['num_paginas']->value) {
if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['pagina_actual']->value) {?><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" name="paginacion" class="text-primary"><?php } else { ?><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" name="paginacion"><?php }
}
}
}
if ($_smarty_tpl->tpl_vars['pagina_actual']->value != ($_smarty_tpl->tpl_vars['num_paginas']->value-1)) {?><input type="submit" value=">" name="paginacion_a"><input type="submit" value=">>" name="paginacion_a"><?php }?><input type="hidden" name="pagina_actual" value="<?php echo $_smarty_tpl->tpl_vars['pagina_actual']->value;?>
"></form></div><div class="caja-input"><button type="submit" name="guardar_cambios" id="botonResponder" class="btn btn-default" value="guaardar_cambios" ><i class="process-icon-save"></i>Guardar</button></div></footer></form></div> 
<!-- /Block modulo_texto --><?php }
}
