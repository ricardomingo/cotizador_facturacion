<form name="form1" method="post" action="">
  <div align="center">
    <table width="200" border="0">
      <tr>
        <td bgcolor="#CCFF33">Clave del Producto</td>
        <td bgcolor="#CCFF33"><label for="txt_clave_producto"></label><input name="txt_clave_producto" type="text" id="txt_clave_producto" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Codigo</td>
        <td bgcolor="#CCFF33"><input name="txt_codigo" type="text" id="txt_codigo" size="15" maxlength="15"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Marca</td>
        <td bgcolor="#CCFF33"><input name="txt_marca" type="text" id="txt_marca" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Descripcion del Producto</td>
        <td bgcolor="#CCFF33"><input name="txt_descripcion_pro" type="text" id="txt_descripcion_pro" size="30" maxlength="30"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Precio</td>
        <td bgcolor="#CCFF33"><input name="txt_precio" type="text" id="txt_precio" size="11" maxlength="11"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Costo</td>
        <td bgcolor="#CCFF33"><input name="txt_costo" type="text" id="txt_costo" size="11" maxlength="11"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Existencia</td>
        <td bgcolor="#CCFF33"><input name="txt_existencia" type="text" id="txt_existencia" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCC33"><div align="center">
          <input type="submit" name="btn_guardar" id="btn_guardar" value="Guardar">
        </div></td>
      </tr>
    </table>
    <?php
	if ($btn_guardar == "Guardar"){
mysql_connect("localhost","root","");		
mysql_db_query("fix_tech_support", "insert into productos('clave_producto','codigo','marca','descripcion','precio','costo','existencia') values ('txt_clave_producto','txt_codigo','txt_marca','txt_descripcion_pro','txt_precio','txt_costo','txt_existencia')");	

	}
	?>
    
  </div>
</form>
