<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    
    
    <title>Loging</title>
</head>

<body class="form-login" style="background-color: #F5F5F5">
   
   <div>
      <br>
      <a href="../index.php" style="font-size: 20px; margin-left:20px;">
      <img src="../img/back.png" style="width: 20px; height: 30px; margin-left:20px;">
       Regresar</a>
   </div>
   
   <div align="center" style="border: black 1px solid; width: 400px; height: 200px; margin-top: 150px; margin-left: 500px;" class="div-form">
       <form class="form-login" method="post" action="session_start.php">
          <h4>Login</h4>
           <input type="text" name="correo" autofocus placeholder="Correo">
           <br>
           <br>
           <input type="password" name="password" placeholder="Contraseña">
           <br>
           <br>
           <input type="submit" value="Iniciar sesion">
       </form>
       
   </div>
    
</body>
</html>
