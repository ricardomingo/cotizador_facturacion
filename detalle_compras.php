<form name="form1" method="post" action="">falta arreglar lo del iva
  <div align="center">
    <table width="200" border="0">
      <tr>
        <td bgcolor="#CCFF33">Detalle de la Compra</td>
        <td bgcolor="#CCFF33"><label for="txt_detalle_compra"></label><input name="txt_detalle_compra" type="text" id="txt_detalle_compra" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Numero de Factura de la Compra</td>
        <td bgcolor="#CCFF33"><input name="txt_num_factura_compra" type="text" id="txt_num_factura_compra" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Clave del Producto</td>
        <td bgcolor="#CCFF33"><input name="txt_clave_producto" type="text" id="txt_clave_producto" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Cantidad</td>
        <td bgcolor="#CCFF33"><input name="txt_cantidad" type="text" id="txt_cantidad" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Costo</td>
        <td bgcolor="#CCFF33"><input name="txt_costo" type="text" id="txt_costo" size="11" maxlength="11"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">IVA</td>
        <td bgcolor="#CCFF33">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCC33"><div align="center">
          <input type="submit" name="btn_guardar" id="btn_guardar" value="Guardar">
        </div></td>
      </tr>
    </table>
    <?php
  if($btn_guardar=="Guardar"){
mysql_connect("localhost","root","");	  
mysql_db_query("fix_tech_support", "insert into detalle_compras('id_detalle_compra','num_factura_compra','clave_producto','cantidad','costo','iva') values ('txt_detalle_compra','txt_num_factura_compra','txt_clave_producto','txt_cantidad','txt_costo','iva')");	  
	  }  
	?>
    
    
  </div>
</form>
