<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>INICIO</title>
    </head>
    <body>
        
        <header class="header">
            <nav class="navbar">
                <a link href="Index.html"><img id="logo" src="img/b.jpeg"></a>
                
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
                        <a href="Index.php" class="link">INICIO</a>
                    </li>
                    <li class="li_links">
                        <a href="Mision.php" class="link">MISIÓN Y VSIÓN</a>
                    </li>

                    

                    <li class="li_links">
                        <a href="Modulos.php" class="link">MODULOS</a>
                    </li>

                    <li class="li_links">
                        <a href="contac.php" class="link">REGISTRATE</a>
                    </li>
                </ul>
            </nav>
        </header>

<div id="container">
<h1 id="titulo">PAPELERIA MILE</h1>
<h2 id="ache">"En nuestra papelería, cada objeto que compres sera parte de tu historia".</h2>

<br>
<br>
</div>

<div class="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carru"  src="img/1.PNG" >
        </div>
        <div class="carousel-item">
            <img class="carru"  src="img/2.PNG">
        </div>
        <div class="carousel-item">
            <img class="carru"  src="img/3.PNG" >
        </div>
        <div class="carousel-item">
            <img class="carru"  src="img/4.PNG" >
        </div>
    </div>
    <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
    <a class="next" onclick="moveSlide(1)">&#10095;</a>
</div>

<script src="carrusel.js"></script>
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
            <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <span class="designer">Tecnlogic world</span></p>
        </div>
    </footer>


</body>


</html>