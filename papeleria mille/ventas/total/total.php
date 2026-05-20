<?php
include '../modelo/conexion.php'; // Asegúrate de tener la conexión a la base de datos

// Consulta SQL para obtener el total de todas las ventas (sin filtrar por fecha)
$sql_total = $conexion->query("SELECT SUM(VALOR * CANTIDAD) as total_ventas FROM ventas");

$total = $sql_total->fetch_object()->total_ventas;

// Si no hay ventas, aseguramos que el valor sea 0
if ($total == null) {
    $total = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total de Ventas Registradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0cd06a153a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    
    
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center text-white">VENTAS DEL DIA</h3>
        <br>
        <br>
        <br>
        <br>
        <div class="alert alert-info text-center">
            <h4>Total ventas: $<?= number_format($total, 2) ?></h4>
        </div>
        <div class="text-center mt-4">
            <a href="../ventas.php" class="btn">Volver a Ventas</a>
        </div>
    </div>

    <br>
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
