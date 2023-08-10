<?php 

namespace App\Models;

class Peticiones {

    private static $url = 'apirestalumnos.local/alumnos';

    public function __construct($url) {
        $this->url = $url;
    }

    public static function listarTodos() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public static function listarId($id) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$url . '/' . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public static function alta($dni, $nombre, $apellidos, $telefono ) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        $data = array(
            'dni' => $dni,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'telefono' => $telefono,
        );
        $data = json_encode($data);//IMPORTANTE PARA QUE FUNCIONE

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    
    public static function modificar($id, $dni, $nombre, $apellidos, $telefono) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$url . '/' .$id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');

        $data = array(
            'dni' => $dni,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'telefono' => $telefono
        );
        $data = json_encode($data);//IMPORTANTE PARA QUE FUNCIONE

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
    public static function modificarImagen($id, $imagen) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$url . '/' .$id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

        $data = array(
            'imagen' => $imagen,
        );
        $data = json_encode($data);//IMPORTANTE PARA QUE FUNCIONE

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
    public static function borrar($id) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$url . '/' . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

}



?>