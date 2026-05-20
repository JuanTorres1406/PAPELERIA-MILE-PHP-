<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="registro.css" />
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
                        class="list_icon"
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
                        <a href="Index.php" class="link">INCIO</a>
                    </li>
                    <li class="li_links">
                        <a href="Mision.php" class="link">MISIÓN Y VSIÓN</a>
                    </li>

                    

                    <li class="li_links">
                        <a href="Modulos.php" class="link">MODULOS</a>
                    </li>

                    <li class="li_links">
                        <a href="registro.php" class="link">REGISTRATE</a>
                    </li>
                </ul>
            </nav>
        </header>

<br>

        <body>
            <center><div class="register-container">
                <h2>Registro</h2>
                <form action="/register" method="post">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="resg" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" class="resg" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="resg" name="password" required>
                    </div>
                    <a href="index.php">
                    <button type="submit">Registrarse</button>
</a>
                </form>
            </div></center>


<br>










        <footer>
            <div class="footerContainer">
                <div class="socialIcons">
                    <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-solid fa-location-dot"></i>
                    <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="https://www.instagram.com/papeleriamile11/"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <div class="footerBottom">
                    <p>Copyright &copy;2023; Designed by <span class="designer">Tecnlogic world</span></p>
                </div>
            </footer>
        
        
        </body>
        
        
        </html>