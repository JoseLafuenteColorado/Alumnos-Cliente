<?php 
namespace App\Controllers;

use App\Models\Peticiones;
require_once('../alumnosMVC/vendor/autoload.php');

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];

$respuesta = Peticiones::alta($dni, $nombre, $apellidos, $telefono);

$respuesta = json_decode($respuesta, true);


?>