<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <script src="https://kit.fontawesome.com/0cd06a153a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Ventas</title>
    
</head>
<script>
function eliminar(){
  var respuesta=confirm("¿Estas seguro que deseas eliminar?");
  return respuesta 
}
  </script>
<body>
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
                        <a href="../proveedores/proveedores.php" class="link text-decoration-none">PROVEEDORES</a>
</li>

                        <li class="li_links">
                        <a href="../inventario/inventario.php" class="link text-decoration-none">INVENTARIO</a>
                    </li>
                    <li class="li_links">
                        <a href="../clientes/clientes.php" class="link text-decoration-none">CLIENTES</a>
                    </li>
                    <li class="li_links">
                        <a href="ventas.php" class="link text-decoration-none">VENTAS</a>
                    </li>
                    
                </ul>
            </nav>
        </header>
 

 <?php
 include "modelo/conexion.php";
   include "controlador/eliminar.php";
  ?> 

  <div class="container-fluid row">

  <form class="col-4 p-3" method="POST">
<h3 class="text-center text-white">VENTAS</h3>
<?php

include "controlador/registro.php";

?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Nombre del producto</label>
    <input type="text" class="form-control" name="PRODUCTO">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Cantidad del producto</label>
    <input type="text" class="form-control" name="CANTIDAD">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Valor del producto</label>
    <input type="text" class="form-control" name="VALOR">
    
  </div>

  
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Descripción</label>
    <input type="text" class="form-control" name="DESCRIPCION">
    
  </div>
  

  <button type="submit" class="btn" name="btnregistrar" value="ok">Registrar</button>
  
  <a href="total/total.php" class="btn">Total</a>
  
  
</form>
<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">VALOR</th>
      <th scope="col">VALOR TOTAL</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql = $conexion->query("SELECT * FROM ventas");
    while ($datos = $sql->fetch_object()) { ?>
    <tr>
        <td><?= $datos->ID?></td>
        <td><?= $datos->PRODUCTO?></td>
        <td><?= $datos->CANTIDAD?></td>
        <td><?= $datos->VALOR?></td>
        <td><?= $datos->VALORT?></td>
        <td><?= $datos->DESCRIPCION?></td>
        <td>
            <a href="modificar.php?ID=<?= $datos->ID ?>" id="bg"><i class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return eliminar()"  href="ventas.php?ID=<?= $datos->ID ?>" id="be"><i class="fa-solid fa-trash"></i></a>
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
            <a href="https://wa.me/3203521180"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <span class="designer">Tecnologic world</span></p>
        </div>
    </footer>
    
</body>
</html>