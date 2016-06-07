<?php

include_once("../DataBaseConnection.php");

$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request = (array) $request;

// validar user por medio del email

$sqlValidateEmail = "SELECT * FROM user WHERE email = '".$request['email']."' ";
$existe = Database::get_valor_query($sqlValidateEmail,"email");

if($existe == $request['email'])
{
	echo json_encode( array('err'=>true, 'mensaje'=>'Ya existe un usuario con ese correo.') );
}
else
{
	$sql = "INSERT INTO user(name, email, password) VALUES ('".$request['name']."', '".$request['email']."','".$request['password']."')" ;

	$respIser = Database::ejecutar_idu($sql);

	$Respuesta = "";
	if($respIser == "1"){
		$Respuesta = json_encode( array('err' => false, 'mensaje'=>'Registro Insertado.' ));
	}else{
		$Respuesta = json_encode( array('err' => true, 'mensaje'=> $Hecho ));
	}

	echo $Respuesta;
}

?>