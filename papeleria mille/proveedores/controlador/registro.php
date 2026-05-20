<?php
if (!empty($_POST["btnregistrar"])) {
   if (!empty($_POST["PROVEEDOR"])and !empty($_POST["EMPRESA"]) and !empty($_POST["NIT"]) and !empty($_POST["EMAIL"]) and !empty($_POST["TELEFONO"])) {
    $PROVEEDOR=$_POST["PROVEEDOR"];
    $EMPRESA=$_POST["EMPRESA"];
    $NIT=$_POST["NIT"];
    $EMAIL=$_POST["EMAIL"];
    $TELEFONO=$_POST["TELEFONO"];
    $sql=$conexion->query("insert into proveedores(PROVEEDOR,EMPRESA,NIT,EMAIL,TELEFONO)values('$PROVEEDOR','$EMPRESA',$NIT,'$EMAIL',$TELEFONO)");
    if ($sql==1) {
        echo '<div class="alert alert-success">Proveedor registrado correctamente </div>';
    } else {
        echo '<div class="alert alert-danger"> error al registrar proveedor</div>';
       
    }
    
   }else{
    echo '<div class="alert alert-warning">¡completa los campos! </div>';
   }
}
?>