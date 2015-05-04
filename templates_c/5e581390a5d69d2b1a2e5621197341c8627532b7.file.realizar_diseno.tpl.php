<?php /* Smarty version Smarty-3.0.9, created on 2015-05-04 17:30:55
         compiled from "C:/wamp/www/ProyectoDCPS/templates\realizar_diseno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20643554790af64ab30-49303551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e581390a5d69d2b1a2e5621197341c8627532b7' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\realizar_diseno.tpl',
      1 => 1430753453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20643554790af64ab30-49303551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
realizar_diseno.php?option=add" method="post">
<b>Realizar diseño</b><br/><br/>
<b>Código: </b><input type="text" name="codigo"/><br/><br/>
<b>Dispositivo:</b><select name="dispositivo">
<?php  $_smarty_tpl->tpl_vars['disp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dispositivo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['disp']->key => $_smarty_tpl->tpl_vars['disp']->value){
?>
<option name="dispositivo" value="<?php echo $_smarty_tpl->getVariable('disp')->value->get('codigo');?>
"><?php echo $_smarty_tpl->getVariable('disp')->value->get('codigo');?>
</option> 
<?php }} ?>
</select><br/><br/>
<b>Imagen: </b><input type="text" name="imagen"/></br></br>
<input type="submit" value="Realizar Diseño"/>
