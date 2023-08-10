<form action="" method="post">

    <?php

    require_once('./app/controllers/listarTodos_Controllers.php');
        
            echo '<table>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>DNI</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellidos</th>';
            echo '<th>Teléfono</th>';
            echo '<th>Foto</th>';
            echo '</tr>';
            
            foreach ($respuesta as $key => $value) {
                echo '<tr>';
                echo '<td>' . "<button class=botonId name='boton' value=" . $value['id']. ">" . $value['id']. "</button>"  . '</td>';
                echo '<td>' . $value['dni'] . '</td>';
                echo '<td>' . $value['nombre'] . '</td>';
                echo '<td>' . $value['apellidos'] . '</td>';
                echo '<td>' . $value['telefono'] . '</td>';
                echo '<td>' . $value['foto'] . '</td>';
                $idEnlace = $value['id'];             
                echo '</tr>';
            }
            echo '</table>';
        
    ?>

</form>
