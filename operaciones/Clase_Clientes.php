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

	function autocompleta_clientes(){
		$result=mysql_query("select nombre from tbl_clientes");
		while ($row=mysql_fetch_object($result)){
			$vector=$vector.",".utf8_encode($row->nombre); 
		}
		echo $vector;
		mysql_free_result($result);

	}

	
/*******************************************************
	accion="obtiene los cobros de un expediente"
	parametros="nombre del expediente"

********************************************************/

function crea_cliente($parametros,$hoy){
	$v_datos=explode(",",$parametros);	
	$result=mysql_query("insert into tbl_clientes(nombre,cedula,email,id_tipoCliente,tel_cel,tel_fijo,fax,direccion,estado)values('".utf8_encode($v_datos[0])."','".$v_datos[1]."','".$v_datos[2]."','".$v_datos[3]."','".$v_datos[4]."','".$v_datos[5]."','".$v_datos[6]."','".utf8_encode($v_datos[7])."','"."1"."')");
	if (!$result) {//si da error que me despliegue el error del query       		
       		$jsondata['resultado'] = 'Query invalido: ' . mysql_error() ;
        }else{
        	$jsondata['resultado'] = 'Success';
        }
    echo json_encode($jsondata);
}
	
	
function busca_cliente($parametros,$hoy){
	$v_datos=explode(",",$parametros);	
	$result=mysql_query("select * from tbl_clientes where nombre='".$v_datos[0]."'");
	$row=mysql_fetch_object($result);
	if (mysql_num_rows($result)>=1){
		$jsondata['id_cliente']=$row->id;		
		$jsondata['nombre']=utf8_decode($row->nombre);		
		$jsondata['cedula']=$row->cedula;
		$jsondata['correo']=$row->email;		
		$jsondata['fax']=$row->fax;
		$jsondata['direccion']=utf8_decode($row->direccion);
		$jsondata['tel_fijo']=$row->tel_fijo;
		$jsondata['tel_cel']=$row->tel_cel;
		$jsondata['id_tipoCliente']=$row->id_tipoCliente;
		$jsondata['credito']=$row->credito;	
		$jsondata['resultado']="Success";	
	}
	echo json_encode($jsondata);
}

function modifica_cliente($parametros,$hoy){
	$v_datos=explode(",",$parametros);	
	$result=mysql_query("update tbl_clientes set nombre='".utf8_encode($v_datos[1])."',
		cedula='".$v_datos[2]."',
		email='".$v_datos[3]."',
		id_tipoCliente='".$v_datos[4]."',
		tel_cel='".$v_datos[5]."',
		tel_fijo='".$v_datos[6]."',		
		fax='".$v_datos[7]."',
		direccion='".utf8_encode($v_datos[8])."'
		 where id='".$v_datos[0]."'");
	if (!$result) {//si da error que me despliegue el error del query       		
       		$jsondata['resultado'] = 'Query invalido: ' . mysql_error() ;
        }else{
        	$jsondata['resultado'] = 'Success';
        }
    echo json_encode($jsondata);	

}
	

}//end class

?>