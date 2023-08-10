<?php 
namespace App\Controllers;

use App\Models\Peticiones;
require_once('../alumnosMVC/vendor/autoload.php');


$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];

if ($dni == null && $nombre == null && $apellidos == null && $telefono == null) {
    echo '<h3>Debe rellenar al menos un campo</h3>';
    $value = null;
    return;
} else {

    $respuesta = Peticiones::listarTodos();
    
    $respuesta = json_decode($respuesta, true);
    $respuestaEnviada = array();

    //búsqueda avanzada
    $valoresBusqueda = [$dni, $nombre, $apellidos, $telefono];

    foreach ($valoresBusqueda as $key => $valor) {

        if ($valor != null) {
            $indiceValorBuscado = $key;
            //echo $key;
        }
    }


    foreach ($respuesta as $key => $value) {

        switch ($indiceValorBuscado) {
            case 0:
                if(str_contains($value['dni'], $dni)) {
                    $respuestaEnviada[] = $value;
                }
                break;

            case 1:
                if(str_contains($value['nombre'], $nombre)) {
                    $respuestaEnviada[] = $value;
                }
                break;

            case 2:
                if(str_contains($value['apellidos'], $apellidos)) {
                    $respuestaEnviada[] = $value;
                }
                break;

            case 3:
                if(str_contains($value['telefono'], $telefono)) {
                    $respuestaEnviada[] = $value;
                }
                break;
            
            default:
                # code...
                break;
        }
    }
}

 
    




?>