<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilos CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Intranet Colegio NewHarvest</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <figure>
                <img src="img/logo.png" alt="Logotipo" width="60"> 
                <h2>NewHarvest Labranza</h2>
            </figure>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="intranet.php" class="intranet">Intranet</a></li>
                    <a href="#" class="movil-menu material-symbols-outlined">menu</a>
                </ul>
            </nav>
        </header>
        <div class="column-menu inactive">
        <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="#certificacion">Contacto</a>
                </li>
                <li>
                    <a href="intranet.php">Intranet</a>
                </li>
            </ul>
        </div>
        
        <div class="formulario-container">
            <div class="formulario">
                <h2>Iniciar Sesion</h2>
                <figure>
                    <img src="img/user.png" alt="user" width="150px">
                </figure>
                <form action="#" autocomplete="off" method="POST">
                    <label for="correo">Correo Electronico:</label>
                    <br>
                    <input type="email" name="email" id=""> 
                    <br>
                    <label for="pass">Contraseña:</label>
                    <br>
                    <input type="password" name="pass" id="">
                    <br>
                    <input type="submit" value="Iniciar Sesion">
                </form>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
        <footer>
            <div class="texto">
                <h3>Colegio NewHarvest Labranza</h3>
                <p>- 2023 Todos los derechos reservados © -</p>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="./js/main.js"></script>
</body>
</html>