<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<title></title>
	<style type="text/css">
		h5{
			margin-top: 20px;
			margin-bottom: 10px;
			padding-top: 20px;
		}
		button{
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<form id="EnviarBoleta" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
							<h1>ingresar datos de boleta</h1>
				</div>
			</div>
			<div class="bg bg-success" id="result"></div>
			<div id="listaProductos"></div>
			<h5>Encabezado</h5>
			<div class="row form-group">
				<div class="col-sm-3">
					<span>TipoDTE</span><input type="number" name="TipoDTE" id="TipoDTE" value="33" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Folio</span><input type="number" name="Folio" id="Folio" value="8" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>FechaEmision</span><input type="date" name="FechaEmision" id="FechaEmision" value="2022-06-22" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>FechaVencimiento</span><input type="date" name="FechaVencimiento" id="FechaVencimiento" value="2022-07-22" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>IndicadorServicio</span><input type="number" name="IndicadorServicio" id="IndicadorServicio" value="3" class="form-control" hidden>
				</div>
			</div>
			<div class="row form-group">
				<h5>Emisor</h5>
				<div class="col-sm-3">
					<span>Rut</span><input type="text" name="RutE" id="RutE" value="77534801-1" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>RazonSocialBoleta</span><input type="text" name="RazonSocialE" id="RazonSocialE" value="RIEGO SEMA SPA" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>ActividadEconomica</span><input type="text" name="ActividadEconomica" id="ActividadEconomica" value="47199, 475201" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>GiroBoleta</span><input type="text" name="GiroBoletaE" id="GiroBoletaE" value="OTRAS ACTIVIDADES DE VENTA AL POR MENOR EN COMERCIOS NO ESPECIALIZADOS" class="form-control">
				</div>
				   
			</div>
			<div class="row form-group">
				<div class="col-sm-4">
					<span>ComunaOrigen</span><input type="text" name="ComunaOrigenE" id="ComunaOrigenE" value="Coltauco" class="form-control">
				</div>  
				<div class="col-sm-4">
					<span>DireccionOrigen</span><input type="text" name="DireccionOrigen" id="DireccionOrigen" value="viejo roble 73 LT 4 MZD L, Coltauco" class="form-control">
				</div>
				<div class="col-sm-4">
					<span>Telefono</span><input type="text" name="Telefono" id="Telefono" value="" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<h5>Receptor</h5>
				<div class="col-sm-4">
					<span>Rut</span><input type="text" name="RutR" id="RutR" value="60803000-K" class="form-control">
				</div>
				<div class="col-sm-4">
					<span>RazonSocial</span><input type="text" name="RazonSocialR" id="RazonSocialR" value="SERVICIO DE IMPUESTOS INTERNOS DIRECCION" class="form-control">
				</div>
				<div class="col-sm-4">
					<span>Direccion</span><input type="text" name="DireccionR" id="DireccionR" value="Santiago" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-sm-4">
					<span>Comuna</span><input type="text" name="ComunaOrigenR" id="ComunaOrigenR" value="Santiago" class="form-control">
				</div>  
				<div class="col-sm-4">
					<span>Ciudad</span><input type="text" name="Ciudad" id="Ciudad" value="Santiago" class="form-control">
				</div>   
				<div class="col-sm-4">
					<span>Giro</span><input type="text" name="GiroR" id="GiroR" value="SII" class="form-control">
				</div>
				<div class="col-sm-4">
					<span>Contacto</span><input type="text" name="Contacto" id="Contacto" value="" class="form-control">
				</div>   
			</div>
			<div class="row form-group">
				<div class="col-sm-4">
					<span>RutSolicitante</span><input type="text" name="RutSolicitante" id="RutSolicitante" value="" class="form-control">
				</div>   
				<div class="col-sm-4">
					<h5>Transporte</h5>
					<span>Patente</span><input type="text" name="Patente" id="Patente" value="" class="form-control">
				</div> 
				<div class="col-sm-4">
					<span>RutTransportista</span><input type="text" name="RutTransportista" id="RutTransportista" value="" class="form-control">
				</div> 
				<div class="col-sm-4">
					<span>DireccionDestino</span><input type="text" name="DireccionDestino" id="DireccionDestino" value="" class="form-control">
				</div> 
				<div class="col-sm-4">
					<span>ComunaDestino</span><input type="text" name="ComunaDestino" id="ComunaDestino" value="" class="form-control">
				</div> 
				<div class="col-sm-4">
					<span>CiudadDestino</span><input type="text" name="CiudadDestino" id="CiudadDestino" value="" class="form-control">
				</div>
				<h5>Chofer</h5>
				<div class="col-sm-4">
					<span>RutChofer</span><input type="text" name="RutChofer" id="RutChofer" value="" class="form-control">
				</div>
				<div class="col-sm-4">
					<span>NombreChofer</span><input type="text" name="NombreChofer" id="NombreChofer" value="" class="form-control">
				</div>

			</div>
			<div class="row form-group">
				<div class="col-sm-3">
					<span>MontoTotal</span><input type="text" name="MontoTotal" id="MontoTotal" value="1071" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>MontoNeto</span><input type="text" name="MontoNeto" id="MontoNeto" value="900" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>MontoExento</span><input type="text" name="MontoExento" id="MontoExento" value="0" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>IVA</span><input type="text" name="IVA" id="IVA" value="171" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>TasaIVA</span><input type="text" name="TasaIVA" id="TasaIVA" value="19" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<h5>Totales</h5>
				<div class="col-sm-4">
					<span>MontoTotal</span><input type="number" name="MontoTotal" id="MontoTotal" value="1000" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<h5>Detalles</h5>
				<div class="col-sm-3">
					<span>IndicadorExento</span><input type="text" name="IndicadorExento" id="indicadorExento" value="0" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Nombre</span><input type="text" name="Nombre" id="Nombre" value="Nombre" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Descripcion</span><input type="text" name="Descripcion" id="descripcion" value="opcional" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Cantidad</span><input type="number" name="Cantidad" id="cantidad" value="1.0" class="form-control">
				</div>   
			</div>
			<div class="row form-group">
				<div class="col-sm-3">
					<span>UnidadMedida</span><input type="text" name="UnidadMedida" id="UnidadMedida" value="" class="form-control">

				</div>
				<div class="col-sm-3">
					<span>Precio</span><input type="number" name="Precio" id="precio" value="1000" class="form-control">

				</div>
				<div class="col-sm-3">
					<span>Descuento</span><input type="number" name="Descuento" id="descuento" value="0" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Recargo</span><input type="number" name="Recargo" id="recargo" value="0" class="form-control">
				</div>   
			</div>
			<div class="row form-group">
				<div class="col-sm-3">
					<span>MontoItem</span><input type="number" name="MontoItem" id="montoItem" value="1000" class="form-control">
				</div>
			</div>

			
				<div class="col-sm-3">
					<h5>Referencias</h5>
					<span>FechaDocumentoReferencia</span><input type="date" name="FechaDocumentoReferencia" id="FechaDocumentoReferencia" value="2022-06-22" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>TipoDocumento</span><input type="number" name="TipoDocumento" id="TipoDocumento" value="33" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>CodigoReferencia</span><input type="number" name="CodigoReferencia" id="CodigoReferencia" value="0" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>RazonReferencia</span><input type="text" name="RazonReferencia" id="RazonReferencia" value="asdsa" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>FolioReferencia</span><input type="number" name="FolioReferencia" id="FolioReferencia" value="8" class="form-control">
				</div>


			<div class="row form-group">
				<div class="col-sm-3">
					<span>TipoMovimiento</span><input type="text" name="TipoMovimiento" id="TipoMovimiento" value="Descuento" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Descripcion</span><input type="text" name="DescripcionRE" id="DescripcionRE" value="DESCUENTO COMERCIAL" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>TipoValor</span><input type="text" name="TipoValor" id="TipoValor" value="Pesos" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Valor</span><input type="text" name="Valor" id="Valor" value="100" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<h5>Certificado</h5>
				<div class="col-sm-3">
					<span>Rut</span><input type="text" name="Rutcert" id="Rutcert" value="18245727-2" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Clave</span><input type="text" name="Clavecert" id="Clavecert" value="2022" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>CAF</span><input type="file" name="CAF" id="CAF" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Cert</span><input type="file" name="Cert" id="Cert" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-sm-6">
					<button class="btn btn-default">Cancelar</button>
				</div>
				<div class="col-sm-6">
					<button type="submit" class="btn btn-primary">Aceptar</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>


<script type="text/javascript">


$("#EnviarBoleta").submit(function(event){
	event.preventDefault();




	var TipoDTE = $("#TipoDTE").val();
	var Folio = $("#Folio").val();
	var FechaEmision = $("#FechaEmision").val();
	var FechaVencimiento = $("#FechaVencimiento").val();
	var IndicadorServicio = $("#IndicadorServicio").val();
	var RutE = $("#RutE").val();
	var RazonSocialE = $("#RazonSocialE").val();
	var ActividadEconomica = $("#ActividadEconomica").val();
	var GiroBoletaE = $("#GiroBoletaE").val();
	var ComunaOrigenE = $("#ComunaOrigenE").val();
	var DireccionOrigen = $("#DireccionOrigen").val();
	var Telefono = $("#Telefono").val();
	var RutR = $("#RutR").val();
	var RazonSocialR = $("#RazonSocialR").val();
	var DireccionR = $("#DireccionR").val();
	var Ciudad = $("#Ciudad").val();
	var ComunaOrigenR = $("#ComunaOrigenR").val();
	var GiroR = $("#GiroR").val();
	var Contacto = $("#Contacto").val();
	var RutSolicitante = $("#RutSolicitante").val();
	var Patente = $("#Patente").val();
	var RutTransportista = $("#RutTransportista").val();
	var DireccionDestino = $("#DireccionDestino").val();
	var ComunaDestino = $("#ComunaDestino").val();
	var CiudadDestino = $("#CiudadDestino").val();
	var RutTransportista = $("#RutTransportista").val();
	var RutChofer = $("#RutChofer").val();
	var NombreChofer = $("#NombreChofer").val();
	var MontoTotal = $("#MontoTotal").val();
	var MontoExento = $("#MontoExento").val();
	var MontoNeto = $("#MontoNeto").val();
	var IVA = $("#IVA").val();
	var TasaIVA = $("#TasaIVA").val();
	var MontoTotal = $("#MontoTotal").val();
	var indicadorExento = $("#indicadorExento").val();
	var Nombre = $("#Nombre").val();
	var descripcion = $("#descripcion").val();
	var cantidad = $("#cantidad").val();
	var UnidadMedida = $("#UnidadMedida").val();
	var precio = $("#precio").val();
	var descuento = $("#descuento").val();
	var recargo = $("#recargo").val();
	var montoItem = $("#montoItem").val();
	var FechaDocumentoReferencia = $("#FechaDocumentoReferencia").val();
	var TipoDocumento = $("#TipoDocumento").val();
	var CodigoReferencia = $("#CodigoReferencia").val();
	var RazonReferencia = $("#RazonReferencia").val();
	var FolioReferencia = $("#FolioReferencia").val();
	var TipoMovimiento = $("#TipoMovimiento").val();
	var DescripcionRE = $("#DescripcionRE").val();
	var TipoValor = $("#TipoValor").val();
	var Valor = $("#Valor").val();
	var Rutcert = $("#Rutcert").val();
	var Clavecert = $("#Clavecert").val();


	var datos = {
		"TipoDTE" : TipoDTE,
		"Folio" : Folio,
		"FechaEmision" : FechaEmision,
		"FechaVencimiento" : FechaVencimiento,
		"IndicadorServicio" : IndicadorServicio,
		"RutE" : RutE,
		"RazonSocialE" : RazonSocialE,
		"ActividadEconomica" : ActividadEconomica,
		"GiroBoletaE" : GiroBoletaE,
		"ComunaOrigenE" : ComunaOrigenE,
		"DireccionOrigen" : DireccionOrigen,
		"Telefono" : Telefono,
		"RutR" : RutR,
		"RazonSocialR" : RazonSocialR,
		"DireccionR" : DireccionR,
		"Ciudad" : Ciudad,
		"ComunaOrigenR" : ComunaOrigenR,
		"GiroR" : GiroR,
		"Contacto" : Contacto,
		"RutSolicitante" : RutSolicitante,
		"Patente" : Patente,
		"RutTransportista" : RutTransportista,
		"DireccionDestino" : DireccionDestino,
		"ComunaDestino" : ComunaDestino,
		"CiudadDestino" : CiudadDestino,
		"RutTransportista" : RutTransportista,
		"RutChofer" : RutChofer,
		"NombreChofer" : NombreChofer,
		"MontoTotal" : MontoTotal,
		"MontoExento" : MontoExento,
		"MontoNeto" : MontoNeto,
		"IVA" : IVA,
		"TasaIVA" : TasaIVA,
		"MontoTotal" : MontoTotal,
		"indicadorExento" : indicadorExento,
		"Nombre" : Nombre,
		"descripcion" : descripcion,
		"cantidad" : cantidad,
		"UnidadMedida" : UnidadMedida,
		"precio" : precio,
		"descuento" : descuento,
		"recargo" : recargo,
		"montoItem" : montoItem,
		"FechaDocumentoReferencia" : FechaDocumentoReferencia,
		"TipoDocumento" : TipoDocumento,
		"CodigoReferencia" : CodigoReferencia,
		"RazonReferencia" : RazonReferencia,
		"FolioReferencia" : FolioReferencia,
		"TipoMovimiento" : TipoMovimiento,
		"DescripcionRE" : DescripcionRE,
		"TipoValor" : TipoValor,
		"Valor" : Valor,
		"Rutcert" : Rutcert,
		"Clavecert" : Clavecert
	};

		$.ajax({
			  url: "simpleApi-EnviarBoleta.php",
			  type: "post",
			  data: datos,
			  timeout: 0,
			  // processData: false,
			  mimeType: "multipart/form-data",
			  // contentType: false,
			  beforeSend: function(objeto){
						$("#result").html("...esperando resultados");
				  	},
			  success:function(data){
					// $("#result").html(data);
					console.log(data);
				}
		});

});

// var settings = {
//   "url": "https://api.simpleapi.cl/api/v1/dte/generar",
//   "method": "POST",
//   "timeout": 0,
//   "processData": false,
//   "mimeType": "multipart/form-data",
//   "contentType": false,
//   "data": form
// };

// $.ajax(settings).done(function (response) {
//   console.log(response);
// });
</script>