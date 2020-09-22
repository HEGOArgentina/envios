<?php
 
if ( ! defined( 'WPINC' ) ) {die;}
if ( ! defined( 'ABSPATH' ) ) {exit;}

////////////////////////////// ENVÍO GRATIS DESDE ////////////////////

$envioGratis = 200000;


////////////////////////////// TARIFAS A DOMICILIO REGIONAL	////////////////////
$domicilioTarifaRegional = array(
	1 => 430,
	5 => 520,
	10 => 655,
	15 => 795,
	20 => 995,
	25 => 1155,
	'adicional' => 53
);	
////////////////////////////// TARIFAS A DOMICILIO NACIONAL	////////////////////
$domicilioTarifaNacional = array(
	1 => 595,
	5 => 735,
	10 => 975,
	15 => 1205,
	20 => 1410,
	25 => 1690,
	'adicional' => 68
);
////////////////////////////// TARIFAS A SUCURSAL REGIONAL	////////////////////
$sucursalTarifaRegional = array(
	1 => 430,
	5 => 520,
	10 => 655,
	15 => 795,
	20 => 995,
	25 => 1155,
	'adicional' => 53
);	
////////////////////////////// TARIFAS A SUCURSAL NACIONAL	////////////////////
$sucursalTarifaNacional = array(
	1 => 595,
	5 => 735,
	10 => 975,
	15 => 1205,
	20 => 1410,
	25 => 1690,
	'adicional' => 68
);
////////////////////////////// TARIFAS FEX	////////////////////
$tarifaFlex = array(
	0 => 210,
	1 => 300,
	2 => 560
);	

