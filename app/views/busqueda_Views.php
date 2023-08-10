<form action="" method="post">

    <?php 

    require_once('./app/controllers/busqueda_Controllers.php');

    if ($respuestaEnviada == null){

            echo '<h3>No se han encontrado resultados</h3>';
            return;
            

        } else {

            echo '<h3>Resultados de la búsqueda</h3>';
            echo '<table>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>DNI</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellidos</th>';
            echo '<th>Telefono</th>';
            echo '</tr>';
            
            foreach ($respuestaEnviada as $key => $value) {
                echo '<tr>';
                echo '<td>' . "<button class=botonId name='boton' value=" . $value['id']. ">" . $value['id']. "</button>" . '</td>';
                echo '<td>' . $value['dni'] . '</td>';
                echo '<td>' . $value['nombre'] . '</td>';
                echo '<td>' . $value['apellidos'] . '</td>';
                echo '<td>' . $value['telefono'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        
    ?>

</form>