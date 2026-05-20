<?php
if (!empty($_GET["ID"])) {
    $ID=$_GET["ID"];
    $sql=$conexion->query("DELETE FROM inventario WHERE ID=$ID");
    if ($sql==1) {
        echo '<div class="alert alert-success">¡Producto elminado correctamente!</div>';
    } else {
        echo '<divclass="alert alert-success">¡Erro al eliminar!</div>';
    }
    
}

?>