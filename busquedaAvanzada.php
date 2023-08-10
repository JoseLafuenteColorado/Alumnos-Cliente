<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <title>Cliente API/REST Artículos</title>
</head>

<body>


    <header><h2>Cliente API/REST Artículos</h2></header>
    <div id="divNav">
        <nav>
            <ul>
                <li><a href="http://localhost/articulosMVC/index.php">Index</a></li>
                <li><a href="http://localhost/articulosMVC/busquedaAvanzada.php">Búsqueda Avanzada</li>
                <li><a href="">Modificación</a></li>
            </ul>
        </nav>

    </div>
    <main>
        <section id="sectionBusqueda">
            <article id="formularioBusqueda">
                <?php
                include_once('./app/views/form_Busqueda_Views.php');

                if(isset($_POST['busqueda'])) {

                    require_once('./app/controllers/busqueda_Controllers.php');

    
                    include_once('./app/views/busqueda_Views.php');
                }

                if(isset($_POST['boton'])) {

                    
                    setcookie('idGuardado', $_POST['boton']) ;
                    header('Location: http://localhost/articulosMVC/modificacion.php');
                    
                    
                }

               
                
                

                ?>

            </article>


        
      

    </main>


    
    <footer>
        <img id="logo" src="./public/img/Logo_JLC.svg" alt="">
    </footer>
</body>

</html>


