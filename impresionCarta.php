<?php

$caf = new CURLFile("envioboletas.xml");
$logo = new CURLFile("logo.png");
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.simpleapi.cl/api/v1/impresion/pdf/carta',
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
    "Vendedor": "Gonzalo Bustamante"
}','fileEnvio'=> $caf)));

	$headers = array();
	$headers[] = 'Authorization: Basic '.$apikey;
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	$response = curl_exec($curl);
	$err_status = curl_error($curl);

	curl_close($curl);

	// echo "<br>";
	// echo "<h3>PDF para la impresion en Carta</h3>";
	// echo "<br>";

	$pdfCarta =  base64_encode($response);

	$array = array(
		"TrackId" => $trackId,
		"Estado" => $Estado,
		"errores" => $Errores,
		"pdf58mm " => $pdf58mm,
		"pdfCarta" => $pdfCarta,
		"xmlEnvioBoleta" => $xmlEnvioBoleta

	);

	echo json_encode($array);

?>
