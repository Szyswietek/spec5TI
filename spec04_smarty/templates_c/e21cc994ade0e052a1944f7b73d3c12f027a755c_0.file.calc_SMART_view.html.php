<?php
/* Smarty version 4.3.2, created on 2023-11-29 13:15:55
  from 'C:\xampp\htdocs\specTI-main\spec04_smarty\app\calc_SMART_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65672b7b8cd835_83260427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e21cc994ade0e052a1944f7b73d3c12f027a755c' => 
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
function content_65672b7b8cd835_83260427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133767685065672b7b69df29_50085240', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207323473565672b7b69f2e7_26948537', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_133767685065672b7b69df29_50085240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_133767685065672b7b69df29_50085240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_207323473565672b7b69f2e7_26948537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_207323473565672b7b69f2e7_26948537',
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
