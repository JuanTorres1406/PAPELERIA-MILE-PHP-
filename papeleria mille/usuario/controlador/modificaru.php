<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["NOMBRE"]) and !empty($_POST["CONTRASEÑA"]) and !empty($_POST["EMAIL"]) ) {
        $ID=$_POST["ID"];
        $NOMBRE=$_POST["NOMBRE"];
        $CONTRASEÑA=$_POST["CONTRASEÑA"];
        $EMAIL=$_POST["EMAIL"];
        $sql=$conexion->query("UPDATE usuarios SET NOMBRE='$NOMBRE',CONTRASEÑA='$CONTRASEÑA',EMAIL='$EMAIL'WHERE ID=$ID");
        if ($sql==1) {
            header("location:insano.php");
        } else {
            echo "<div class='alert alert-danger'>¡ERROR AL MODIFICAR USUARIO!</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>¡CAMPOS INCOMPLETOS!</div>";
    }
}
?>