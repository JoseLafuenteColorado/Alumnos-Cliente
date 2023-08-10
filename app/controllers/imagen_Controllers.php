<?php

namespace App\Controllers;
use App\Models\Peticiones;
require_once('../alumnosMVC/vendor/autoload.php');

define("DIRUPLOAD", 'public/img/alumnos/');
define("MAXSIZE", 200000);

$allowedExts = array("gif", "jpeg", "jpg", "png", "webp");
$allowedFormat = array("image/gif", "image/jpeg", "image/jpg", "image/jpeg", "image/x-png", "image/png", "image/webp");

//Obtenemos la extensión, podriamos hacerlo tambien con pathinfo() más adelante.
$temp = explode(".", $_FILES["imagen"]["name"]);
$extension = end($temp);


if (($_FILES["imagen"]["size"] < MAXSIZE) &&
    in_array($_FILES["imagen"]["type"], $allowedFormat) &&
    in_array($extension, $allowedExts)
) {
    if ($_FILES["imagen"]["error"] > 0) {
        echo "Return Code: " . $_FILES["imagen"]["error"] . "<br/>";
    } else {
        $filename = $_FILES["imagen"]["name"];
        /* Conviene renombrar la imagen bien con el id de una base de datos o con un
            identificador único
        */
        // $filename = time() . $filename;
        $filename = $idEnviada . '.' . pathinfo($filename, PATHINFO_EXTENSION);
        echo "Upload: " . $_FILES["imagen"]["name"] . "<br/>";
        echo "Type: " . $_FILES["imagen"]["type"] . "<br/>";
        echo "Size: " . ($_FILES["imagen"]["size"] / 1024) . "kB <br/>";
        echo "Temp file: " . $_FILES["imagen"]["tmp_name"] . "<br/>";
        if (file_exists(DIRUPLOAD . $filename)) {
            echo $_FILES["imagen"]["name"] . " already exists. ";
        } else {
            move_uploaded_file($_FILES["imagen"]["tmp_name"], DIRUPLOAD . $filename);
            echo "Stored in: " . DIRUPLOAD . $filename;
        }
        echo "<br/>";
        //echo "<a href=\"" . $_SERVER['HTTP_REFERER'] . "\">Volver</a>"; // No se recomienda.
        echo '<a href="javascript:history.back()">Volver</a>'; // Mejor.
    }
} else {
    echo "Invalid file";
}

$ruta = DIRUPLOAD . $filename;
echo $ruta;

$respuesta = Peticiones::modificarImagen($idEnviada, $ruta);

$respuesta = json_decode($respuesta, true);


