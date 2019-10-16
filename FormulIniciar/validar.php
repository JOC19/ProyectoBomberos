<?php

$correo= $_POST ["correo"];
$password= $_POST ["password"];

//Conexion Base de Datos

$conexion=mysqli_connect("localhost", "root", "", "registro");

//Realizar consulta

$consulta="SELECT * from usuario WHERE correo='$correo' and password='$password'";


//Resultado Ejecutar consulta

$resultado=mysqli_query ($conexion, $consulta);

$filas=mysqli_num_rows ($resultado);

if ($filas>0){
	header ("location:bienvenido.html");

}

else {

		echo '<script>
	alert ("Error de autenticación, ingrese los datos correctamente");
		window.history.go(-1);  
	  </script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);


