<?php

	$ambiente = 1;
   if ($TipoDTE==39 || $TipoDTE==41) {
      $ambiente=2;
   } elseif ($TipoDTE == "LVC") {
      $ambiente=3;
   }elseif ($TipoDTE == "RVD") {
      $ambiente=3;
   }
   




	$certificado = new CURLFile("mi_certificado_firma.pfx");


   $caf = new CURLFile("sobreEnvio".$TipoDTE."-".$Folio."-".$Rutcert.".xml");

	$curl = curl_init();

	curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.simpleapi.cl/api/v1/envio/enviar',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('input' => '{
   "Certificado": {
      "Password": "'.$Clavecert.'",
      "Rut": "'.$Rutcert.'"
   },
   "Ambiente": 0,
   "Tipo": '.$ambiente.'
}
','files'=> $certificado, $caf)));

$headers = array();
$headers[] = 'Authorization: Basic YXBpOjIxMTctVzcwMC02MzgyLTcxNzUtOTkwNg==';
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);

curl_close($curl);

$decoded_json = json_decode($response, false);

$trackId = $decoded_json->trackId;
$Estado = $decoded_json->estado;
$Errores = $decoded_json->errores;
$responseXml = $decoded_json->responseXml;


// echo "<br>";
// echo "<h3>Estado del documento enviado</h3>";
// echo "<br>";
// echo $trackId;
// echo "<br>";
// echo $Estado;
// echo "<br>";
// echo $Errores;
// echo "<br>";
// echo $responseXml;
// echo "<br>";



if ($Estado==0) {
   include('impresionPdf.php');
   
} else {
   echo ("El envio no fue generado exitosamente");
   echo "<br>";
   echo ("Problemas en el servidor");
   echo "<br>";
}


// echo "<br>";
// echo "<h3>Respuesta del envio</h3>";
// echo "<br>";
// echo $response;
// echo "<br>";




// echo "<h3>Respuesta Consulta de envio</h3>";


// include('Consultar.php');

?>