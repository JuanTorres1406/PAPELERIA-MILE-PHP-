<?php
if (!empty($_POST["btnregistrar"])) {
   if (!empty($_POST["NOMBRE"])and !empty($_POST["APELLIDO"]) and !empty($_POST["EDAD"]) and !empty($_POST["CC"])  and !empty($_POST["EMAIL"]) and !empty($_POST["CARGO"])) {
    $NOMBRE=$_POST["NOMBRE"];
    $APELLIDO=$_POST["APELLIDO"];
    $EDAD=$_POST["EDAD"];
    $CC=$_POST["CC"];
    $EMAIL=$_POST["EMAIL"];
    $CARGO=$_POST["CARGO"];
    $sql=$conexion->query("insert into empleados(NOMBRE,APELLIDO,EDAD,CC,EMAIL,CARGO)values('$NOMBRE','$APELLIDO',$EDAD,$CC,'$EMAIL','$CARGO')");
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