<?php

include("../method/conect-log.php");

//Recibimos las dos variables
$correo=$_POST["correo"];
$password=$_POST["password"];

/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder */
$admin = mysqli_query($db, "SELECT * FROM administrador WHERE email = '$correo' AND password = '$password'");
$profesor =mysqli_query($db, "SELECT * FROM maestros WHERE email = '$correo' AND password = '$password'");
$alumno = mysqli_query($db, "SELECT * FROM alumnos WHERE email = '$correo' AND password = '$password'");

/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
tres tablas, por lo tanto se guardará en alguno de nuestras tres variables 
que guardan nuestra consulta */

/* Ahora comprobamos que variable contiene al usuario*/
/** @var administrador $admin */
if(mysqli_num_rows($admin) > 0)
{
    /* Si entra en este if significa que el que intenta acceder es un alumno, 
    por lo tanto le creamos una sesión */
    session_start();

    $_SESSION['admin']="$correo";

    /* Nos dirigimos al espacio de los alumnos usando header que nos 
    redireccionará a la página que le indiquemos */
    header("Location: ../tablas/panel_admin.php");
    
    /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
    seguir ejecutando código de este archivo */
    exit(); 
}

/* Ahora comprobamos si el que intenta acceder es un profesor */
else if(mysqli_num_rows($profesor) > 0)
{
    session_start();
    $_SESSION['profesor']="$usuario";
    header("Location: entrenador/espacioentrenador.php");
    exit(); 
}

//comprobamos si es un director el que intenta abrir la sesión
else if(mysqli_num_rows($alumno) > 0)
{
    session_start();
    $_SESSION['alumno']="$alumno";
    header("Location: administrador/espacioadministrador.php");
    exit();
} 
else 
{
   /* Si no el usuario no se encuentra en ninguna de las tres tablas 
   imprime el siguiente mensaje */
   $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   echo $mensajeaccesoincorrecto; 
}
?>