<?
session_start();
require_once('../cnx/conexion.php');
conectar();
$hoy=date("Y-m-d H:i:s");
/*****************************************************************************************************************
Accion:Ejecuta todas las operaciones sobre expedientes
Parametros: Vector con lista de parametros segun metodo
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
        	$jsondata['ultimo_id']=mysql_insert_id();
        	$jsondata['numero_expediente'] = $v_datos[0];         	
        }
        echo json_encode($jsondata);		
	}

	function despliega_archivos($parametros,$hoy){
		//eliminar esta asignacion
		$_SESSION['id_expediente']=24;		
		
		$v_datos=explode(",",$parametros);
		$id=$v_datos[0];
		if ($v_datos==0){
			$id=$_SESSION['id_expediente'];
		}
		$numero=$v_datos[1];
		$result=mysql_query("select * from tbl_archivos where id_expediente='".$id."' ");
		if (!$result) {//si da error que me despliegue el error del query       		
       		$jsondata['resultado'] = 'Query invalido: ' . mysql_error() ;
        }else{
        	while ($row=mysql_fetch_object($result)){							
				$arr[] = array('id' => $row->id,
                   				'nombre_archivo' => $row->nombre_archivo,
                   				'id_tipo' => $row->id_tipo,
                   				'fecha_creacion' => $row->fecha_creacion,
                   				'fecha_modificacion' => $row->fecha_modificacion,
        		);
			}	
        }
        echo json_encode($arr);		
	}

	/*******************************************************
	accion="guarda los archivos en la base de datos"
	parametros="nombre del archivo"

	********************************************************/
	function guarda_archivo($parametros,$hoy){
		//eliminar esta linea
		$_SESSION['id_expediente']=24;		
		$v_datos=explode(",",$parametros);
		
		$result=mysql_query("insert into tbl_archivos (id_expediente,nombre_archivo,fecha_creacion,fecha_modificacion,id_tipo,id_usuario,estado)values('".$_SESSION['id_expediente']."','".$v_datos[0]."','".$hoy."','".$hoy."','".$v_datos[1]."','".$_SESSION['usuario']."','"."1"."')");
		if (!$result){
			$jsondata['resultado'] = 'Query invalido: ' . mysql_error() ;
		}else{
			$jsondata['resultado'] = $_SESSION['id_expediente'];			
		}		
		echo json_encode($jsondata);	
	}

}

?>