<?php 
namespace App\Controllers;

use App\Models\Peticiones;
require_once('../alumnosMVC/vendor/autoload.php');

if(isset($_POST['inputId'])) {

    $idEnviada = $_POST['inputId'];
}

$respuesta = Peticiones::listarId($idEnviada);

$respuesta = json_decode($respuesta, true);

?>