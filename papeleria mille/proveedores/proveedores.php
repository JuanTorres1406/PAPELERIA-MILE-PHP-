<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/0cd06a153a.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="style.css">
    </head>
<header class="header">
            <nav class="navbar">
                <a link href="../Index.php"><img id="logo" src="img/b.jpeg"></a>
                
                <label class="labe_hamburguesa" for="menu_hamburguesa">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="35"
                        height="35"
                        fill="currentColor"
                       c
                        viewBox="0 0 16 16"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                        />
                    </svg>
                </label>

                <input class="menu_hamburguesa" type="checkbox" name="" id="menu_hamburguesa">

                <ul class="ul_links">
                    <li class="li_links">
                        <a href="../Modulos.php" class="link link text-decoration-none">SALIR</a>
                    </li>
                    <li class="li_links">
                        <a href="../usuario/insano.php" class="link  link text-decoration-none">USUARIO</a>
                    </li>

                    

                    <li class="li_links">
                        <a href="../Empleados/empleados.php" class="link text-decoration-none">EMPLEADOS</a>
                    </li>

                    <li class="li_links">
                        <a href="proveedores.php" class="link text-decoration-none">PROVEEDORES</a>
</li>

                        <li class="li_links">
                        <a href="../inventario/inventario.php" class="link text-decoration-none">INVENTARIO</a>
                    </li>
                    <li class="li_links">
                        <a href="../clientes/clientes.php" class="link text-decoration-none">CLIENTES</a>
                    </li>
                    <li class="li_links">
                        <a href="../ventas/ventas.php" class="link text-decoration-none">VENTAS</a>
                    </li>
                    
                </ul>
            </nav>
        </header>
<script>
function eliminar(){
  var respuesta=confirm("¿Estas seguro que deseas eliminar?");
  return respuesta 
}
  </script>
<body>
 

 <?php
 include "modelo/conexion.php";
   include "controlador/eliminar.php";
  ?> 

  <div class="container-fluid row">

  <form class="col-4 p-3" method="POST">
<h3 class="text-center text-white">PROVEEDORES</h3>
<?php

include "controlador/registro.php";

?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Nombre y apellido del proveedor</label>
    <input type="text" class="form-control" name="PROVEEDOR">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-labe text-white">Nombre de la empresa</label>
    <input type="text" class="form-control" name="EMPRESA">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Nit</label>
    <input type="text" class="form-control" name="NIT">
    
  </div>

  <div class="mb-3"> 
    <label for="exampleInputEmail1" class="form-label text-white">Email</label>
    <input type="text" class="form-control" name="EMAIL">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Teléfono</label>
    <input type="text" class="form-control" name="TELEFONO">
    
  </div>

  <button type="submit" class="btn" name="btnregistrar" value="ok">Registrar</button>
  
</form>
<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">N.PROVEEDOR</th>
      <th scope="col">N.EMPRESA</th>
      <th scope="col">NIT</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELÉFONO</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql = $conexion->query("SELECT * FROM proveedores");
    while ($datos = $sql->fetch_object()) { ?>
    <tr>
        <td><?= $datos->ID?></td>
        <td><?= $datos->PROVEEDOR?></td>
        <td><?= $datos->EMPRESA?></td>
        <td><?= $datos->NIT?></td>
        <td><?= $datos->EMAIL?></td>
        <td><?= $datos->TELEFONO?></td>
        <td>
            <a href="modificar.php?ID=<?= $datos->ID ?>" id="bg"><i class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return eliminar()"  href="proveedores.php?ID=<?= $datos->ID ?>" id="be"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>     
    <?php } ?>
</tbody>

</table>
</div>
  </div>  
  <footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://maps.app.goo.gl/CbaiXVeMxoDkHDDh6"><i class="fa-solid fa-location-dot"></i>
            <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-google-plus"></i></a>
            <a href="https://wa.me/3203521180"><i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <span class="designer">Tecnologic world</span></p>
        </div>
    </footer>
    <script src="script.js"> </script>
 
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>