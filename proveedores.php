<form name="form1" method="post" action="">
  <div align="center">
    <table width="200" border="0">
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Clave del Proveedor</strong></em></td>
        <td bgcolor="#CCFF33"><label for="txt_clave_proveedor"></label>
        <input name="txt_clave_proveedor" type="text" id="txt_clave_proveedor" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Nombre</strong></em></td>
        <td bgcolor="#CCFF33"><input name="txt_nombre_pro" type="text" id="txt_nombre_pro" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Apellido Paterno</strong></em></td>
        <td bgcolor="#CCFF33"><input name="txt_ap_paterno" type="text" id="txt_ap_paterno" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Apellido Materno</strong></em></td>
        <td bgcolor="#CCFF33"><input name="txt_ap_materno" type="text" id="txt_ap_materno" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Calle</strong></em></td>
        <td bgcolor="#CCFF33"><input name="txt_calle" type="text" id="txt_calle" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Ciudad</strong></em></td>
        <td bgcolor="#CCFF33"><input name="txt_ciudad" type="text" id="txt_ciudad" size="15" maxlength="15"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Telefono</strong></em></td>
        <td bgcolor="#CCFF33"><input name="txt_telefono" type="text" id="txt_telefono" size="12" maxlength="12"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Codigo Postal</strong></em></td>
        <td bgcolor="#CCFF33"><input name="txt_codigo_postal" type="text" id="txt_codigo_postal" size="8" maxlength="8"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><em><strong>Correo Electronico</strong></em></td>
        <td bgcolor="#CCFF33"><input name="txt_e_mail" type="text" id="txt_e_mail" size="30" maxlength="30"></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCC33"><div align="center">
          <input type="submit" name="btn_guardar" id="btn_guardar" value="Guardar">
        </div></td>
      </tr>
    </table>
    <?php
    if($btn_guardar == "Guardar"){
mysql_connect("localhost","root","");
mysql_db_query("fix_tech_support", "insert into proveedores('clave_proveedor','nombre','ap_paterno','ap_materno','calle','telefono','codigo_postal','e_mail') values ('txt_clave_proveedor','txt_nombre_pro','txt_ap_paterno','txt_ap_materno','txt_calle','txt_ciudad','txt_telefono','txt_codigo_postal','txt_e_mail')");		
		}
	?>
  </div>
</form>
