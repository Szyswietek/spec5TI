<?php
/* Smarty version 4.3.2, created on 2023-11-17 10:30:28
  from 'C:\xampp\htdocs\specTI-main\spec04_smarty\app\calc_SMART_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_655732b49716e7_47624187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e21cc994ade0e052a1944f7b73d3c12f027a755c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\specTI-main\\spec04_smarty\\app\\calc_SMART_view.html',
      1 => 1700213426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655732b49716e7_47624187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1141385840655732b496d7e7_00058986', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1077848446655732b496e2e6_07027717', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1141385840655732b496d7e7_00058986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1141385840655732b496d7e7_00058986',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1077848446655732b496e2e6_07027717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1077848446655732b496e2e6_07027717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body>
    

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">

    <label style="color: white;">Kwota:</label>  
	<input id="kwota" type="number" name="kwota"  value="<?php echo $_smarty_tpl->tpl_vars['kwota']->value;?>
"><br/>
	<label style="color: white;">Liczba rat:</label> 
	<input type = "number" id = "rata" name = "rata" value ="<?php echo $_smarty_tpl->tpl_vars['rata']->value;?>
" ><br/>
	<label style="color: white;">Oprocentowanie:</label> 
	<input type = "number" id = "op" name="operacja" value="<?php echo $_smarty_tpl->tpl_vars['operacja']->value;?>
">%<br/>
	<br />
	
	<input style = "background-color:black;" type="submit" value="Oblicz" />
	
</form>	
<?php
}
}
/* {/block 'content'} */
}
