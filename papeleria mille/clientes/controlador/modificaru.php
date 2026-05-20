<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["NOMBRE"]) and !empty($_POST["APELLIDO"])and !empty($_POST["TELEFONO"]) and !empty($_POST["EMAIL"]) ) {
        $ID=$_POST["ID"];
        $NOMBRE=$_POST["NOMBRE"];
        $APELLIDO=$_POST["APELLIDO"];
        $TELEFONO=$_POST["TELEFONO"];
        $EMAIL=$_POST["EMAIL"];
        $sql=$conexion->query("UPDATE clientes SET NOMBRE='$NOMBRE',APELLIDO='$APELLIDO',TELEFONO=$TELEFONO,EMAIL='$EMAIL'WHERE ID=$ID");
        if ($sql==1) {
            header("location:clientes.php");
        } else {
            echo "<div class='alert alert-danger'>¡ERROR AL MODIFICAR CLIENTE!</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>¡CAMPOS INCOMPLETOS!</div>";
    }
}
?>