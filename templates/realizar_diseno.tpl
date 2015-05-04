<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<form action="{$gvar.l_global}realizar_diseno.php?option=add" method="post">
<b>Realizar diseño</b><br/><br/>
<b>Código: </b><input type="text" name="codigo"/><br/><br/>
<b>Dispositivo:</b><select name="dispositivo">
{foreach $dispositivo as $disp}
<option name="dispositivo" value="{$disp->get('codigo')}">{$disp->get('codigo')}</option> 
{/foreach}
</select><br/><br/>
<b>Imagen: </b><input type="text" name="imagen"/></br></br>
<input type="submit" value="Realizar Diseño"/>
