<?php



if ($TipoDTE==39 || $TipoDTE==41) {
  $ServidorBoleta = "true";
} else {
  $ServidorBoleta = "false";
}

// $serve = strval($ServidorBoleta);


$certificado = new CURLFile("mi_certificado_firma.pfx");

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.simpleapi.cl/api/v1/consulta/envio',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('input' => '{
    "Certificado": 
    {
        "Password": "'.$Clavecert.'",
        "Rut": "'.$Rutcert.'"
    },
    "RutEmpresa": "'.$RutE.'",
    "TrackId": '.$trackId.',
    "Ambiente": 0,
    "ServidorBoletaREST": '.$ServidorBoleta.'
}','files'=> $certificado)));

$headers = array();
$headers[] = 'Authorization: Basic YXBpOjIxMTctVzcwMC02MzgyLTcxNzUtOTkwNg==';
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


$response = curl_exec($curl);
curl_close($curl);




$decoded_json = json_decode($response, false);


if ($TipoDTE==39 || $TipoDTE==41) {
  echo "<br>";
  echo $estado = $decoded_json->estado;
} else {
  echo "<br>";
  echo $estado = $decoded_json->estado;
  echo "<br>";
  echo $glosa = $decoded_json->glosa;
  echo "<br>";
  echo $ok = $decoded_json->ok;
  echo "<br>";
}


// $responseXml = $decoded_json->responseXml;
// echo "<br>";
// echo $estado = $decoded_json->estado;
// echo "<br>";
// echo $glosa = $decoded_json->glosa;
// echo "<br>";
// echo $ok = $decoded_json->ok;
// echo "<br>";

// echo $decoded_json;