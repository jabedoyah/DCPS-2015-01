<?php /* Smarty version Smarty-3.0.9, created on 2015-05-01 19:23:43
         compiled from "C:/wamp/www/ProyectoDCPS/templates\definir_dispositivo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270125543b69f341923-30530328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a2730363dee4127c9e4a1607edf1517be2a5dc' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\definir_dispositivo.tpl',
      1 => 1430500783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270125543b69f341923-30530328',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
definir_dispositivo.php?option=add" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="5">
<tr><td>
<b>Definir dispositivo</b><br /><br />
<b>Ingrese el codigo:</b><input type="text" name="codigo" /><br />
<b>Ingrese el costo:</b> <input type="text" name="costo" /><br />
<b>Ingrese la funcion:</b> <input type="text" name="funcion" /><br />
<input class="btn btn-primary" type="submit" value="Registrar" />
</td></tr></table>
</form>
</div>