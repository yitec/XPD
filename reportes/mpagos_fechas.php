<?
session_start();
include('../cnx/conexion.php');
conectar();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel ="stylesheet" href="../css/general.css" type="text/css" />
        <link rel ="stylesheet" href="../css/reportes.css" type="text/css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
        <title>Clientes</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('../menu_superior.php');?>            
    		<div class="box_mprincipal">
                <div class="sub_header">
                </div>                     
                <h2>Pagos entre fechas</h2>                   
                <div class="box_contenidos">   
                    <table>
                        <tr>
                            <td>Fecha Inicial</td>
                            <td>Fecha Final</td>
                            
                            
                        </tr>
                        <tr>
                            <td><input id="txt_fechaini" class="inputbox" type="text" /></td>
                            <td><input id="txt_fechafin" class="inputbox" type="text" /></td>
                            
                        </tr>
                    </table>
                </div>
                <div align="center"><input type="hidden" id="opcion" name="opcion" value="1"><input type="submit" value="Generar" id="btn_guardar" name="submit" class="submit" /></div>
                <div class="sub_footer">Seleccione una opción</div>                
			</div>		
    </body>
<script src="../includes/jquery-1.9.0.min.js"type="text/javascript" ></script>   
<script src="../includes/ui/jquery-ui.js"></script> 
<script src="../includes/Scripts_Reportes.js"type="text/javascript" ></script>
<script src="../includes/jquery.pnotify.js" type="text/javascript"></script> 
<script src="../includes/vendor/jquery.ui.widget.js"></script>
<script src="../includes/jquery.iframe-transport.js"></script>
<script src="../includes/jquery.fileupload.js"></script>
</html>

