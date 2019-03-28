<?php
/* Smarty version 3.1.33, created on 2019-03-28 14:16:41
  from '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9cc93907b6f1_60886720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b72e5c905dcf9bfe3ccf86012c06c17e2d5194bb' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/page.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9cc93907b6f1_60886720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4931066475c9cc93904fad3_34218358', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13838754445c9cc93905a3d3_26941783 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13714420545c9cc939053a42_25806316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13838754445c9cc93905a3d3_26941783', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_5311643095c9cc93906a2a8_55729137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20794981475c9cc93906dce4_00350915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10051256515c9cc9390678f0_45753619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5311643095c9cc93906a2a8_55729137', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20794981475c9cc93906dce4_00350915', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_10279097195c9cc939075c55_47054634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3957060805c9cc939073501_22304715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10279097195c9cc939075c55_47054634', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4931066475c9cc93904fad3_34218358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4931066475c9cc93904fad3_34218358',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13714420545c9cc939053a42_25806316',
  ),
  'page_title' => 
  array (
    0 => 'Block_13838754445c9cc93905a3d3_26941783',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10051256515c9cc9390678f0_45753619',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5311643095c9cc93906a2a8_55729137',
  ),
  'page_content' => 
  array (
    0 => 'Block_20794981475c9cc93906dce4_00350915',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3957060805c9cc939073501_22304715',
  ),
  'page_footer' => 
  array (
    0 => 'Block_10279097195c9cc939075c55_47054634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13714420545c9cc939053a42_25806316', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10051256515c9cc9390678f0_45753619', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3957060805c9cc939073501_22304715', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
