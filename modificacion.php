<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <title>Cliente API/REST Alumnos</title>
</head>

<body>


    <header><h3>Cliente API/REST Alumnos</h3></header>
    <div id="divNav">
        <nav>
            <ul>
                <li><a href="http://localhost/alumnosMVC/index.php">Index</a></li>
                <li><a href="http://localhost/alumnosMVC/busquedaAvanzada.php">Búsqueda Avanzada</li>
                <li><a href="http://localhost/alumnosMVC/modificacion.php">Modificación</a></li>
            </ul>
        </nav>

    </div>
    <main>
        <section id="sectionModificar">
            <article id="formularioModificar">
                <?php

                $idEnviada = $_COOKIE['idGuardado'];

                require_once('./app/controllers/listarId_Controllers.php');
                require_once('./app/views/ListarId_Views.php');
                
                
                include ('./app/views/form_Modificar_Views.php');
                if (isset($_POST['modificar'])) {
                    require_once('./app/controllers/modificar_Controllers.php');
                    
                    echo "Modificación realizada";
                    // require_once('./app/controllers/listarId_Controllers.php');
                    // require_once('./app/views/ListarId_Views.php');
                }
                
                ?>

                </article>

            
            </section>
        
        <section id="sectionBorrar">
            
            <?php 
            include ('./app/views/form_Borrar_Views.php');

            if (isset($_POST['borrar'])) {
                require_once("./app/controllers/borrar_Controllers.php");
                echo "Alumno borrado";
            }

            

            ?>

        </section>

        <section id="sectionImagen">
            <?php 
            include ('./app/views/form_Imagen_Views.php');

            if (isset($_POST['guardarImagen'])) {
                require_once ('./app/controllers/imagen_Controllers.php');
            }
            
            ?>

        </section>

      

    </main>


    
    <footer>
        <img id="logo" src="./public/img/Logo_JLC.svg" alt="">
    </footer>
</body>

</html>


