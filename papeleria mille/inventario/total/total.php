<?php
// Conexión a la base de datos
include "modelo/conexion.php";

// Consulta para obtener los totales de cantidad y valor
$sql = $conexion->query("SELECT SUM(CANTIDAD) as total_cantidad, SUM(VALOR * CANTIDAD) as total_valor FROM inventario");
$totales = $sql->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total del Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0cd06a153a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <br>
    <h3 class="text-center text-white">Total del Inventario</h3>
    <br>
    <br>
    <br>
    <br>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Total de productos</th>
                <th>Total de valores</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $totales->total_cantidad ?></td>
                <td><?= $totales->total_valor ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>

    <a href="../inventario.php" class="btn">Volver al Inventario</a>
</div>
<br>
<br>
<br>
<br>

<footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://maps.app.goo.gl/CbaiXVeMxoDkHDDh6"><i class="fa-solid fa-location-dot"></i>
            <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-google-plus"></i></a>
            <a href="https://wa.me/3203521180"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <span class="designer">Tecnologic world</span></p>
        </div>
</div>
    </footer>
</body>
</html>