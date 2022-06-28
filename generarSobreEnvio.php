<?php

	$certificado = new CURLFile("mi_certificado_firma.pfx");

   $caf = new CURLFile("DTE_T".$TipoDTE."F".$Folio.".xml");

	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.simpleapi.cl/api/v1/envio/generar',
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
   "Caratula": {
      "RutEmisor": "'.$RutE.'",
      "RutReceptor": "'.$RutR.'",
      "FechaResolucion": "2022-06-03",
      "NumeroResolucion": 0
   }
}
','files'=> $certificado, $caf)));

$headers = array();
$headers[] = 'Authorization: Basic '.$apikey;
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);

curl_close($curl);

$sobreEnvio = $response;

   $doc = new DOMDocument();
   $doc->loadXML($sobreEnvio);
   $doc->save("sobreEnvio".$TipoDTE."-".$Folio."-".$Rutcert.".xml");

// echo "<br>";
// echo "<h3>Sobre de envio</h3>";
// echo "<br>";
// echo htmlentities($sobreEnvio);
// echo "<br>";

include("enviarAlSii.php");
// echo "____________________________________________";
// echo "_______________Xml envio boleta_________________";
// echo "____________________________________________";
// echo "<pre>";
// echo $response;
// echo "</pre>";





?>
