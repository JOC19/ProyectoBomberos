<?php

//Recibir datos y almacenar variables

include 'conexion.php';

$nombre= $_POST ["nombre"];
$email= $_POST ["correo"];
$clave= $_POST ["password"];
$sexo=$_POST["sexo"];

//Consulta para insertar
$insertar = "INSERT INTO usuario(nombre, correo, password, sexo) VALUES ('$nombre','$email','$clave', '$sexo')";



//Verificar si el correo se encuentra registrado

$verificar = mysqli_query ($conexion, "SELECT * FROM usuario where correo = '$email'");
if (mysqli_num_rows($verificar) > 0){

echo '<script>
	alert ("El Correo Electrónico ya se Encuentra Registrado en el Sistema");
		window.history.go(-1);  
	  </script>'; //El Window.histoy.go para regresar al formulario de registro y no se quede en blanco la pagina

exit;

}



//Ejecutar Consulta
$resultado = mysqli_query ($conexion,$insertar);

if (!$resultado){

	echo 'Error al registrarse';

} else{

	echo '<script>
	alert ("Usuario Registrado Exitosamente");
		window.history.go(-1);  
	  </script>'; //Realiza la consulta y mande el mensaje


}

mysqli_close ($conexion);