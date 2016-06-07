<?php
include_once("../DataBaseConnection.php");

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$request = (array) $request;

$sqlValidateEmail = "SELECT * FROM user WHERE email = '".$request['email']."' and password = '".$request['password']."' ";
$existe = Database::get_valor_query($sqlValidateEmail,"password");

if($existe == $request['password'])
{
	$userType = "";
	if($request['password'] == "admin"){
		session_start();

		// Iniciar las variables de session
		$_SESSION['activo'] = true;
		$_SESSION['type'] = "admin";
		$_SESSION['email'] = $request['email'];

		$userType = "admin";

	}else{
		session_start();

		// Iniciar las variables de session
		$_SESSION['activo'] = true;
		$_SESSION['type'] = "user";
		$_SESSION['email'] = $request['email'];

		$userType = "user";
	}

	echo json_encode( array('err'=>false, 'mensaje'=>$userType) );

}
else
{
	echo json_encode( array('err'=>true, 'mensaje'=>'No se encontro un usuario con ese correo.') );
}

?>