<?php
/* Smarty version 4.1.0, created on 2022-04-05 00:25:05
  from 'C:\xampp\htdocs\php_04_szablonowanie_smarty\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b704133d9a2_19152514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f95adadd85f8f86d70ea23f78a719753ba5c4b1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablonowanie_smarty\\app\\calc.tpl',
      1 => 1649111087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b704133d9a2_19152514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_379157563624b7041330ff4_03647727', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1545262632624b7041331822_29068677', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_379157563624b7041330ff4_03647727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_379157563624b7041330ff4_03647727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer  style="text-align:center"; "background-color: coral";>moja stopka</footer><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1545262632624b7041331822_29068677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1545262632624b7041331822_29068677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id= head>
<h3  style="font-size:2em" >kalkulator odsetek</h2>


<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="x">Podaj ilosc pieniedzy:</label>
		<input id="x" type="text" placeholder="warto???? x" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
">
		<label for="y">Podaj ilosc lat:</label>
		<input id="y" type="text" placeholder="warto???? y" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
">
         <label for="y">Podaj oprocentowanie w procentach :</label>
		<input id="y" type="text" placeholder="warto???? z" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
">
	</fieldset>
	<button type="submit" class="btn-action">Oblicz</button>
</form>

<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wyst??pi??y b????dy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
