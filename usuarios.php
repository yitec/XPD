<?
session_start();
include ('cnx/conexion.php');
require_once('cnx/session_activa.php');
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
        <title>Usuarios</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('menu_superior.php');?>
    		<div class="box_mprincipal">
                <div class="sub_header">
                    <span id="add"></span>
                    <span id="search" class="ui-widget"><label for="buscar">Buscar:</label>&nbsp;&nbsp;<input type="text" class="inputbox" name="txt_buscar" id="txt_buscar" title="Buscar un usuario." value="" /></span>
                    <span id="search_icon"><img  src="img/search.png"></span>                    
                </div> 
                    <h2>Usuarios</h2>               
                    <div class="box_contenidos">   
                        <table>
                        <tr>
                            <td class="Arial14Morado">Nombre</td>
                            <td class="Arial14Morado">Apellidos</td> 
                            <td class="Arial14Morado">C&eacute;dula</td>               
                        </tr>
                        <tr>
                            <td height="34" class="Arial14Negro"><input name="txt_nombre" id="txt_nombre" class="inputbox" type="text" /><input id="opcion" name="opcion" type="hidden" value="1" /></td>
                            <td class="Arial14Negro"><input name="txt_apellidos" id="txt_apellidos" class="inputbox" type="text" /></td>        
                            <td class="Arial14Negro"><input name="txt_cedula" id="txt_cedula" class="inputbox" type="text" /></td>                
                        </tr>
                        <tr>
                            <td class="Arial14Morado">Usuario</td>
                            <td class="Arial14Morado">Password</td> 
                            <td class="Arial14Morado">Fecha Caducidad</td>               
                        </tr>
                        <tr>
                            <td class="Arial14Negro"><input name="txt_usuario" id="txt_usuario" class="inputbox" type="text" /></td>
                            <td class="Arial14Negro"><input name="txt_pass" id="txt_pass" class="inputbox" type="password" /></td>        
                            <td class="Arial14Negro"><input name="txt_fecha" id="txt_fecha" class="inputbox" type="text" /></td>        
                        </tr>    
                        </table>                    
                    </div>
                    <h2>Permisos</h2>               
                    <div class="box_contenidos">   
                        <table>
                        <tr>
                            <td><input class="ck" name="chk_agenda" id="chk_agenda" type="checkbox" value="" />Agenda</td>
                            <td><input class="ck" name="chk_agenda" id="chk_agenda" type="checkbox" value="" />Expedientes</td>
                            <td><input class="ck" name="chk_agenda" id="chk_agenda" type="checkbox" value="" />Reportes</td>
                            <td><input class="ck" name="chk_agenda" id="chk_agenda" type="checkbox" value="" />Cobros</td>
                            <td><input class="ck" name="chk_agenda" id="chk_agenda" type="checkbox" value="" />Usuarios</td>
                            <td><input class="ck" name="chk_agenda" id="chk_agenda" type="checkbox" value="" />Clientes</td>                            
                        </tr>                        
                        </table>  
                    </div>                  
                    <h2>Reportes</h2>               
                    <div class="box_contenidos">   
                        <table>
                        <tr>        
                            <? 
                            $cont=1;
                            $result=mysql_query("select * from tbl_reportes where estado='"."1"."'");
                            while ($row=mysql_fetch_assoc($result))
                            {   
                            $numero=4;
                            $res = ($cont % $numero);
                            if ($res==0){                            
                                echo '<td><input type="checkbox" class="rp" onclick="agregaReporte('.$row['id'].')" name="CheckboxGroupReportes" value="'.$row['id'].'" id="CheckboxGroupReportes_'.$cont.'" />'.utf8_encode($row['nombre']).'</td></tr><tr>';
                                                            }else{
                                
                                echo '<td><input type="checkbox" class="rp" onclick="agregaReporte('.$row['id'].')" name="CheckboxGroupReportes" value="'.$row['id'].'" id="CheckboxGroupReportes_'.$cont.'" />'.utf8_encode($row['nombre']).'</td>';
                            }
                            ?>            
                            <?
                            $cont++;
                            }//end while
                            ?>
                       </tr>                        
                        </table>                        
                    </div>
                    <div align="center"><input type="hidden" id="opcion" name="opcion" value="1"><input type="submit" value="Guardar" id="btn_guardar" name="submit" class="submit" /></div>
                <div class="sub_footer">Seleccione una opción</div>                
			</div>		
    </body>
<script src="includes/jquery-1.9.0.min.js"type="text/javascript" ></script>   
<script src="includes/ui/jquery-ui.js"></script> 
<script src="includes/Scripts_Usuarios.js"type="text/javascript" ></script>
<script src="includes/jquery.pnotify.js" type="text/javascript"></script> 
<script src="includes/vendor/jquery.ui.widget.js"></script>
<script src="includes/jquery.iframe-transport.js"></script>
<script src="includes/jquery.fileupload.js"></script>
</html>

