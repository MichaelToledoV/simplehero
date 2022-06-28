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
			
			<div class="row form-group">
				<h4 id="tipoDoc"></h4>
				<div class="col-sm-12">


					<script type="text/javascript">function validar(val){switch (val){
						case "33":
     					$("#tipoDoc").html('Factura');
     					$(".boleta").attr('hidden', 'hidden');
     					$(".fc").attr('hidden', 'hidden');
     					$(".gd").attr('hidden', 'hidden');
     					$(".nd").attr('hidden', 'hidden');
     					$(".nc").attr('hidden', 'hidden');
     					$(".factura").removeAttr('hidden');
   						break;

   						case "34":
     					$("#tipoDoc").html('Factura exenta');
     					$(".boleta").attr('hidden', 'hidden');
     					$(".fc").attr('hidden', 'hidden');
     					$(".gd").attr('hidden', 'hidden');
     					$(".nd").attr('hidden', 'hidden');
     					$(".nc").attr('hidden', 'hidden');
     					$(".factura").removeAttr('hidden');
   						break;

   						case "39":
     					$("#tipoDoc").html('Boleta Electrónica');
     					$(".fc").attr('hidden', 'hidden');
     					$(".gd").attr('hidden', 'hidden');
     					$(".nd").attr('hidden', 'hidden');
     					$(".nc").attr('hidden', 'hidden');
     					$(".factura").attr('hidden', 'hidden');
     					$(".boleta").removeAttr('hidden');
   						break;

   						case "41":
     					$("#tipoDoc").html('Boleta No Afecta');
     					$(".fc").attr('hidden', 'hidden');
     					$(".gd").attr('hidden', 'hidden');
     					$(".nd").attr('hidden', 'hidden');
     					$(".nc").attr('hidden', 'hidden');
     					$(".factura").attr('hidden', 'hidden');
     					$(".boleta").removeAttr('hidden');
   						break;

   						case "46":
     					$("#tipoDoc").html('Factura de Compra');
     					$(".gd").attr('hidden', 'hidden');
     					$(".nd").attr('hidden', 'hidden');
     					$(".nc").attr('hidden', 'hidden');
     					$(".factura").attr('hidden', 'hidden');
     					$(".boleta").attr('hidden', 'hidden');
     					$(".fc").removeAttr('hidden');
   						break;

   						case "52":
     					$("#tipoDoc").html('Guía de Despacho');
     					$(".nd").attr('hidden', 'hidden');
     					$(".nc").attr('hidden', 'hidden');
     					$(".factura").attr('hidden', 'hidden');
     					$(".boleta").attr('hidden', 'hidden');
     					$(".fc").attr('hidden', 'hidden');
     					$(".gd").removeAttr('hidden');
   						break;

   						case "56":
     					$("#tipoDoc").html('Nota de Débito');
     					$(".nc").attr('hidden', 'hidden');
     					$(".factura").attr('hidden', 'hidden');
     					$(".boleta").attr('hidden', 'hidden');
     					$(".fc").attr('hidden', 'hidden');
     					$(".gd").attr('hidden', 'hidden');
     					$(".nd").removeAttr('hidden');
   						break;

   						case "61":
     					$("#tipoDoc").html('Nota de Crédito');
     					$(".nc").attr('hidden', 'hidden');
     					$(".factura").attr('hidden', 'hidden');
     					$(".boleta").attr('hidden', 'hidden');
     					$(".fc").attr('hidden', 'hidden');
     					$(".gd").attr('hidden', 'hidden');
     					$(".nd").attr('hidden', 'hidden');
     					$(".nc").removeAttr('hidden');
   						break;
  						}
						}
						</script>

				<span>Tipo DTE</span>
				<select name="TipoDTE" id="TipoDTE" class="form-control" onchange="validar(this.value)">
					<option value="opción" selected = "selected" disabled>Selecciona una opción...</option>
					<option value="33">33: Factura electronica</option>
					<option value="34">34: Factura No Afecta o Exenta</option>  
					<option value="39">39: Boleta Electrónica</option>
					<option value="41">41: Boleta No Afecta o Exenta</option>
					<option value="46">46: Factura de Compra Electrónica.</option>
					<option value="52">52: Guía de Despacho Electrónica</option>
					<option value="56">56: Nota de Débito Electrónica</option>
					<option value="61">61: Nota de Crédito Electrónica</option>
				</select>


				</div>
			</div>
			<div class="row form-group">
				<div class="col-sm-3">
					<span>Folio</span><input type="number" name="Folio" id="Folio" value="8" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Fecha Emision</span><input type="date" name="FechaEmision" id="FechaEmision" value="2022-06-22" class="form-control">
				</div>
				<div class="factura col-sm-3" hidden>
					<span>Fecha Vencimiento</span><input type="date" name="FechaVencimiento" id="FechaVencimiento" value="2022-07-22" class="form-control">
				</div>


				<div class="boleta col-sm-3" hidden>
					<span>Indicador de Servicio</span>
					<select name="IndicadorServicio" id="IndicadorServicio" class="form-control">
					<option value="opción" selected = "selected" disabled>Selecciona una opción...</option>
					<option value="1" type="number">1: servicios periodicos</option>
					<option value="2" type="number">2: otros servicios periodicos domiciliarios</option>
					<option value="3" type="number">3: ventas y servicios</option>
					<option value="4" type="number">4: servicio de espectaculos por terceros</option>
					</select>
				</div>
			</div>
			<div class="row form-group">
				<div class="gd col-sm-3" hidden>
					<span>TipoTraslado</span>
					<select name="TipoTraslado" id="TipoTraslado" class="form-control">
					<option value="opción" selected = "selected" disabled>Selecciona una opción...</option>
					<option value="1">1: Venta de productos</option>
					<option value="2">2: Venta por efectuar</option>
					<option value="3">3: Consignaciones</option>
					<option value="4">4: Entrega gratuita</option>
					<option value="5">5: Traslados internos</option>
					<option value="6">6: Devolución</option>
					<option value="7">7: Traslado para exportación (no venta)</option>
					<option value="8">8: Venta para exportación</option>
					</select>
				</div>
			</div>
			
			<div class="nc nd gd boleta factura row" hidden>
				<div class="col-sm-12">
					<h5>Emisor</h5>
				</div>
			</div>
			<div class="nc nd gd boleta factura row form-group">
				<div class=" col-sm-3" hidden>
					<span>Rut</span><input type="text" name="RutE" id="RutE" value="77534801-1" class="form-control">
				</div>
				<div class="col-sm-3" hidden>
					<span>Razon Social</span><input type="text" name="RazonSocialE" id="RazonSocialE" value="RIEGO SEMA SPA" class="form-control">
				</div>
				<div class="col-sm-3" hidden>
					<span>Giro</span><input type="text" name="GiroBoletaE" id="GiroBoletaE" value="OTRAS ACTIVIDADES DE VENTA AL POR MENOR EN COMERCIOS NO ESPECIALIZADOS" class="form-control">
				</div>
				<div class="col-sm-3" hidden>
					<span>Actividad Economica</span><input type="text" name="ActividadEconomica" id="ActividadEconomica" value="47199, 475201" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Direccion Origen</span><input type="text" name="DireccionOrigen" id="DireccionOrigen" value="viejo roble 73 LT 4 MZD L, Coltauco" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Comuna Origen</span><input type="text" name="ComunaOrigenE" id="ComunaOrigenE" value="Coltauco" class="form-control">
				</div>  
				<div class="gd factura col-sm-3" hidden>
					<span>Telefono</span><input type="text" name="Telefono" id="Telefono" value="" class="form-control">
				</div>
				<div class="gd col-sm-3" hidden>
					<span>CorreoElectronico</span><input type="text" name="CorreoElectronico" id="CorreoElectronico" value="" class="form-control">
				</div>
						
			</div>
			<div class="row gd boleta factura" hidden>
				<div class="col-sm-12">
					<h5>Receptor</h5>
				</div>
			</div>
			<div class="row form-group">
				<div class="gd boleta factura col-sm-4" hidden>
					<span>Rut</span><input type="text" name="RutR" id="RutR" value="60803000-K" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-4" hidden>
					<span>Razon Social receptor</span><input type="text" name="RazonSocialR" id="RazonSocialR" value="SERVICIO DE IMPUESTOS INTERNOS DIRECCION" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-4" hidden>
					<span>Direccion</span><input type="text" name="DireccionR" id="DireccionR" value="Santiago" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Comuna</span><input type="text" name="ComunaOrigenR" id="ComunaOrigenR" value="Santiago" class="form-control">
				</div>  
				<div class="factura col-sm-3" hidden>
					<span>Ciudad</span><input type="text" name="Ciudad" id="Ciudad" value="Santiago" class="form-control">
				</div>   
				<div class="gd factura col-sm-3" hidden>
					<span>Giro</span><input type="text" name="GiroR" id="GiroR" value="SII" class="form-control">
				</div>
				<div class="factura col-sm-3" hidden>
					<span>Contacto</span><input type="text" name="Contacto" id="Contacto" value="" class="form-control">
				</div>   
			</div>
			<div class="row form-group">
				<div class="nc col-sm-4" hidden>
					<span>Rut otro Solicitante</span><input type="text" name="RutSolicitante" id="RutSolicitante" value="" class="form-control">
				</div>
			</div>
					<script type="text/javascript">function transporte(val){switch (val){
						case "1":
     					$("#tipotrpte").html('Sin transporte');
     					$(".sin").attr('hidden', 'hidden');
   						break;

   						case "2":
     					$("#tipotrpte").html('Transporte sin chofer');
     					$(".sin").attr('hidden', 'hidden');
     					$(".tsc").removeAttr('hidden');
   						break;
   						case "3":
     					$("#tipotrpte").html('Transporte con chofer');
     					$(".sin").attr('hidden', 'hidden');
     					$(".tcc").removeAttr('hidden');
   						break;
  						}
						}
					</script>
			<div class="row factura boleta gd fc" hidden>
				<div class="col-sm-12">
					<h5>Transporte: <div id="tipotrpte"></div></h5>
				</div>
			</div>
			<div class="row form-group">
				<div class="factura boleta gd fc col-sm-12">
					<div class="col-sm-12">
					<span>¿Tiene transporte?</span>
					<select name="tieneTransporte" id="tieneTransporte" class="form-control" onchange="transporte(this.value)">
						<option value="opción" selected = "selected" disabled>Selecciona una opción...</option>
						<option value="1">1: Sin transporte</option>
						<option value="2">2: Transporte sin chofer</option>
						<option value="3">3: Transporte con chofer</option>
					</select>
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="tcc sin col-sm-3" hidden>
					<span>Patente</span><input type="text" name="Patente" id="Patente" value="" class="form-control">
				</div> 
				<div class="tcc sin col-sm-3" hidden>
					<span>Rut del Transportista</span><input type="text" name="RutTransportista" id="RutTransportista" value="" class="form-control">
				</div> 
				<div class="tcc tsc sin col-sm-3" hidden>
					<span>Direccion de Destino</span><input type="text" name="DireccionDestino" id="DireccionDestino" value="" class="form-control">
				</div> 
				<div class="tcc tsc sin col-sm-3" hidden>
					<span>Comuna de Destino</span><input type="text" name="ComunaDestino" id="ComunaDestino" value="" class="form-control">
				</div> 
			</div>
			<div class="row form-group">
				<div class="tcc tsc sin col-sm-4" hidden>
					<span>Ciudad de Destino</span><input type="text" name="CiudadDestino" id="CiudadDestino" value="" class="form-control">
				</div>
			</div>
			<div class="row tcc sin" hidden>
				<div class="col-sm-12">
					<h5>Chofer</h5>
				</div>
			</div>
			<div class="row form-group">
				<div class="tcc sin col-sm-4" hidden>
					<span>Rut del Chofer</span><input type="text" name="RutChofer" id="RutChofer" value="" class="form-control">
				</div>
				<div class="tcc sin col-sm-4" hidden>
					<span>Nombre del Chofer</span><input type="text" name="NombreChofer" id="NombreChofer" value="" class="form-control">
				</div>
			</div>


			<div class="row form-group gd boleta factura" hidden>
				<div class="col-sm-12">
					<h5>Totales</h5>
				</div>
			</div>
			<div class="row form-group">
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Monto Total</span><input type="text" name="MontoTotal" id="MontoTotal" value="1071" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Monto Neto</span><input type="text" name="MontoNeto" id="MontoNeto" value="900" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Monto Exento</span><input type="text" name="MontoExento" id="MontoExento" value="0" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>IVA</span><input type="text" name="IVA" id="IVA" value="171" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="gd factura col-sm-3" hidden>
					<span>Tasa IVA</span><input type="text" name="TasaIVA" id="TasaIVA" value="19" class="form-control">
				</div>
			</div>
			<div class="row gd boleta factura" hidden>
				<div class="col-sm-6">
					<h5>Productos</h5>
				</div>
				<div class="col-sm-6">
					<span>agregar Producto</span>
					<a href="" id="agregarProducto" class="btn btn-success" name="agregarProducto">+</a>
				</div>
			</div>
			<div id="listaProductos"></div>
			<!-- <div class="row form-group">
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Indicador producto Exento</span><input type="text" name="IndicadorExento" id="indicadorExento" value="0" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Nombre del producto</span><input type="text" name="Nombre" id="Nombre" value="Nombre" class="form-control">
				</div>
				<div class="factura col-sm-3" hidden>
					<span>Descripcion</span><input type="text" name="Descripcion" id="descripcion" value="opcional" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Cantidad</span><input type="number" name="Cantidad" id="cantidad" value="1.0" class="form-control">
				</div>   
			</div>

			<div class="row form-group">
				<div class="factura col-sm-3" hidden>
					<span>UnidadMedida</span><input type="text" name="UnidadMedida" id="UnidadMedida" value="" class="form-control">

				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Precio</span><input type="number" name="Precio" id="precio" value="1000" class="form-control">

				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Descuento</span><input type="number" name="Descuento" id="descuento" value="0" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>Recargo</span><input type="number" name="Recargo" id="recargo" value="0" class="form-control">
				</div>   
			</div>

			<div class="row form-group">
				<div class="gd boleta factura col-sm-3" hidden>
					<span>MontoItem</span><input type="number" name="MontoItem" id="montoItem" value="1000" class="form-control">
				</div>
			</div> -->

			
			<div class="row gd boleta factura" hidden>
				<div class="col-sm-12">
					<h5>Referencias</h5>
				</div>
			</div>

			<div class="row form-group">
				<div class="gd boleta factura col-sm-3" hidden>
					<span>FechaDocumentoReferencia</span><input type="date" name="FechaDocumentoReferencia" id="FechaDocumentoReferencia" value="2022-06-22" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>TipoDocumento</span><input type="number" name="TipoDocumento" id="TipoDocumento" value="33" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>CodigoReferencia</span><input type="number" name="CodigoReferencia" id="CodigoReferencia" value="0" class="form-control">
				</div>
				<div class="gd boleta factura col-sm-3" hidden>
					<span>RazonReferencia</span><input type="text" name="RazonReferencia" id="RazonReferencia" value="asdsa" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="gd boleta factura col-sm-3" hidden>
					<span>FolioReferencia</span><input type="number" name="FolioReferencia" id="FolioReferencia" value="8" class="form-control">
				</div>
			</div>
				
			<div class="row gd boleta factura" hidden>
				<div class="col-sm-12">
					<h5>Descuentos o recargos</h5>
				</div>
			</div>

			<div class="gd boleta factura row form-group" hidden>
				<div class="col-sm-3">
					<span>TipoMovimiento</span><input type="text" name="TipoMovimiento" id="TipoMovimiento" value="Descuento" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Descripcion</span><input type="text" name="DescripcionRE" id="DescripcionRE" value="DESCUENTO COMERCIAL" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>TipoValor</span>						
					<select name="TipoValor" id="TipoValor" class="form-control" type="text">
							<option value="Porcentaje">Porcentaje</option>
							<option value="Pesos" selected>Pesos</option>
					</select>
				</div>
				<div class="col-sm-3">
					<span>Valor</span><input type="text" name="Valor" id="Valor" value="100" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<h5>Certificado</h5>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<span>Rut</span><input type="text" name="Rutcert" id="Rutcert" value="18245727-2" class="form-control">
				</div>
				<div class="col-sm-3">
					<span>Clave</span><input type="text" name="Clavecert" id="Clavecert" value="2022" class="form-control">
				</div>
				<div class="col-sm-3" hidden>
					<span>CAF</span><input type="file" name="CAF" id="CAF" class="form-control">
				</div>
				<div class="col-sm-3" hidden>
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
let listaProd =  $("#listaProductos");
console.log(listaProd);
let carrito = [];
var contador = 0;
function generarInputsProd(){

	var rowProductos = '<div class="container">';
	rowProductos += '<h5>'+contador+'</h5>';
	rowProductos +=	'<div class="row form-group">';
	rowProductos +=	'<div class="col-sm-3">';
	rowProductos +=	'<span>Indicador producto Exento</span><input type="text" name="IndicadorExento'+contador+'" id="indicadorExento'+contador+'" value="0" class="form-control">';
	rowProductos +=	'</div>';
	rowProductos +=	'<div class="col-sm-3">';
	rowProductos +=	'<span>Nombre del producto</span><input type="text" name="Nombre'+contador+'" id="Nombre'+contador+'" value="Nombre" class="form-control">';
	rowProductos +=	'</div>';
	rowProductos +=	'<div class="col-sm-3">';
	rowProductos += '<span>Descripcion</span><input type="text" name="Descripcion'+contador+'" id="descripcion'+contador+'" value="opcional" class="form-control">';
	rowProductos += '</div>';
	rowProductos += '<div class="col-sm-3">';
	rowProductos += '<span>Cantidad</span><input type="number" name="Cantidad'+contador+'" id="cantidad'+contador+'" value="1.0" class="form-control">';
	rowProductos += '</div>';   
	rowProductos += '</div>';

	rowProductos += '<div class="row form-group">';
	rowProductos += '<div class="col-sm-3">';
	rowProductos += '<span>UnidadMedida</span><input type="text" name="UnidadMedida'+contador+'" id="UnidadMedida'+contador+'" value="" class="form-control">';

	rowProductos += '</div>';
	rowProductos += '<div class="col-sm-3">';
	rowProductos += '<span>Precio</span><input type="number" name="Precio'+contador+'" id="precio'+contador+'" value="1000" class="form-control">';

	rowProductos += '</div>';
	rowProductos += '<div class="col-sm-3">';
	rowProductos += '<span>Descuento</span><input type="number" name="Descuento'+contador+'" id="descuento'+contador+'" value="0" class="form-control">';
	rowProductos += '</div>';
	rowProductos += '<div class="col-sm-3">';
	rowProductos += '<span>Recargo</span><input type="number" name="Recargo'+contador+'" id="recargo'+contador+'" value="0" class="form-control">';
	rowProductos += '</div>';   
	rowProductos += '</div>';

	rowProductos += '<div class="row form-group">';
	rowProductos += '<div class="col-sm-3">';
	rowProductos += '<span>MontoItem</span><input type="number" name="MontoItem'+contador+'" id="montoItem'+contador+'" value="1000" class="form-control">';
	rowProductos += '</div>';
	rowProductos += '</div>';
	rowProductos += '</div>';

	contador++;
	return rowProductos;
}

$("#agregarProducto").on("click", function(event){

	
	var productoscarrito = "";
	carrito.push(generarInputsProd());
	carrito.forEach(function(elemento, indice, array) {
		productoscarrito += elemento;
		
	});
	console.log(productoscarrito);
	listaProd.html(productoscarrito+'<input type="number" id="canProd" name="canProd" value="'+carrito.length+'" >');
	event.preventDefault();
});

$("#EnviarBoleta").submit(function(event){
	var parametros = $(this).serialize();
	console.log(parametros);
	event.preventDefault();
	// var form_data = new FormData();
	// var caf = $("#CAF").prop("files")[0];
	// var cert = $("#Cert").prop("files")[0];
	// console.log(cert);
	// console.log(caf,cert);


		// cform_data.append("file1", caf);
		// form_data.append("file2", cert);
  //       form_data.append("Rutcert", Rutcert);
  //       form_data.append("MontoItem", MontoItem);
  //       form_data.append("Descuento", Descuento);
  //       form_data.append("IndicadorExento", IndicadorExento);
  //       form_data.append("Nombre", Nombre);
  //       form_data.append("Descripcion", Descripcion);
  //       form_data.append("Cantidad", Cantidad);

	// var caf2 = document.getElementById('CAF').files[0];
	// var CAF = new FormData($("#EnviarBoleta").CAF);
	// var Cert = new FormData($("#EnviarBoleta").Cert);
	// var cantProd = $("#canProd").val();
	// var productos;

	// var indicadorExento;
	// var Nombre;
	// var descripcion;
	// var cantidad;
	// var UnidadMedida;
	// var precio;
	// var descuento;
	// var recargo;
	// var montoItem;

	// 	for(var i = 0; i<=cantProd; i++ ){

	// 		indicadorExento = $("#indicadorExento"+i).val();
	// 		Nombre = $("#Nombre"+i).val();
	// 		descripcion = $("#descripcion"+i).val();
	// 		cantidad = $("#cantidad").val();
	// 		UnidadMedida = $("#UnidadMedida"+i).val();
	// 		precio = $("#precio"+i).val();
	// 		descuento = $("#descuento"+i).val();
	// 		recargo = $("#recargo"+i).val();
	// 		montoItem = $("#montoItem"+i).val();

	// 		productos += {
	// 			"indicadorExento" : indicadorExento,
	// 			"Nombre" : Nombre,
	// 			"descripcion" : descripcion,
	// 			"cantidad" : cantidad,
	// 			"UnidadMedida" : UnidadMedida,
	// 			"precio" : precio,
	// 			"descuento" : descuento,
	// 			"recargo" : recargo,
	// 			"montoItem" : montoItem
	// 		}
	// 	}

	// console.log(parametros);

	// var TipoDTE = $("#TipoDTE").val();
	// var Folio = $("#Folio").val();
	// var FechaEmision = $("#FechaEmision").val();
	// var FechaVencimiento = $("#FechaVencimiento").val();
	// var IndicadorServicio = $("#IndicadorServicio").val();
	// var TipoTraslado = $("#TipoTraslado").val();
	// var RutE = $("#RutE").val();
	// var RazonSocialE = $("#RazonSocialE").val();
	// var ActividadEconomica = $("#ActividadEconomica").val();
	// var GiroBoletaE = $("#GiroBoletaE").val();
	// var ComunaOrigenE = $("#ComunaOrigenE").val();
	// var DireccionOrigen = $("#DireccionOrigen").val();
	// var Telefono = $("#Telefono").val();
	// var CorreoElectronico = $("#CorreoElectronico").val();
	// var RutR = $("#RutR").val();
	// var RazonSocialR = $("#RazonSocialR").val();
	// var DireccionR = $("#DireccionR").val();
	// var Ciudad = $("#Ciudad").val();
	// var ComunaOrigenR = $("#ComunaOrigenR").val();
	// var GiroR = $("#GiroR").val();
	// var Contacto = $("#Contacto").val();
	// var RutSolicitante = $("#RutSolicitante").val();
	// var Patente = $("#Patente").val();
	// var RutTransportista = $("#RutTransportista").val();
	// var DireccionDestino = $("#DireccionDestino").val();
	// var ComunaDestino = $("#ComunaDestino").val();
	// var CiudadDestino = $("#CiudadDestino").val();
	// var RutTransportista = $("#RutTransportista").val();
	// var RutChofer = $("#RutChofer").val();
	// var NombreChofer = $("#NombreChofer").val();
	// var MontoTotal = $("#MontoTotal").val();
	// var MontoExento = $("#MontoExento").val();
	// var MontoNeto = $("#MontoNeto").val();
	// var IVA = $("#IVA").val();
	// var TasaIVA = $("#TasaIVA").val();
	// var MontoTotal = $("#MontoTotal").val();
	
	// var FechaDocumentoReferencia = $("#FechaDocumentoReferencia").val();
	// var TipoDocumento = $("#TipoDocumento").val();
	// var CodigoReferencia = $("#CodigoReferencia").val();
	// var RazonReferencia = $("#RazonReferencia").val();
	// var FolioReferencia = $("#FolioReferencia").val();
	// var TipoMovimiento = $("#TipoMovimiento").val();
	// var DescripcionRE = $("#DescripcionRE").val();
	// var TipoValor = $("#TipoValor").val();
	// var Valor = $("#Valor").val();
	// var Rutcert = $("#Rutcert").val();
	// var Clavecert = $("#Clavecert").val();


	// var datos = {
	// 	"TipoDTE" : TipoDTE,
	// 	"Folio" : Folio,
	// 	"FechaEmision" : FechaEmision,
	// 	"FechaVencimiento" : FechaVencimiento,
	// 	"IndicadorServicio" : IndicadorServicio,
	// 	"TipoTraslado": TipoTraslado,
	// 	"RutE" : RutE,
	// 	"RazonSocialE" : RazonSocialE,
	// 	"ActividadEconomica" : ActividadEconomica,
	// 	"GiroBoletaE" : GiroBoletaE,
	// 	"ComunaOrigenE" : ComunaOrigenE,
	// 	"DireccionOrigen" : DireccionOrigen,
	// 	"Telefono" : Telefono,
	// 	"CorreoElectronico": CorreoElectronico,
	// 	"RutR" : RutR,
	// 	"RazonSocialR" : RazonSocialR,
	// 	"DireccionR" : DireccionR,
	// 	"Ciudad" : Ciudad,
	// 	"ComunaOrigenR" : ComunaOrigenR,
	// 	"GiroR" : GiroR,
	// 	"Contacto" : Contacto,
	// 	"RutSolicitante" : RutSolicitante,
	// 	"Patente" : Patente,
	// 	"RutTransportista" : RutTransportista,
	// 	"DireccionDestino" : DireccionDestino,
	// 	"ComunaDestino" : ComunaDestino,
	// 	"CiudadDestino" : CiudadDestino,
	// 	"RutTransportista" : RutTransportista,
	// 	"RutChofer" : RutChofer,
	// 	"NombreChofer" : NombreChofer,
	// 	"MontoTotal" : MontoTotal,
	// 	"MontoExento" : MontoExento,
	// 	"MontoNeto" : MontoNeto,
	// 	"IVA" : IVA,
	// 	"TasaIVA" : TasaIVA,
	// 	"MontoTotal" : MontoTotal,
	// 	"indicadorExento" : indicadorExento,
	// 	"Nombre" : Nombre,
	// 	"descripcion" : descripcion,
	// 	"cantidad" : cantidad,
	// 	"UnidadMedida" : UnidadMedida,
	// 	"precio" : precio,
	// 	"descuento" : descuento,
	// 	"recargo" : recargo,
	// 	"montoItem" : montoItem,
	// 	"FechaDocumentoReferencia" : FechaDocumentoReferencia,
	// 	"TipoDocumento" : TipoDocumento,
	// 	"CodigoReferencia" : CodigoReferencia,
	// 	"RazonReferencia" : RazonReferencia,
	// 	"FolioReferencia" : FolioReferencia,
	// 	"TipoMovimiento" : TipoMovimiento,
	// 	"DescripcionRE" : DescripcionRE,
	// 	"TipoValor" : TipoValor,
	// 	"Valor" : Valor,
	// 	"Rutcert" : Rutcert,
	// 	"Clavecert" : Clavecert
	// };

		$.ajax({
		  url: "simpleApi-EnviarBoleta.php",
		  type: "post",
		  data: parametros,
		  timeout: 0,
		  // processData: false,
		  // mimeType: "multipart/form-data",
		  // contentType: false,
		  beforeSend: function(objeto){
					$("#result").html("...esperando resultados");
			  	},
		  success:function(data){
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