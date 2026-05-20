<?php
include "modelo/conexion.php";
$ID= $_GET["ID"];

$sql=$conexion->query("SELECT * FROM proveedores WHERE ID=$ID")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/0cd06a153a.js" crossorigin="anonymous"></script>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
<h3 class="text-center text-white">MODIFICAR</h3>
<input type="hidden" name="ID" value="<?= $_GET['ID']?>">
<?php
include "controlador/modificaru.php";

while ($datos=$sql->fetch_object()) {?>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Nombre del proveedor</label>
    <input type="text" class="form-control" name="PROVEEDOR" value="<?=$datos->PROVEEDOR?>"> 
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Nombre de la empresa</label>
    <input type="text" class="form-control" name="EMPRESA"value="<?=$datos->EMPRESA?>">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Nit</label>
    <input type="text" class="form-control" name="NIT"value="<?=$datos->NIT?>">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Email</label>
    <input type="text" class="form-control" name="EMAIL"value="<?=$datos->EMAIL?>">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Teléfono</label>
    <input type="text" class="form-control" name="TELEFONO"value="<?=$datos->TELEFONO?>">
    
  </div>
<?php }
?>

  
  <button type="submit" class="btn" name="btnregistrar" value="ok">MODIFICAR</button>
  
</form>
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
    </footer>
    <script src="script.js"></script>
</body>
</html>