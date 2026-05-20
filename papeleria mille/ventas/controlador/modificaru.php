<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["PRODUCTO"]) and !empty($_POST["CANTIDAD"]) and !empty($_POST["VALOR"]) and !empty($_POST["DESCRIPCION"]) ) {
        $ID=$_POST["ID"];
        $PRODUCTO=$_POST["PRODUCTO"];
        $CANTIDAD=$_POST["CANTIDAD"];
        $VALOR=$_POST["VALOR"];
        $DESCRIPCION=$_POST["DESCRIPCION"];
        $sql=$conexion->query("UPDATE ventas SET PRODUCTO='$PRODUCTO',CANTIDAD=$CANTIDAD,VALOR=$VALOR,DESCRIPCION='$DESCRIPCION'WHERE ID=$ID");
        if ($sql==1) {
            header("location:ventas.php");
        } else {
            echo "<div class='alert alert-danger'>¡ERROR AL MODIFICAR VENTA!</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>¡CAMPOS INCOMPLETOS!</div>";
    }
}
?>