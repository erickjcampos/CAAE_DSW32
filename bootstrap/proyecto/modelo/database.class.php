<?php
/**
 * Clase que imprelemnta el obj PDO para abrir y cerrar la conexión a la bd
 *
 * @param conn conserva el objeto a la conexión de la base de datos
 * @param error conserva el error que se pusiera generar durante la ejecución del código.
 */
class database{
	public $conn=null;
	public $error=null;
	function __construct(){
		try{
			//
			$this->conn= new PDO("mysql:host=localhost;dbname=ti32;charset=utf8","root",""); 
			//
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Conexión abierta";
		} catch( PDOException $e){
			//			
			$this->error=$e->getMessage()." Line: ".__LINE__."<br>";
		}
	}
	function close(){
		//
		$this->conn=null;
		$this->error="Conexión Cerrada";
	}
}

$conexion=new database();
if($conexion->error){
	echo $conexion->error;
}
$conexion->close();

?>