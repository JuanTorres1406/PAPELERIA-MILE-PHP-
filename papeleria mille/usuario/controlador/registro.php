<?php
if (!empty($_POST["btnregistrar"])) {
   if (!empty($_POST["NOMBRE"])and !empty($_POST["CONTRASEÑA"]) and !empty($_POST["EMAIL"])) {
    $NOMBRE=$_POST["NOMBRE"];
    $CONTRASEÑA=$_POST["CONTRASEÑA"];
    $EMAIL=$_POST["EMAIL"];
    $sql=$conexion->query("insert into usuarios(NOMBRE,CONTRASEÑA,EMAIL)values('$NOMBRE','$CONTRASEÑA','$EMAIL')");
    if ($sql==1) {
        echo '<div class="alert alert-success">usuario registrado correctamente </div>';
    } else {
        echo '<div class="alert alert-danger"> error al registrar usuario</div>';
       
    }
    
   }else{
    echo '<div class="alert alert-warning">¡completa los campos! </div>';
   }
}
?>