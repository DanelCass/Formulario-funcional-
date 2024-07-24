<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "formulario";
$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<style>

html{
  background-image: radial-gradient(circle at -13.55% 26.87%, #cdfcc5 0, #c1fbc8 12.5%, #adf4c5 25%, #92e8bf 37.5%, #6cd8b4 50%, #3bc7ab 62.5%, #00bca9 75%, #00b4ac 87.5%, #00b1b4 100%);

}
body {
  font-family: Arial, Helvetica, sans-serif;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
form{
  padding: 50px 55px;
  box-shadow: 0 0 20px rgba(0,0,0,0.2);
  border-radius: 20px;
  text-align: center;
  width: 340px;
}
h2{
  color: #0c0f0c;
  font-size: 35px;
  box-shadow: 0 0 20px rgba(0,0,0,0.0);
 

 
}
.input-group{
  display: flex;
  flex-direction: column;
  text-align: center;
  
}
label{
  color: #283629;
  font-size: 15px;
  font-weight: 600px;
  margin-bottom: 10px;
}
.bnt{
  font-size: 16px;
  color: #FFFFFF;
  border: 0;
  border-radius: 25px;
  background-color: #51D94C;
  box-shadow: 0 0 20px rgba(25, 254, 0, 0.4);
  cursor: pointer;
}

.btn:hover{
  background-color: #50E04B;
}

input::placeholder,textarea::placeholder{
  color: #7ac47e;
}
.form-txt {
  margin-bottom: 30px;
  display: flex;
  justify-content: space-between;
  text-align: center;
}

input{
  padding: 17px 25px;
  border-radius: 25px;
  margin-bottom: 20px;
  background-color: #EDFFF0;
  border: 2px double black;
  color: #283629;
  outline: none;
}

  @media(max-width:991px){
  
  body{
    padding: 30px;
  }
  
  form{
    padding: 50px 30px; 
    width: 100%;
    }
  
  input{
    padding: 15px;
    }
}
</style>

<body>
     <form id="formulario"  action="index.php"   method="POST">
   <h2>Formulario</h2>
<div class="input-group">
 <label for="name">Nombre:</label>
      <input type="text" id="name" name="nombre" required placeholder="nombre" />
      <label for="mail">Correo electrónico:</label>
      <input type="email" id="mail" name="correo" required  placeholder="correo"/>
      <label for="telefono">telefono:</label>
      <input type="#" id="" name="telefono" required placeholder="telefono"/>
   <input class="btn" type="submit" name="registro">
  <input class="btn" type="reset">
</form>
<script src="app.js"></script>
</body>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {  
       $nombre= 
        htmlspecialchars($_POST['nombre']);
      $correo= 
        htmlspecialchars($_POST['correo']);
     $telefono= 
        htmlspecialchars ($_POST['telefono']);

        $insertDatos = "INSERT INTO datos VALUES('$nombre','$correo','$telefono','')";

        $ejecutarInserta = mysqli_query ($enlace,$insertDatos);
  
        echo "Gracias $nombre tu correo ha sido enviado";
 }

?>
</html>