<form name="form1" method="post" action="">
  <div align="center">
    <table width="200" border="0">
      <tr>
        <td width="110" bgcolor="#CCFF33"><strong><em>Clave del Cliente</em></strong></td>
        <td width="74" bgcolor="#CCFF33"><label for="txt_clave_cliente">
          <input name="txt_clave_cliente" type="text" id="txt_clave_cliente" size="5" maxlength="5">
        </label></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Nombre</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_nombre" type="text" id="txt_nombre" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Apellido Paterno</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_ap_paterno" type="text" id="txt_ap_paterno" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Apellido Materno</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_ap_materno" type="text" id="txt_ap_materno" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Calle</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_calle" type="text" id="txt_calle" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Numero</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_numero" type="text" id="txt_numero" size="5" maxlength="5"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Ciudad</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_ciudad" type="text" id="txt_ciudad" size="20" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Sexo</em></strong></td>
        <td bgcolor="#CCFF33"><label for="txt_sexo"></label>
        <input name="txt_sexo" type="text" id="txt_sexo" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Telefono</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_telefono" type="text" id="txt_telefono" size="12" maxlength="12"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Codigo Postal</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_codigo_postal" type="text" id="txt_codigo_postal" size="8" maxlength="8"></td>
      </tr>
      <tr>
        <td bgcolor="#CCFF33"><strong><em>Correro Electronico</em></strong></td>
        <td bgcolor="#CCFF33"><input name="txt_e_mail" type="text" id="txt_e_mail" size="30" maxlength="30"></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCC33"><div align="center">
          <p>
            <input type="submit" name="btn_guardar" id="btn_guardar" value="Guardar">
          <?php 		  
		  		  
		  
		if(isset($_POST['btn_guardar'])){
			include("conexion.php");
$txt_clave_cliente = $_POST['txt_clave_cliente'];
$txt_nombre = $_POST['txt_nombre'];
$txt_ap_paterno = $_POST['txt_ap_paterno'];
$txt_ap_materno = $_POST['txt_ap_materno'];
$txt_calle = $_POST['txt_calle'];
$txt_numero = $_POST['txt_numero'];
$txt_ciudad = $_POST['txt_ciudad'];
$txt_sexo = $_POST['txt_sexo'];
$txt_telefono = $_POST['txt_telefono'];
$txt_codigo_postal = $_POST['txt_codigo_postal'];
$txt_e_mail = $_POST['txt_e_mail'];		
			
mysqli_query($conexion,"insert into clientes(clave_cliente,nombre,ap_paterno,ap_materno,calle,numero,ciudad,sexo,telefono,codigo_postal,e_mail) values('$txt_clave_cliente','$txt_nombre','$txt_ap_paterno''$txt_ap_materno','$txt_calle','$txt_numero','$txt_ciudad','$txt_sexo','$txt_telefono','$txt_codigo_postal','$txt_e_mail')");

echo "Se insertaron los datos correctamente";		
			}
   ?></p>
        </div></td>
      </tr>
    </table>
  </div>
</form>