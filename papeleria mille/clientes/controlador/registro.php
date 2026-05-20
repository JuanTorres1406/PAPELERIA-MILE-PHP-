<?php
if (!empty($_POST["btnregistrar"])) {
   if (!empty($_POST["NOMBRE"])and !empty($_POST["APELLIDO"]) and !empty($_POST["TELEFONO"]) and !empty($_POST["EMAIL"])) {
    $NOMBRE=$_POST["NOMBRE"];
    $APELLIDO=$_POST["APELLIDO"];
    $TELEFONO=$_POST["TELEFONO"];
    $EMAIL=$_POST["EMAIL"];
    $sql=$conexion->query("insert into clientes(NOMBRE,APELLIDO,TELEFONO,EMAIL)values('$NOMBRE','$APELLIDO',$TELEFONO,'$EMAIL')");
    if ($sql==1) {
        echo '<div class="alert alert-success">Cliete registrado correctamente </div>';
    } else {
        echo '<div class="alert alert-danger"> error al registrar cliente</div>';
       
    }
    
   }else{
    echo '<div class="alert alert-warning">¡completa los campos! </div>';
   }
}
?>