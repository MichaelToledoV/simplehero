<?php


if(isset($_POST['TipoDTE'])){

   $canProd = $_POST["canProd"];

   $detalles = "";
   for ($i=0; $i < $canProd; $i++) { 

   $indicadorExento = $_POST['IndicadorExento'.$i];
   $Nombre = $_POST['Nombre'.$i];
   $descripcion = $_POST['Descripcion'.$i];
   $cantidad = $_POST['Cantidad'.$i];
   $UnidadMedida = $_POST['UnidadMedida'.$i];
   $precio = $_POST['Precio'.$i];
   $descuento = $_POST['Descuento'.$i];
   $recargo = $_POST['Recargo'.$i];
   $montoItem = $_POST['MontoItem'.$i];


      $detalles .= '{
            "IndicadorExento": '.$indicadorExento.',
            "Nombre": "'.$Nombre.'",
            "Descripcion": "'.$descripcion.'",
            "Cantidad": '.$cantidad.',
            "UnidadMedida": "'.$UnidadMedida.'",
            "Precio": '.$precio.',
            "Descuento": '.$descuento.',
            "Recargo": '.$recargo.',
            "MontoItem": '.$montoItem.'
         },';
   };

   $detalleInicio = '"Detalles": [';
   $detalleFinal = '],';

   $detalleArmado = $detalleInicio.$detalles.$detalleFinal;


   $TipoDTE = $_POST['TipoDTE'];
   $Folio = $_POST['Folio'];
   $FechaEmision = $_POST['FechaEmision'];

   if(!isset($_POST['FechaVencimiento'])){
      $FechaVencimiento = "";
   }else $FechaVencimiento = $_POST['FechaVencimiento'];


   if(!isset($_POST['IndicadorServicio'])){
      $IndicadorServicio = "";
   }else $IndicadorServicio = $_POST['IndicadorServicio'];

   if(!isset($_POST['TipoTraslado'])){
      $TipoTraslado = "";
   }else $TipoTraslado = $_POST['TipoTraslado'];

   $RutE = $_POST['RutE'];
   $RazonSocialE = $_POST['RazonSocialE'];
   $GiroBoletaE = $_POST['GiroBoletaE'];
   $ActividadEconomica = $_POST['ActividadEconomica'];
   $DireccionOrigen = $_POST['DireccionOrigen'];
   $ComunaOrigenE = $_POST['ComunaOrigenE'];
   if(!isset($_POST['Telefono'])){
      $Telefono = "";
   }else $Telefono = $_POST['Telefono'];
   if(!isset($_POST['CorreoElectronico'])){
      $CorreoElectronico = "";
   }else $CorreoElectronico = $_POST['CorreoElectronico'];
   
   $RutR = $_POST['RutR'];
   $RazonSocialR = $_POST['RazonSocialR'];
   $DireccionR = $_POST['DireccionR'];
   $ComunaOrigenR = $_POST['ComunaOrigenR'];
   $Ciudad = $_POST['Ciudad'];
   $GiroR = $_POST['GiroR'];

   if (!isset($_POST['Contacto'])) {
      $Contacto = "";
   }else $Contacto = $_POST['Contacto'];
   
   if(!isset($_POST['RutSolicitante'])){
      $RutSolicitante = "";
   }else $RutSolicitante = $_POST['RutSolicitante'];
   
   if(!isset($_POST['ComunaDestino'])){
      $Patente = "";
      $RutTransportista = "";
      $DireccionDestino = "";
      $ComunaDestino = "";
      $CiudadDestino = "";
      $RutChofer = "";
      $NombreChofer = "";
   }else{
      $Patente = $_POST['Patente'];
      $RutTransportista = $_POST['RutTransportista'];
      $DireccionDestino = $_POST['DireccionDestino'];
      $ComunaDestino = $_POST['ComunaDestino'];
      $CiudadDestino = $_POST['CiudadDestino'];
      $RutChofer = $_POST['RutChofer'];
      $NombreChofer = $_POST['NombreChofer'];
   }
   
   $MontoTotal = $_POST['MontoTotal'];
   $MontoNeto = $_POST['MontoNeto'];
   $IVA = $_POST['IVA'];

   if(!isset($_POST['MontoExento'])){
      $MontoExento = "";
   }else $MontoExento = $_POST['MontoExento'];

   $TasaIVA = $_POST['TasaIVA'];
   

if (!isset($_POST['FolioReferencia'])) {
   $FechaDocumentoReferencia = "";
   $TipoDocumento = "";
   $CodigoReferencia = "";
   $RazonReferencia = "";
   $FolioReferencia = "";
}else{
   $FechaDocumentoReferencia = $_POST['FechaDocumentoReferencia'];
   $TipoDocumento = $_POST['TipoDocumento'];
   $CodigoReferencia = $_POST['CodigoReferencia'];
   $RazonReferencia = $_POST['RazonReferencia'];
   $FolioReferencia = $_POST['FolioReferencia'];
}
   
   if (!isset($_POST['Valor'])){
      $TipoMovimiento = "";
      $DescripcionRE = "";
      $TipoValor = "";
      $Valor = "";
   }else{
      $TipoMovimiento = $_POST['TipoMovimiento'];
      $DescripcionRE = $_POST['DescripcionRE'];
      $TipoValor = $_POST['TipoValor'];
      $Valor = $_POST['Valor'];
   }

   $Rutcert = $_POST['Rutcert'];
   $Clavecert = $_POST['Clavecert'];
}





$curl = curl_init();

$certificado = new CURLFile("mi_certificado_firma.pfx");
$caf = new CURLFile("18245727-2T".$TipoDTE.".xml");



if($FechaVencimiento != "" && $TipoDTE == 33){
   $FechaVencimientoArray ='"FechaVencimiento": "'.$FechaVencimiento.'"';
}else $FechaVencimientoArray = "";

if($TipoDTE == 39){
   $IndicadorServicioArray ='"IndicadorServicio": '.$IndicadorServicio;
}else $IndicadorServicioArray = "";

if($TipoDTE == 52){
   $TipoTrasladoArray ='"TipoTraslado": '.$TipoTraslado;
}else $TipoTrasladoArray = "";


$EmisorArray = '"Emisor": { "Rut": "'.$RutE.'","RazonSocial": "'.$RazonSocialE.'","Giro": "'.$GiroBoletaE.'","ActividadEconomica": ['.$ActividadEconomica.'],"DireccionOrigen": "'.$DireccionOrigen.'","ComunaOrigen": "'.$ComunaOrigenE.'","Telefono": ['.$Telefono.']},';




         
// Transporte

if ($NombreChofer == "") {
   $ChoferArray = '';
}else {
   $ChoferArray = '"Chofer": {"Rut": "'.$RutChofer.'","Nombre": "'.$NombreChofer.'"},';
}


if ($Patente == "") {
   $PatenteArray = '';
}else {
   $PatenteArray = '"Patente": "'.$Patente.'", "RutTransportista": "'.$RutTransportista.'",';
}


if ($DireccionDestino=="") {
   $TransporteArray = '"Transporte": null,';
} else {

   $TransporteArray = ''.$PatenteArray.''.$ChoferArray.'"DireccionDestino": "'.$DireccionDestino.'","ComunaDestino": "'.$ComunaDestino.'","CiudadDestino": "'.$CiudadDestino.'"},';
}


// Referencias         


if ($TipoDocumento=="") {
   $ReferenciasArray = '"Referencias": null,';
} else {

   $ReferenciasArray = '"Referencias": [{"FechaDocumentoReferencia": "'.$FechaDocumentoReferencia.'","TipoDocumento": '.$TipoDocumento.',"CodigoReferencia": '.$CodigoReferencia.',"RazonReferencia": "'.$RazonReferencia.'","FolioReferencia": '.$FolioReferencia.'}],';
}

//Descuentos y recargos

if ($TipoMovimiento=="") {
   $DescuentosArray = 'null';
} else {

   $DescuentosArray = '[{"TipoMovimiento":"'.$TipoMovimiento.'","Descripcion": "'.$DescripcionRE.'","TipoValor": "'.$TipoValor.'","Valor": '.$Valor.'}]';
}




$datosArray = '{
    "Documento": {
      "Encabezado": {
         "IdentificacionDTE": {
            "TipoDTE": '.$TipoDTE.',
            "Folio": '.$Folio.',
            "FechaEmision": "'.$FechaEmision.'",
            '.$FechaVencimientoArray.''.$IndicadorServicioArray.''.$TipoTrasladoArray.'
         },'.$EmisorArray.'

         "Receptor": {
            "Rut": "'.$RutR.'",
            "RazonSocial": "'.$RazonSocialR.'",
            "Direccion": "'.$DireccionR.'",
            "Comuna": "'.$ComunaOrigenR.'",
            "Ciudad": "'.$Ciudad.'",
            "Giro": "'.$GiroR.'",
            "Contacto": "'.$Contacto.'"
         },
         "RutSolicitante": "'.$RutSolicitante.'",
         '.$TransporteArray.'
         "Totales": {
            "MontoTotal": '.$MontoTotal.',
            "MontoNeto" : '.$MontoNeto.',
            "IVA": '.$IVA.',
            "MontoExento": '.$MontoExento.',
            "TasaIVA": '.$TasaIVA.'
         }
      },
      '.$detalleArmado.'
      '.$ReferenciasArray.'
   "DescuentosRecargos": '.$DescuentosArray.'
   },
   "Certificado": {
      "Rut": "'.$Rutcert.'",
      "Password": "'.$Clavecert.'"
   }
}';

curl_setopt($curl, CURLOPT_URL, 'https://api.simpleapi.cl/api/v1/dte/generar');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);

$post = array('input' => $datosArray ,'files'=> $certificado, $caf);

curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

$headers = array();
$headers[] = 'Authorization: Basic YXBpOjIxMTctVzcwMC02MzgyLTcxNzUtOTkwNg==';
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// $result = curl_exec($curl);
// if (curl_errno($curl)) {
//     echo 'Error:' . curl_error($curl);
// }


// ---------
$response = curl_exec($curl);
// ---------
$err_status = curl_error($curl);

// echo "TipoDTE: ".$TipoDTE  ."<br>";
// echo "Folio: ".   $Folio  ."<br>";
// echo "FechaEmision: ".   $FechaEmision  ."<br>";
// echo "FechaVencimiento: ".   $FechaVencimiento  ."<br>";
// echo "RutE: ".   $RutE ."<br>";
// echo "RazonSocialE: ".   $RazonSocialE ."<br>";
// echo "GiroBoletaE: ".   $GiroBoletaE ."<br>";
// echo "ActividadEconomica: ".   $ActividadEconomica ."<br>";
// echo "DireccionOrigen: ".   $DireccionOrigen  ."<br>";
// echo "ComunaOrigenE: ".   $ComunaOrigenE  ."<br>";
// echo "Telefono: ".   $Telefono ."<br>";
// echo "RutR: ".   $RutR  ."<br>";
// echo "RazonSocialR: ".   $RazonSocialR ."<br>";
// echo "DireccionR: ".   $DireccionR ."<br>";
// echo "ComunaOrigenR: ".   $ComunaOrigenR ."<br>";
// echo "Ciudad: ".   $Ciudad ."<br>";
// echo "GiroR: ".   $GiroR  ."<br>";
// echo "Contacto: ".   $Contacto ."<br>";
// echo "RutSolicitante: ".   $RutSolicitante  ."<br>";
// echo "Patente: ".   $Patente  ."<br>";
// echo "RutTransportista: ".   $RutTransportista  ."<br>";
// echo "DireccionDestino: ".   $DireccionDestino  ."<br>";
// echo "ComunaDestino: ".   $ComunaDestino ."<br>";
// echo "CiudadDestino: ".   $CiudadDestino ."<br>";
// echo "RutChofer: ".   $RutChofer ."<br>";
// echo "NombreChofer: ".   $NombreChofer ."<br>";
// echo "MontoTotal: ".   $MontoTotal ."<br>";
// echo "MontoNeto: ".   $MontoNeto  ."<br>";
// echo "IVA: ".   $IVA  ."<br>";
// echo "MontoExento: ".   $MontoExento  ."<br>";
// echo "TasaIVA: ".   $TasaIVA  ."<br>";
// echo "indicadorExento: ".   $indicadorExento ."<br>";
// echo "Nombre: ".   $Nombre  ."<br>";
// echo "descripcion: ".   $descripcion  ."<br>";
// echo "cantidad: ".   $cantidad  ."<br>";
// echo "UnidadMedida: ".   $UnidadMedida  ."<br>";
// echo "precio: ".   $precio  ."<br>";
// echo "descuento: ".   $descuento  ."<br>";
// echo "recargo: ".   $recargo  ."<br>";
// echo "montoItem: ".   $montoItem  ."<br>";
// echo "FechaDocumentoReferencia: ".   $FechaDocumentoReferencia ."<br>";
// echo "TipoDocumento: ".   $TipoDocumento ."<br>";
// echo "CodigoReferencia: ".   $CodigoReferencia ."<br>";
// echo "RazonReferencia: ".   $RazonReferencia ."<br>";
// echo "FolioReferencia: ".   $FolioReferencia ."<br>";
// echo "TipoMovimiento: ".   $TipoMovimiento ."<br>";
// echo "DescripcionRE: ".   $DescripcionRE ."<br>";
// echo "TipoValor: ".   $TipoValor ."<br>";
// echo "Valor: ".   $Valor ."<br>";
// echo "Rutcert: ".   $Rutcert ."<br>";
// echo "Clavecert: ".   $Clavecert ."<br>";


curl_close($curl);
// echo $err_status;
$xmlEnvioBoleta = $response;
// echo "<br>";
// echo "<h3>Documento en XML para pasar al sobre</h3>";
// echo "<br>";
// echo htmlentities($response);
// echo "<br>";
// ---------


   $doc = new DOMDocument();
   $doc->loadXML($xmlEnvioBoleta);
   // $doc->save("envioboletas.xml");
   $doc->save("DTE_T".$TipoDTE."F".$Folio.".xml");

   include("generarSobreEnvio.php");

// ---------



   // $timbre = new DOMDocument();
   // $timbre->loadXML($xmlEnvioBoleta);

   // $TED = $timbre->getElementsByTagName('TED')->item(0);

   // print_r($TED);

// echo "____________________________________________";
// echo "_______________Xml envio boleta_________________";
// echo "____________________________________________";
// echo "<pre>";
// echo $xmlEnvioBoleta;
// echo "</pre>";


// if (function_exists('curl_file_create')) {
//   $certificado = curl_file_create('certificados/mi_certificado_firma.cl.pfx');
//   $caf = curl_file_create('CAF/CAF-ejemplo.xml');
// } else {
//   $certificado = '@'.realpath('certificados/mi_certificado_firma.cl.pfx');
//   $caf = '@'.realpath('CAF/CAF-ejemplo.xml');
// }



// $ruta = getcwd();
// $certi = $ruta.'/certificados/mi_certificado_firma.pfx';
// $cafi = $ruta.'/CAF/CAF-ejemplo.xml';








// $certo = '/certificados/mi_certificado_firma.cl.pfx';
// $cafo = '/CAF/CAF-ejemplo.xml';

// echo $fileAttachment;

   

   // $certificado = $certificado["tmp_name"]."/".$certificado["name"];
   // $caf = $caf["tmp_name"]."/".$caf["name"];

// $caf = $_FILES['caf'];


// if(isset($certificado)){
//    echo "hay certificado";
// }else{
//    echo "no hay certificado";
// }

// if(isset($caf)){
//    echo "hay caf";
// }else{
//    echo "no hay caf";
// }

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.simpleapi.cl/api/v1/dte/generar',
//   CURLOPT_USERPWD => 'api:2626-R130-6382-9058-9489',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => 'utf-8',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => array('input' => '{
//    "Documento": {
//       "Encabezado": {
//          "IdentificacionDTE": {
//             "TipoDTE": 39,
//             "Folio": 2,
//             "FechaEmision": "2022-03-02",
//             "IndicadorServicio": 3
//          },
//          "Emisor": {
//             "Rut": "76269769-6",
//             "RazonSocialBoleta": "RAZÓN SOCIAL",
//             "GiroBoleta": "GIRO GLOSA DESCRIPTIVA",         
//                           "DireccionOrigen": "DIRECCION 787",
//             "ComunaOrigen": "COMUNA"
//          },
//          "Receptor": {
//             "Rut": "66666666-6",
//             "RazonSocial": "Razón Social de Cliente",
//             "Direccion": "Dirección de Cliente",
//             "Comuna": "Comuna de Cliente"
//          },
//          "Totales": {
//             "MontoTotal": 0
//          }
//       },
//       "Detalles": [
//          {
//             "IndicadorExento": 0,
//             "Nombre": "SDFSDF",
//             "Descripcion": "OPCIONAL",
//             "Cantidad": 1.0,
//             "UnidadMedida": "",
//             "Precio": 1000.0,
//             "Descuento": 0,
//             "Recargo": 0,
//             "MontoItem": 1000
//          }
//       ]
//    },
//    "Certificado": {
//       "Rut": "77534801-1",
//       "Password": "2022"
//    }
// }
// ',
// 'files'=> $certificado,'files'=> $caf),
// ));

// $response = curl_exec($curl);

// curl_close($curl);

// echo "<pre>";
// echo $response;
// echo "</pre>";




// , CURLOPT_HTTPHEADER => array('Authorization: Basic YXBpOjIxMTctVzcwMC02MzgyLTcxNzUtOTkwNg==')






// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.simpleapi.cl/api/v1/dte/generar',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_USERPWD => 'api:2626-R130-6382-9058-9489',
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => array('input' => '{
//    "Documento": {
//       "Encabezado": {
//          "IdentificacionDTE": {
//             "TipoDTE": 39,
//             "Folio": 1,
//             "FechaEmision": "2022-03-02",
//             "IndicadorServicio": 3
//          },
//          "Emisor": {
//             "Rut": "76269769-6",
//             "RazonSocialBoleta": "RAZÓN SOCIAL",
//             "GiroBoleta": "GIRO GLOSA DESCRIPTIVA",         
//                           "DireccionOrigen": "DIRECCION 787",
//             "ComunaOrigen": "COMUNA"
//          },
//          "Receptor": {
//             "Rut": "66666666-6",
//             "RazonSocial": "Razón Social de Cliente",
//             "Direccion": "Dirección de Cliente",
//             "Comuna": "Comuna de Cliente"
//          },
//          "Totales": {
//             "MontoTotal": 0
//          }
//       },
//       "Detalles": [
//          {
//             "IndicadorExento": 0,
//             "Nombre": "SDFSDF",
//             "Descripcion": "OPCIONAL",
//             "Cantidad": 1.0,
//             "UnidadMedida": "U",
//             "Precio": 1000.0,
//             "Descuento": 0,
//             "Recargo": 0,
//             "MontoItem": 1000
//          }
//       ]
//    },
//    "Certificado": {
//       "Rut": "17096073-4",
//       "Password": "2022"
//    }
// }
// ','files'=> new CURLFile($certi),'files'=> new CURLFile($cafi)),
// ));

// $response = curl_exec($curl);
// $err_status = curl_error($curl);
// echo $response;
// curl_close($curl);



?>