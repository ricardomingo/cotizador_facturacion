<form name="form1" method="post" action="">
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td bgcolor="#CCFF33">Numero de Factura de Venta</td>
        <td bgcolor="#CCFF33"><label for="txt_num_factura_venta"></label><input name="txt_num_factura_venta" type="text" id="txt_num_factura_venta" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Clave del Proveedor</td>
        <td bgcolor="#CCFF33"><input name="txt_clave_proveedor" type="text" id="txt_clave_proveedor" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Fecha</td>
        <td bgcolor="#CCFF33"><label for="txt_fecha"></label>
        <input type="date" name="txt_fecha" id="txt_fecha"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33">Total</td>
        <td bgcolor="#CCFF33"><input name="txt_total" type="text" id="txt_total" size="11" maxlength="11"></td>
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
mysql_db_query("fix_tech_support","insert into ventas('num_factura_venta','clave_proveedor','fecha','total') values ('txt_num_factura_venta','txt_clave_proveedor','txt_fecha','total')");	  
	  
	}
  
  ?>  
    
  </div>
</form>