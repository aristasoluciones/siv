<?php

use PhpRbac\Rbac;
include_once(DOC_ROOT.'/properties/errors.es.php');

require(DOC_ROOT.'/libs/Smarty.class.php');
require(DOC_ROOT.'/libs/nusoap.php');
include_once(DOC_ROOT."/libs/qr/qrlib.php");
include_once(DOC_ROOT."/libs/PHPExcel/Classes/PHPExcel.php");
include_once(DOC_ROOT."/libs/PhpRbac/src/PhpRbac/Rbac.php");

$rbac =  new Rbac;

include_once(DOC_ROOT.'/classes/db.class.php');
$db = new DB;

include_once(DOC_ROOT.'/classes/error.class.php');
$error = new Error;

include_once(DOC_ROOT.'/classes/util.class.php');
$util = new Util;

include_once(DOC_ROOT.'/classes/main.class.php');
$main = new Main;

include_once(DOC_ROOT.'/classes/user.class.php');
$user = new User;

include_once(DOC_ROOT.'/classes/usuario.class.php');
$usuario = new Usuario;

include_once(DOC_ROOT.'/classes/role.class.php');
$objRole = new Role;

include_once(DOC_ROOT.'/classes/config.class.php');
$config = new Config;

include_once(DOC_ROOT.'/classes/puesto.class.php');
$puesto = new Puesto;


// CLASSES DE SECCION CATALOGOS
include_once(DOC_ROOT.'/classes/producto.class.php');
$producto = new Producto;

include_once(DOC_ROOT.'/classes/sucursal.class.php');
$sucursal = new Sucursal;

include_once(DOC_ROOT.'/classes/imagen.class.php');
$imagen = new Imagen;

include_once(DOC_ROOT.'/classes/cliente.class.php');
$cliente = new Cliente;

include_once(DOC_ROOT.'/classes/municipio.class.php');
$municipio = new Municipio;

include_once(DOC_ROOT.'/classes/colonia.class.php');
$colonia = new Colonia;

include_once(DOC_ROOT.'/classes/pedido.class.php');
$pedido = new Pedido;

include_once(DOC_ROOT.'/classes/encuesta.class.php');
$encuesta = new Encuesta;

include_once(DOC_ROOT.'/classes/class.phpmailer.php');
include_once(DOC_ROOT.'/classes/class.smtp.php');
include_once(DOC_ROOT.'/classes/sendmail.class.php');

include_once(DOC_ROOT.'/libs/pdf/dompdf_config.inc.php');


//include_once(DOC_ROOT.'/libs/pdf/fpdf.php');
include_once(DOC_ROOT.'/libs/pdf/fpdf.php');

 /* pChart library inclusions */ 
 // include_once(DOC_ROOT."/libs/pChart/class/pData.class.php"); 
 // include_once(DOC_ROOT."/libs/pChart/class/pDraw.class.php"); 
 // include_once(DOC_ROOT."/libs/pChart/class/pPie.class.php"); 
 // include_once(DOC_ROOT."/libs/pChart/class/pImage.class.php"); 
 
include_once(DOC_ROOT.'/libs/jpgraph/src/jpgraph.php');
include_once(DOC_ROOT.'/libs/jpgraph/src/jpgraph_line.php');
include_once(DOC_ROOT.'/libs/jpgraph/src/jpgraph_pie.php');
include_once(DOC_ROOT.'/libs/jpgraph/src/jpgraph_bar.php');


$smarty = new Smarty;

$smarty->assign('WEB_ROOT_P',WEB_ROOT_P);
$smarty->assign('DOC_ROOT',DOC_ROOT);
$smarty->assign('WEB_ROOT',WEB_ROOT);
$smarty->assign('WEB_ROOT_IMG',WEB_ROOT_IMG);

$smarty->assign('property', $property);


?>