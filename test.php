<?php

header('Content-Type: application/json; charset-utf-8');

$arrayEnvio = '{"TipoDTE" : 33,
		"Folio" : 8,
		"FechaEmision" : "2022-06-26",
		"FechaVencimiento" : "2022-06-26",
		"IndicadorServicio" : "",
		"TipoTraslado": "",
		"RutE" : "",
		"RazonSocialE" : "",
		"ActividadEconomica" : "",
		"GiroBoletaE" : "",
		"ComunaOrigenE" : "",
		"DireccionOrigen" : "",
		"Telefono" : "",
		"CorreoElectronico": "",
		"RutR" : "",
		"RazonSocialR" : "",
		"DireccionR" : "",
		"Ciudad" : "",
		"ComunaOrigenR" : "",
		"GiroR" : "",
		"Contacto" : "",
		"RutSolicitante" : "",
		"Patente" : "",
		"RutTransportista" : "",
		"DireccionDestino" : "",
		"ComunaDestino" : "",
		"CiudadDestino" : "",
		"RutTransportista" : "",
		"RutChofer" : "",
		"NombreChofer" : "",
		"MontoTotal" : "",
		"MontoExento" : "",
		"MontoNeto" : "",
		"IVA" : "",
		"TasaIVA" : "",
		"MontoTotal" : "",
		"detalle": [
		  {
		    	"indicadorExento" : "0",
				"Nombre" : "Productoexento",
				"descripcion" : "Productoexento",
				"cantidad" : 1,
				"UnidadMedida" : "Un",
				"precio" : 1000,
				"descuento" : 0,
				"recargo" : 0,
				"montoItem" : 1000
		  },
		  {
		  		"indicadorExento" : "1",
				"Nombre" : "Productoafecto",
				"descripcion" : "Productoafecto",
				"cantidad" : 1,
				"UnidadMedida" : "kg",
				"precio" : 1300,
				"descuento" : 0,
				"recargo" : 0,
				"montoItem" : 1300
		  }
		],
		"FechaDocumentoReferencia" : "",
		"TipoDocumento" : "",
		"CodigoReferencia" : "",
		"RazonReferencia" : "",
		"FolioReferencia" : "",
		"TipoMovimiento" : "",
		"DescripcionRE" : "",
		"TipoValor" : "",
		"Valor" : "",
		"Rutcert" : "",
		"Clavecert" : ""
}';


$decoded_json = json_decode($arrayEnvio, false);

foreach($data as $k => $v) {
    echo "<h1>$k</h1>";
    if (is_array($v)) {
        foreach($v as $x => $z) {
            if (is_array($z)) {
                foreach($z as $i => $t) {
                    echo "<p><b>$i</b>: $t</p>";
                }
            } else {
                echo "<p><b>$x</b>: $z</p>";
            }
        }
    }
}