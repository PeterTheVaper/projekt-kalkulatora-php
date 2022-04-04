<?php
/* Smarty version 4.1.0, created on 2022-04-05 00:29:54
  from 'C:\xampp\htdocs\php_04_szablonowanie_smarty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b7162ca50a2_88580106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5c1371889b2849fa216824ea870a0cd28e03fb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablonowanie_smarty\\templates\\main.tpl',
      1 => 1649111385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b7162ca50a2_88580106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['p_desc']->value ?? null)===null||$tmp==='' ? "Default description" ?? null : $tmp);?>
">


    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/bootstrap.min.css">


    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['p_title']->value ?? null)===null||$tmp==='' ? "Default title!" ?? null : $tmp);?>
</title>
</head>
<body>
   
    <div class="formContainer">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_334632982624b7162ca45c2_22576282', 'content');
?>

    </div>
    <div class="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1837171870624b7162ca4be4_63240654', 'footer');
?>

    </div>
</body>

</html><?php }
/* {block 'content'} */
class Block_334632982624b7162ca45c2_22576282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_334632982624b7162ca45c2_22576282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content loaded<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1837171870624b7162ca4be4_63240654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1837171870624b7162ca4be4_63240654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 No footer loaded! <?php
}
}
/* {/block 'footer'} */
}
