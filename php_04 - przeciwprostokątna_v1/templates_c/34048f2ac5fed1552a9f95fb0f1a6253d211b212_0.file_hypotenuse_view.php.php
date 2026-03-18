<?php
/* Smarty version 5.4.2, created on 2026-03-11 12:32:34
  from 'file:C:\xampp\htdocs\php_04 - przeciwprostokątna_v1/app/hypotenuse_view.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69b152d2316176_89439661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34048f2ac5fed1552a9f95fb0f1a6253d211b212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04 - przeciwprostokątna_v1/app/hypotenuse_view.php',
      1 => 1773228744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69b152d2316176_89439661 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04 - przeciwprostokątna_v1\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_197567272669b152d22c4500_33123742', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_37942793369b152d22cdea7_23701518', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_197567272669b152d22c4500_33123742 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04 - przeciwprostokątna_v1\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_37942793369b152d22cdea7_23701518 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04 - przeciwprostokątna_v1\\app';
?>


<h3>Liczenie C</h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
	<fieldset>
		<label for="a">Podaj wartość a</label>
		<input id="a" type="text" placeholder="wartość a" name="a" value="<?php echo $_smarty_tpl->getValue('form')['a'];?>
">
		
		<label for="b">Podaj wartość b</label>
		<input id="b" type="text" placeholder="wartość b" name="b" value="<?php echo $_smarty_tpl->getValue('form')['b'];?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->getValue('result');?>

	</p >
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
