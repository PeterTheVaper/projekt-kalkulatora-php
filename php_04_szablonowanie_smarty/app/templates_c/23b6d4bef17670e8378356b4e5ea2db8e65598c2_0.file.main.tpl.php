<?php
/* Smarty version 4.1.0, created on 2022-04-05 00:15:36
  from 'C:\xampp\htdocs\php_04_szablonowanie_smarty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b6e083cca11_82896651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23b6d4bef17670e8378356b4e5ea2db8e65598c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablonowanie_smarty\\templates\\main.tpl',
      1 => 1648507092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b6e083cca11_82896651 (Smarty_Internal_Template $_smarty_tpl) {
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
/app/bootstrap-theme.css">


    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['p_title']->value ?? null)===null||$tmp==='' ? "Default title!" ?? null : $tmp);?>
</title>
</head>
<body>
   
    <div class="formContainer">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2089683337624b6e083cbec4_55244685', 'content');
?>

    </div>
    <div class="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1204234015624b6e083cc514_37003150', 'footer');
?>

    </div>
</body>

</html><?php }
/* {block 'content'} */
class Block_2089683337624b6e083cbec4_55244685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2089683337624b6e083cbec4_55244685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content loaded<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1204234015624b6e083cc514_37003150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1204234015624b6e083cc514_37003150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 No footer loaded! <?php
}
}
/* {/block 'footer'} */
}
