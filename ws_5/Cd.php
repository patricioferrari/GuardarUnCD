<?php
class Cd
{
	public $id;
	public $interpret;
	public $jahr;
	public $titel;
	
	public static function TraerTodos()
	{
		//return "llego traer todos";


		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		
		$sql = "SELECT id, interpret, jahr, titel
				FROM cds";

		$consulta = $objetoAccesoDato->RetornarConsulta($sql);
		$consulta->execute();

		return $consulta->fetchall();
		
	}
}