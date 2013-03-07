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
		$titulo=$v_datos[2];
		$cliente=$v_datos[3];
		$result=mysql_query("insert into tbl_expedientes (numero,id_tipoExpediente,fecha_creacion,fecha_modificacion,titulo,id_cliente,id_usuario,estado) values('".$numero."','".$tipo."','".$hoy."','".$hoy."','".$titulo."','".$cliente."','".$_SESSION['usuario']."','"."1"."')");
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
		$result=mysql_query("select * from tbl_archivos where id_expediente='".$id."' order by fecha_creacion DESC ");
		if (!$result) {//si da error que me despliegue el error del query       		
       		$jsondata['resultado'] = 'Query invalido: ' . mysql_error() ;
        }else{
        	while ($row=mysql_fetch_object($result)){							
				$arr[] = array('id' => $row->id,
								'descripcion' => $row->descripcion,
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
		
		$result=mysql_query("insert into tbl_archivos (id_expediente,nombre_archivo,descripcion,fecha_creacion,fecha_modificacion,id_tipo,id_usuario,estado)values('".$_SESSION['id_expediente']."','".$v_datos[0]."','".$v_datos[2]."','".$hoy."','".$hoy."','".$v_datos[1]."','".$_SESSION['usuario']."','"."1"."')");
		if (!$result){
			$jsondata['resultado'] = 'Query invalido: ' . mysql_error() ;
		}else{
			$jsondata['resultado'] = $_SESSION['id_expediente'];			
		}		
		echo json_encode($jsondata);	
	}

	/*******************************************************
	accion="busca un expediente"
	parametros="nombre del valor a buscar"

	********************************************************/
	function busca_expediente($parametros,$hoy){
		//eliminar esta linea
		$_SESSION['id_expediente']=24;		
		$v_datos=explode(",",$parametros);
		//busco si lo que me estan dando es un numero de expediente
		$result=mysql_query("select e.id,e.numero,e.id_tipoExpediente,e.fecha_creacion, e.fecha_modificacion,e.id_cliente,e.estado,c.nombre from tbl_expedientes e,tbl_clientes c where e.numero='".$v_datos[0]."' and c.id=e.id_cliente");
		if (mysql_num_rows($result)>0){
			$row=mysql_fetch_object($result);
			$jsondata['id_expediente']=$row->id;
			$jsondata['numero_expediente']=$row->numero;
			$jsondata['id_tipoExpediente']=$row->id_tipoExpediente;
			$jsondata['fecha_creacion']=$row->fecha_creacion;
			$jsondata['fecha_modificacion']=$row->fecha_modificacion;
			$jsondata['id_cliente']=$row->id_cliente;
			$jsondata['nombre_cliente']=$row->nombre;
			$jsondata['estado']=$row->estado;
			$jsondata['resultado']="Success";
			echo json_encode($jsondata);	
		}else{
			//busco los expedientes ligados a ese nombre de cliente
			$result=mysql_query("select id from tbl_clientes where nombre='".$v_datos[0]."'");
			if (mysql_num_rows($result)>0){
				$row=mysql_fetch_object($result);
				$result2=mysql_query("select numero,titulo from tbl_expedientes where id_cliente='".$row->id."'");
				while ($r1=mysql_fetch_object($result2)) {
					$arr[] = array('id' => $r1->id,
								'numero' => $r1->numero,
								'titulo' => $r1->titulo,
                   	);					
				}
			echo json_encode($arr);				
			}			

		}
		
	}

}

?>