<?php
//Esta linea nos permite indicar que retorna, 400 para indicar que el servidor no puede o no procesa la peticion por error del cliente. / 500 es un error del servidor o / 200 que todo está OK. 
header("HTTP/1.1 200");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //código del metodo REST
}

?>