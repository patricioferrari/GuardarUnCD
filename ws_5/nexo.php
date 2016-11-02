<?php 
	//require_once('.ws_5/SERVIDOR/lib/nusoap.php');
	require_once("AccesoDatos.php");
	require_once("Cd.php");


				$cd = new Cd();

				$cd->cantante=$_POST['cantante'];
				$cd->titulo=$_POST['titulo'];
				$cd->año=$_POST['anio'];
				//var_dump($cd);
				echo Cd::InsertarCd($cd);

	/*$host = 'http://localhost:8080/EjercicioGuardarCD/ws_5/SERVIDOR/ws.php';

	$client = new nusoap_client($host . '?wsdl');

	$err = $client->getError();

	if($err)
	{
		echo("Error cliente web service");

	}*/

				
	/*
	$queHago = $_POST('queHacer');

	switch ($queHago) {
		case 'GuardarCd':

				$cd = new Cd();

				$cd->cantante=$_POST['cantante'];
				$cd->titulo=$_POST['titulo'];
				$cd->año=$_POST['anio'];

				//Cd::InsertarCd($cd);
				
			break;
		
		default:
			
			break;
	}
	*/
 ?>