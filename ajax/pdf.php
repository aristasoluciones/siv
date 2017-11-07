<?php
// echo "<pre>"; print_r($_GET); 
//exit;
	//include_once('../initPdf.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();

	
	$lstpro = $producto->verVta($_GET['id']);  
	//echo '<pre>'; print_r($lstpro);
	//exit;
	$html .= "
	<html>
	<head>
	<title>BOLETA DE CALIFICACIONES</title>
	<style type='text/css'>
	.txtTicket{
			font-size:12px;
			 font-family: sans-serif;
			text-transform: uppercase;
			/*font:bold 12px 'Trebuchet MS';*/ 
		}
		table,td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	.notas{
			font-size:10px;
			 font-family: sans-serif;
			text-transform: uppercase;
			/*font:bold 12px 'Trebuchet MS';*/ 
		}
		table,td {
		border: 1px solid black;
		 border-collapse: collapse;
	}
	</style>
	</head>
	<body>
	<br>	
	<br>	
";
			
		$html .= "<table width=100%>";	
		$html .= "<tr>";	
		$html .= "<td>Producto</td>";	
		$html .= "<td>Cantidad</td>";	
		$html .= "<td>Precio</td>";	
		$html .= "<td>Total</td>";	
		$html .= "</tr>";	
		foreach($lstpro as $key=>$aux){
			$html .= "<tr>";	
		$html .= "<td>".$aux['nombre']."</td>";	
		$html .= "<td>".$aux['cantidad']."</td>";	
		$html .= "<td>".$aux['precioActual']."</td>";	
		$html .= "<td>$ ".number_format($aux['precioActual']*$aux['cantidad'],2)."</td>";	
		$html .= "</tr>";
		} 
	$html .= "</table>";	
		
	$html .= "	
	</body>
	</html>

	";
	// echo $html;
	// exit;
	# Instanciamos un objeto de la clase DOMPDF.
	$mipdf = new DOMPDF();
	 
	# Definimos el tamaño y orientación del papel que queremos.
	# O por defecto cogerá el que está en el fichero de configuración.
	$mipdf ->set_paper("A4", "portrait");
	 
	# Cargamos el contenido HTML.
	$mipdf ->load_html(utf8_decode($html));
	 
	# Renderizamos el documento PDF.
	$mipdf ->render();
	 
	# Enviamos el fichero PDF al navegador.
	$mipdf ->stream('certificadodeValidez.pdf',array('Attachment' => 0));
			


?>