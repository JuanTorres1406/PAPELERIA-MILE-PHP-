<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["PROVEEDOR"]) and !empty($_POST["EMPRESA"]) and !empty($_POST["NIT"]) and !empty($_POST["EMAIL"]) and !empty($_POST["TELEFONO"]) ) {
        $ID=$_POST["ID"];
        $PROVEEDOR=$_POST["PROVEEDOR"];
        $EMPRESA=$_POST["EMPRESA"];
        $NIT=$_POST["NIT"];
        $EMAIL=$_POST["EMAIL"];
        $TELEFONO=$_POST["TELEFONO"];
        $sql=$conexion->query("UPDATE proveedores SET PROVEEDOR='$PROVEEDOR',EMPRESA='$EMPRESA',NIT=$NIT,EMAIL='$EMAIL',TELEFONO=$TELEFONO WHERE ID=$ID");
        if ($sql==1) {
            header("location:proveedores.php");
        } else {
            echo "<div class='alert alert-danger'>¡ERROR AL MODIFICAR PROVEEDOR!</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>¡CAMPOS INCOMPLETOS!</div>";
    }
}
?>