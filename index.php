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


    <header><h2>Cliente API/REST Alumnos</h2></header>
    <div id="divNav">
        <nav>
            <ul>
                <li><a href="http://localhost/alumnosMVC/index.php">Index</a></li>
                <li><a href="http://localhost/alumnosMVC/busquedaAvanzada.php">Búsqueda Avanzada</li>
                <li><a href="#">Modificación</a></li>
            </ul>
        </nav>

    </div>
    <main>
        <section id="sectionListar">
            <article id="formularioListar">
                <?php

                include ('./app/views/form_ListarTodos_View.php');
                if (isset($_POST['listarTodos'])) {
                    require_once('./app/controllers/listarTodos_Controllers.php');

                    echo "</article>";
                    echo "<article id='ViewListar'>";
    
                    include_once('./app/views/ListarTodos_Views.php');
                }
                
                
                if(isset($_POST['boton'])) {

                    
                    setcookie('idGuardado', $_POST['boton']) ;
                    header('Location: http://localhost/alumnosMVC/modificacion.php');
                    
                    
                }


                ?>

</article>

<article id="formularioListarId">
    <?php 
                include('./app/views/form_ListarId_Views.php');
                
                if (isset($_POST['listarId'])) {
                    require_once('./app/controllers/listarId_Controllers.php');
                
                    echo "</article>";
                    echo "<article id='ViewListar'>";
                
                    include_once('./app/views/ListarId_Views.php');
                }
                ?>
            </article>
            </section>
        
        <section id="sectionAlta">
            <?php 
            include ('./app/views/form_Alta_Views.php');

            if (isset($_POST['alta'])) {
                require_once("./app/controllers/alta_Controllers.php");
                echo $respuesta;
            }


            ?>

        </section>

      

    </main>


    
    <footer>
        <img id="logo" src="./public/img/Logo_JLC.svg" alt="">
    </footer>
</body>

</html>


