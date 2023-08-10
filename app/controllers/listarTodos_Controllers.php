<?php 

namespace App\Controllers;

use App\Models\Peticiones;
require_once('../alumnosMVC/vendor/autoload.php');

$respuesta = Peticiones::listarTodos();

$respuesta = json_decode($respuesta, true);

?>

