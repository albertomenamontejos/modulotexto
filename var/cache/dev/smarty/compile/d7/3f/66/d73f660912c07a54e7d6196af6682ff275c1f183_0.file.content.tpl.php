<?php
/* Smarty version 3.1.33, created on 2019-03-29 14:34:22
  from '/Applications/MAMP/htdocs/prestashop/admin498r8movc/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9e1ede4415e9_50174933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd73f660912c07a54e7d6196af6682ff275c1f183' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin498r8movc/themes/default/template/content.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9e1ede4415e9_50174933 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
