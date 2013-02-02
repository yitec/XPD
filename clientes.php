<?
session_start();
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
        <title>Clientes</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('menu_superior.php');?>
    		<div class="box_mprincipal">
                <div class="sub_header">
                    <span id="add"><a href="add.php"><img src="img/add.png" title="Crear un cliente"></a></span>
                    <span id="search"><label for="buscar">Buscar:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="inputbox" name="txt_buscar" title="Buscar un cliente." value="" /></span>                    
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
                <div class="sub_footer">Seleccione una opción</div>                
			</div>		
    </body>
<script type="text/javascript" src="includes/jquery-1.9.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>    
<script src="includes/expedientes.js"></script>    
</html>

