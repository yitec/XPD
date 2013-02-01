<?
session_start();
require_once('../cnx/conexion.php');
conectar();
$hoy=date("Y-m-d H:i:s");
/*****************************************************************************************************************
Accion:Ejecuta todas las operaciones sobre expedientes
Parmentros: Vector con lista de parametros segun metodo
/****************************************************************************************************************/

$metodo=$_POST['metodo'];
$exp = new Expedientes;
$exp->$metodo($parametros,$hoy);

class Expedientes{
	
	function crea_expedientes($parametros,$hoy){
		$v_datos=explode(",",$parametros);
		$numero=$v_datos[0];
		$tipo=$v_datos[1];
		$result=mysql_query("insert into tbl_expedientes (numero,id_tipoExpediente,fecha_creacion,fecha_modificacion,id_usuario,estado) values('".$numero."','".$tipo."','".$hoy."','".$hoy."','".$_SESSION['usuario']."','"."1"."')");
		if (!$result) {//si da error que me despliegue el error del query       		
       		$jsondata['resultado'] = 'Query invalido: ' . mysql_error() ;
        }else{
        	$jsondata['resultado'] = "Success";         	
        }
        echo json_encode($jsondata);
		
	}

}

?>