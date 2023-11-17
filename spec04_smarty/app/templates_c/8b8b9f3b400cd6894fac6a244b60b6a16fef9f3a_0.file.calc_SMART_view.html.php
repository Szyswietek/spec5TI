<?php
/* Smarty version 4.3.2, created on 2023-11-17 11:23:16
  from 'C:\xampp\htdocs\specTI-main\spec04_smarty\app\calc_SMART_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65573f140a0e54_33764485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b8b9f3b400cd6894fac6a244b60b6a16fef9f3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\specTI-main\\spec04_smarty\\app\\calc_SMART_view.html',
      1 => 1700216591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65573f140a0e54_33764485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213975438365573f14091994_33997186', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191724407665573f14092716_13284837', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_213975438365573f14091994_33997186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_213975438365573f14091994_33997186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_191724407665573f14092716_13284837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191724407665573f14092716_13284837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body>
    

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">

    <label style="color: white;">Kwota:</label>  
	<input id="kwota" type="number" name="kwota"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
"><br/>
	<label style="color: white;">Liczba rat:</label> 
	<input type = "number" id = "rata" name = "rata" value ="<?php echo $_smarty_tpl->tpl_vars['form']->value['rata'];?>
" ><br/>
	<label style="color: white;">Oprocentowanie:</label> 
	<input type = "number" id = "op" name="operacja" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['operacja'];?>
">%<br/>
	<br />
	
	<input style = "background-color:black;" type="submit" value="Oblicz" />
	
</form>	

<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
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
