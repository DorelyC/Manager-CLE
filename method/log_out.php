<?php 

//Codigo para que al momento de cerrar la pagina se cierre la sesion
    session_start(); 
    session_destroy(); 
  
    header('location: ../index.php'); 