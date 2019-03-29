<?php
/* Smarty version 3.1.33, created on 2019-03-29 12:09:32
  from '/Applications/MAMP/htdocs/prestashop/modules/modulotexto/views/templates/hook/modulotexto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9dfcecd5c653_60270555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91e72425428b8d54031ecca042e519dc1ce7424' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/modulotexto/views/templates/hook/modulotexto.tpl',
      1 => 1553496268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9dfcecd5c653_60270555 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block mymodule -->
<div id="mymodule_block_home" class="block-module-front block">
  <div class="block_content">
    <h5 class="titulo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['titulo']->value, ENT_QUOTES, 'UTF-8');?>
</h5>
      <section class="fila">
        <div class="columna">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_respuestas']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
          <div class="accordion acordeon">
              <div class="card">
                <div class="card-header w-100" id="headingOne">
                  <h5 class="mb-0">
                    <div class="btn btn-link pregunta" data-toggle="collapse" data-target="#collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" aria-expanded="true" aria-controls="collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
}">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['pregunta'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                  </h5>
                </div>
              <div id="collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body p-2">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['respuesta'], ENT_QUOTES, 'UTF-8');?>

                </div>
              </div>
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <form  action="" method="POST" class="formulario">
            <textarea name="preguntanos" id="preguntados"  class="preguntanos" placeholder="Preguntanos aquí.." required></textarea>
         
            <ul>
              <?php if (isset($_smarty_tpl->tpl_vars['errores']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errores']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                    <li class="alert alert-danger p-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
            </ul>

            <div class="enviar-pregunta"> 
              <button class="btn btn-primary mt-2">Enviar pregunta</button>
            </div>
        </form>
      </div>  
    </section>
  </div>
</div>
<!-- /Block mymodule --><?php }
}
