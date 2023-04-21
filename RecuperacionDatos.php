<?php
if (isset($_POST['Enviar'])){
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$FechaN = $_POST['FechaN'];
$Email = $_POST['Email'];
if($Nombre == ""){
    echo "Falta asignar un nombre";
}
else if($Apellidos == ""){
    echo "Falta asignar apellidos";
}
else if($FechaN == ""){
    echo "Falta asignar una fechan";
}
else if($Email == ""){
    echo "Falta asignar un email";
}
else{
    echo "Tu Nombre es: ".$Nombre." Tus Apellidos son: ".$Apellidos." Tu Fecha de Nacimiento es: ".$FechaN." Tu Email es: ".$Email;
}
}
else {
    echo "No le diste clic al boton";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widtch-device-widch, initial-scale=1.0">
    <title>Recuperacion de datos PHP</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <input type="text" name="Nombre" placeholder="Nombre Completo"/><br>
      <input type="text" name="Apellidos" placeholder="Apellidos"/><br>
      <label for="FechaN">Selecciona tu fecha de nacimiento</label><input type="date" name="FechaN"/><br>
      <input type="email" value="Email" placeholder="nombr@s.com"/><br>
      <input type="submit" value="Enviar" name="Enviar"/>
    </form>
</body>
<html>
