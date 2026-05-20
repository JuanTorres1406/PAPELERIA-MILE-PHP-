<?php
if (!empty($_POST["btnregistrar"])) {
   if (!empty($_POST["PRODUCTO"])and !empty($_POST["CANTIDAD"]) and !empty($_POST["VALOR"]) and !empty($_POST["DESCRIPCION"])) {
    $PRODUCTO=$_POST["PRODUCTO"];
    $CANTIDAD=$_POST["CANTIDAD"];
    $VALOR=$_POST["VALOR"];
    $DESCRIPCION=$_POST["DESCRIPCION"];
    $sql=$conexion->query("insert into inventario(PRODUCTO,CANTIDAD,VALOR,DESCRIPCION)values('$PRODUCTO',$CANTIDAD,$VALOR,'$DESCRIPCION')");
    if ($sql==1) {
        echo '<div class="alert alert-success">Producto registrado correctamente </div>';
    } else {
        echo '<div class="alert alert-danger"> error al registrar producto</div>';
       
    }
    
   }else{
    echo '<div class="alert alert-warning">¡completa los campos! </div>';
   }
}
?>