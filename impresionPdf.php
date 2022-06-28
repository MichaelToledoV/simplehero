<?php

$caf = new CURLFile("envioboletas.xml");

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.simpleapi.cl/api/v1/impresion/pdf/58mm',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('input' => '{
    "NumeroResolucion": 0,
    "UnidadSII": "RANCAGUA SII",
    "FechaResolucion": "2022-06-03",
    "Ejecutivo": "Gonzalo Bustamante",
    "Hora":"13:20"
}','fileEnvio'=> $caf)));

$headers = array();
$headers[] = 'Authorization: Basic '.$apikey;
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);
$err_status = curl_error($curl);

curl_close($curl);

// echo "<br>";
// echo "<h3>PDF para la impresion</h3>";
// echo "<br>";

$pdf58mm = base64_encode($response);
include('impresionCarta.php');
?>
