<?php
/* Smarty version 3.1.33, created on 2020-10-10 13:38:34
  from 'C:\xampp\htdocs\shop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f819d3a491c38_13114173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c18cddd4e9e293b5fb89942d60f38fce722b847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\classic\\templates\\page.tpl',
      1 => 1602318354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f819d3a491c38_13114173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2394047735f819d3a487c56_01178229', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_460329405f819d3a488df5_17516803 extends Smarty_Internal_Block
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
class Block_5194419315f819d3a488416_62745901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_460329405f819d3a488df5_17516803', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12066024585f819d3a48e8b5_87525165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4121319975f819d3a48f354_46310064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19180590055f819d3a48dff3_46028517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12066024585f819d3a48e8b5_87525165', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4121319975f819d3a48f354_46310064', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15093849385f819d3a4908a1_34771441 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3999707735f819d3a490146_21647451 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15093849385f819d3a4908a1_34771441', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2394047735f819d3a487c56_01178229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2394047735f819d3a487c56_01178229',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5194419315f819d3a488416_62745901',
  ),
  'page_title' => 
  array (
    0 => 'Block_460329405f819d3a488df5_17516803',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19180590055f819d3a48dff3_46028517',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12066024585f819d3a48e8b5_87525165',
  ),
  'page_content' => 
  array (
    0 => 'Block_4121319975f819d3a48f354_46310064',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3999707735f819d3a490146_21647451',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15093849385f819d3a4908a1_34771441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5194419315f819d3a488416_62745901', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19180590055f819d3a48dff3_46028517', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3999707735f819d3a490146_21647451', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
