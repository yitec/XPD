<?
session_start();
require_once('cnx/conexion.php');
conectar();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel ="stylesheet" href="css/general.css" type="text/css" />
        <link rel ="stylesheet" href="css/expedientes.css" type="text/css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="includes/themes/base/jquery-ui-1.10.0.custom.css" />
        <link href="css/jquery.pnotify.default.css" rel="stylesheet" type="text/css" />
        <title>Expedientes</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('menu_superior.php');?>
    		<div class="box_mprincipal">
                <div class="sub_header">
                    <span id="add"><img src="img/add.png" id="boton_add" title="Crear un expediente."></span>
                    <span id="search"><label for="buscar">Buscar:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="inputbox" name="txt_buscar" title="Buscar un expediente." value="" /></span>                    
                    <span id="search_icon"><img  src="img/search.png"></span>                    
                </div>                
                    <div class="box_contenidos">   
                    <table>
                    <tr class="subtitulos">                        
                        <td width="200">Expediente</td>
                        <td id="clientes">Cliente</td>
                        <td id="creacion">Fecha Creación</td>
                        <td id="actualizacion">Ultima Actualización</td>
                        <td id="status">Status</td>
                    </tr>
                    <tr>                        
                        <td>132344-AB</td>
                        <td>SERGIO BARRANTES M</td>
                        <td>2-7-2008</td>
                        <td>23-11-2012</td>
                        <td>ACTIVO</td>
                    </tr>
                    </table>            
                    </div>
                    <div class="box_contenidos">   
                    <table>
                    <tr class="subtitulos">                        
                        <td id="archivo">Archivo</td>
                        <td id="creacion">Creación</td>
                        <td id="actualizacion">Modificación</td>
                        <td id="acciones">Operaciones</td>                        
                    </tr>
                    <tr>                        
                        <td>Acta aclaratoria de morosidad judicial</td>
                        <td>2-8-2010</td>
                        <td>2-8-2012</td>
                        <td ><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/download_icon.png" title="Descargar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td>                       
                    </tr>
                    <tr>                        
                        <td>Resolución Judicial Final de conciliación</td>
                        <td>23-1-2009</td>
                        <td>01-7-2010</td>
                        <td><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/download_icon.png" title="Descargar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td>                       
                    </tr>
                    <tr>                        
                        <td>Aclaracion Juridica</td>
                        <td>23-1-2005</td>
                        <td>01-7-2016</td>
                        <td><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/download_icon.png" title="Descargar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td>
                    </tr>
                    <tr>                        
                        <td>Acta vredicto final</td>
                        <td>23-11-2012</td>
                        <td>23-11-2012</td>
                        <td><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/download_icon.png" title="Descargar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td>
                    </tr>
                    </table>            
                    </div>
                    <div id="contenido">
                    </div>    

             
                <div class="sub_footer">Seleccione una opción</div>                
			</div>
<!-- ---------------------------------------------Ventana Modal-------------------------------------------------------- -->
<div id="dialog-form" title="Crear nuevo expediente">
  <p class="validateTips">Ingrese la información.</p>
 
  <form>
  <fieldset>
    <div class="separacion"><label for="numero" class="labels">Numero Expediente</label></div>
    <div class="separacion"><input type="text" name="txt_numero" id="txt_numero" class="inputbox_peq" /></div>
    <div class="separacion"><label for="tipo" class="labels">Tipo Expediente</label></div>    
    <div class="separacion">
    <select name="cmb_categoria" id="cmb_categoria">
    <?
    $result=mysql_query("select * from tbl_catExpedientes where estado=1");
    while($row=mysql_fetch_object($result)){
        echo '<option value="'.$row->id.'">'.$row->nombre.'</option>';
    }
    ?>
    </select>
    </div>
  </fieldset>
  </form>
</div>

    </body>
<script type="text/javascript" src="includes/jquery-1.9.0.min.js"></script>   
<script src="includes/ui/jquery-ui.js"></script> 
<script type="text/javascript" src="includes/Scripts_Expedientes.js"></script>
<script src="includes/jquery.pnotify.js" type="text/javascript"></script> 
</html>

