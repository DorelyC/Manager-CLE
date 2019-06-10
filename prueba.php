<?php

include("method/conect-log.php");



$consulta = mysqli_query($db, "SELECT * FROM administrador WHERE email ='admin@cle.mx' AND pasword ='123'");




?>