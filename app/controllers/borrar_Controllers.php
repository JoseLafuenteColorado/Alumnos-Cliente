<?php

namespace App\Controllers;

use App\Models\Peticiones;
require_once('../alumnosMVC/vendor/autoload.php');


$respuesta = Peticiones::borrar($idEnviada);

$respuesta = json_decode($respuesta, true);

setcookie('pws', );

?>
