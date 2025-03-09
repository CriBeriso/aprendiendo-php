<?php

declare(strict_types=1); //aqui especificamos que queremos una tipificación estricta. Solo se puede activar a nivel de archivo, no a nivel de proyecto

//Llamadas a las API. Se pueden hacer de muchas formas, pero la más basica es curl.

# Inicializar una nueva sesión de cURL; ch = cURL handle
// $ch = curl_init(API_URL);
// Indicar que queremos recibisr el resultado de la petición y no mostrarla en pantalla.
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición y guardamos el resultado.
*/
// $result = curl_exec($ch);

//una alternativa sería utilizar file_get_contents


function render_template(string $template, array $data = [])
{
  extract($data); //saca de data toda la info almacenada en variables
  require "templates/$template.php";
}
