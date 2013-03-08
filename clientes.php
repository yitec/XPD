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
        <link rel ="stylesheet" href="css/clientes.css" type="text/css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="includes/themes/base/jquery-ui-1.10.0.custom.css" />
        <link rel="stylesheet" href="css/jquery.pnotify.default.css" type="text/css" />                
        <title>Clientes</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('menu_superior.php');?>
    		<div class="box_mprincipal">
                <div class="sub_header">
                    <span id="add"><a href="add.php"><img src="img/add.png" title="Crear un cliente"></a></span>
                    <span id="search" class="ui-widget"><label for="buscar">Buscar:</label>&nbsp;&nbsp;<input type="text" class="inputbox" name="txt_buscar" id="txt_buscar" title="Buscar un cliente." value="" /></span>
                    <span id="search_icon"><img  src="img/search.png"></span>                    
                </div> 
                    <h2>Clientes</h2>               
                    <div class="box_contenidos">   
                    <table>
                        <tr>
                            <td>Nombre</td>
                            <td>C&eacute;dula</td>
                            <td>E-mail</td>
                        </tr>
                        <tr>
                            <td><input id="txt_nombre" class="inputbox" type="text" /></td>
                            <td><input id="txt_cedula" class="inputbox" type="text" /></td>
                            <td><input id="txt_correo" class="inputbox" type="text" /></td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td>Tel&eacute;fono Cel</td>
                            <td>Tel&eacute;fono Fijo</td>
                        </tr>
                        <tr>
                            <td>
                            <select name="cmb_tipo" id="cmb_tipo" class="combos">
                            <option>Particular</option>
                            <option>Convenio</option>
                            <option>Exonerado</option>
                            </select>
                            </td>
                            <td><input id="txt_tel_cel" class="inputbox" type="text" /></td>
                            <td><input id="txt_tel_fijo" class="inputbox" type="text" /></td>
                        </tr>
                        <tr>
                        <td>Fax</td>
                        <td>Direcci&oacute;n</td>
                        <td>Credito</td>
                        </tr>
                        <tr>
                            <td><input id="txt_fax" class="inputbox" type="text" /></td>
                            <td><input  id="txt_direccion"  class="inputbox" type="text" /><input id="opcion" name="opcion" type="hidden" value="1" /></td>
                            <td><input type="checkbox" name="rnd_credito" value="1" id="rnd_credito_1" />
                            </span></td>
                        </tr>
                        
                    </table>
                    </div>
                    <div align="center"><input type="hidden" id="opcion" name="opcion" value="1"><input type="submit" value="Guardar" id="btn_guardar" name="submit" class="submit" /></div>
                <div class="sub_footer">Seleccione una opción</div>                
			</div>		
    </body>
<script src="includes/jquery-1.9.0.min.js"type="text/javascript" ></script>   
<script src="includes/ui/jquery-ui.js"></script> 
<script src="includes/Scripts_Clientes.js"type="text/javascript" ></script>
<script src="includes/jquery.pnotify.js" type="text/javascript"></script> 
<script src="includes/vendor/jquery.ui.widget.js"></script>
<script src="includes/jquery.iframe-transport.js"></script>
<script src="includes/jquery.fileupload.js"></script>
</html>

