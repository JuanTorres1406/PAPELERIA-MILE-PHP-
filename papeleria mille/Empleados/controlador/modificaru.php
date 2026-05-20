<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["NOMBRE"]) and !empty($_POST["APELLIDO"]) and !empty($_POST["EDAD"]) and !empty($_POST["CC"]) and !empty($_POST["EMAIL"]) and !empty($_POST["CARGO"]) ) {
        $ID=$_POST["ID"];
        $NOMBRE=$_POST["NOMBRE"];
        $APELLIDO=$_POST["APELLIDO"];
        $EDAD=$_POST["EDAD"];
        $CC=$_POST["CC"];
        $EMAIL=$_POST["EMAIL"];
        $CARGO=$_POST["CARGO"];
        $sql=$conexion->query("UPDATE empleados SET NOMBRE='$NOMBRE',APELLIDO='$APELLIDO',EDAD=$EDAD,CC=$CC,EMAIL='$EMAIL',CARGO='$CARGO'WHERE ID=$ID");
        if ($sql==1) {
            header("location:empleados.php");
        } else {
            echo "<div class='alert alert-danger'>¡ERROR AL MODIFICAR USUARIO!</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>¡CAMPOS INCOMPLETOS!</div>";
    }
}
?>