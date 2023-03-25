<?php
require ("./includes/mail.php");

function validate($nombre, $apellido, $email, $comentario, $form){
    return  !empty($nombre) && !empty($apellido) && !empty($email) && !empty($comentario);

}

$status = "";

if(isset($_POST["form"])){
    if(validate(...$_POST)){

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $nombre_completo = $nombre . " " . $apellido;
        $email = $_POST["email"];
        $comentario = $_POST["comentario"];

        $mensaje = "$nombre_completo <$email> te envia el siguente mensaje: <br><br> $comentario";

        //enviar email
        sendMail($mensaje, $email, $nombre_completo);
    
        $status = "success";

    }
    
    else{
        $status = "danger";
        
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilos CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Colegio NewHarvest</title>
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
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="intranet.php" class="intranet">Intranet</a></li>
                    <a href="#" class="movil-menu material-symbols-outlined">menu</a>
                </ul>
            </nav>
        </header>
        <div class="column-menu inactive">
            <ul>
                <li>
                    <a href="#tecnologia">Inicio</a>
                </li>
                <li>
                    <a href="#contacto">Contacto</a>
                </li>
                <li>
                    <a href="intranet.php">Intranet</a>
                </li>
            </ul>
        </div>
        <div class="landing">
            <div class="contenido-perfil">
                <div class="descripcion-usuario">
                    <h1>¿Quienes Somos?</h1>
                    <p> El colegio Newharvest de la localidad de Labranza perteneciente a la comuna de
                        Temuco, ofrece educación gratuita para todos sus estudiantes, no seleccionándolos por
                        nivel socioeconómico ni rendimiento escolar
                    </p>
                    <br>
                    <p>
                        Nuestro enfoque principal es la preocupación por que todos nuestros
                        alumnos terminen la enseñanza a través de acciones del Plan de Mejoramiento
                        educativo.
                    </p>
                    <div class="galeria">
                        <img src="img/slider/1.jpg" class="inact">
                        <img src="img/slider/1.jpg">
                        <img src="img/slider/2.jpg">
                        <img src="img/slider/3.jpg">
                        <img src="img/slider/4.jpg">
                    </div>
                </div>
            </div>
        </div>
        <section class="objetivos">
            <h2>Objetivos de la institución</h2>
            <div class="contenido-objetivos">
                <div>
                <h3>Misión</h3>
                <p>
                    Ser un Centro Educativo reconocido como una institución educativa inclusiva y
                    altamente comprometida con la formación valórica de sus alumnas y alumnos, que
                    contribuya al mejoramiento continuo de los resultados de aprendizajes, orientada al
                    desarrollo de las competencias tecnológicas y el manejo instrumental del idioma
                    Inglés, desarrollando una alta motivación académica en estudiantes y profesores con
                    el apoyo y compromiso de los padres y apoderados.
                </p>
                <h3>Visión</h3>
                <p>
                    Educar y formar estudiantes capaces de lograr aprendizajes de calidad,
                    permitiéndoles insertarse competitivamente en la enseñanza media, destacándose por
                    una sólida formación basada en los valores, tales como, respeto, cooperación,
                    responsabilidad, por su desempeño en el uso de las tecnologías y el manejo
                    instrumental del idioma Inglés, para brindar una efectiva inclusión de los
                    diferentes ritmos de aprendizajes de los estudiantes, con el compromiso y
                    participación de todos y cada uno de los actores educativos.
                </p>
            </div>
        </section>
        <section class="objetivos performance">
            <h2>Desempeño Escolar</h2>
            <div class="categorias">
                <div class="box-resultado">
                    <p>Asistencia</p>
                    <div><p>95%</p></div>
                    <p>2018 - 2022</p>
                </div>
                <div class="box-resultado-1">
                    <p>Autoestima académica</p>
                    <div><p>100%</p></div>
                    <p>2018 - 2022</p>
                </div>
                <div class="box-resultado-2">
                    <p>Conflictos</p>
                    <div><p>5%</p></div>
                    <p>2018 - 2022</p>
                </div>
                <div class="box-resultado">
                    <p>Asistencia</p>
                    <div><p>95%</p></div>
                    <p>2018 - 2022</p>
                </div>
                
            </div>
        </section>
        <section class="objetivos">
            <h2>Noticias</h2>
            <div class="blog">
                        <img src="./img/noticias/2.png">
                        <img src="./img/noticias/1.png">
                        <img src="./img/noticias/3.png">
                        <img src="./img/noticias/4.png">
                    </div>
        </section>
        <section class="objetivos contacto" id="contacto">
            <h2>Contacto</h2>
            <div class="contenido">
                <div class="formulario-contacto">
                    <form action="./" method="post">
                        <h3>Formulario de contacto</h3>
                        <input type="text" name="nombre" placeholder="Ingrese su nombre" required>  
                        <br>
                        <input type="text" name="apellido" placeholder="Ingrese su apellido" required>
                        <br>
                        <input type="email" name="email" placeholder="Ingrese su correo electrónico" required>
                        <br>
                        <textarea name="comentario" required placeholder="¿En qué te podemos ayudar?" name="" id="" cols="20" rows="5" ></textarea>
                        <br>
                        <input name="form" type="submit" value="Contactar">
                    </form>

                    <?php if($status == "danger"): ?>
    
                    <div class="alerta danger">
                        <span>Surgió un problema</span>
                    </div>
                    
                    <?php endif; ?>
                    

                    <?php if($status == "success"): ?>
                    
                    <div class="alerta success">
                        <span>¡Mensaje enviado con éxito!</span>
                    </div>
                    
                    <?php endif; ?>
                </div>
                <div class="ubicacion">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1344.0781799576444!2d-72.76025994735086!3d-38.767142601171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96152bd48e8a2217%3A0x5516193ca6363c19!2sColegio%20NewHarvest!5e0!3m2!1ses!2scl!4v1677885742977!5m2!1ses!2scl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
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