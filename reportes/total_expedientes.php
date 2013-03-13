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
                <h2>Total Expedientes</h2>                   
                <div class="box_contenidos">   
                <div align="center">    
                    <table border="1">
                        <tr>
                            <td class="subtitulos">Total Expedientes Activos</td>
                            <td class="subtitulos">Total Expedientes Inactivos</td>                            
                        </tr>
                        <?  $result=mysql_query("select COUNT(numero) as total from tbl_expedientes where estado=1");
                            $r1=mysql_fetch_object($result);
                            $result=mysql_query("select COUNT(numero) as total from tbl_expedientes where estado=0");
                            $r2=mysql_fetch_object($result);                            
                        ?>
                        <tr>
                            <td><div align="center" class="resultados"><?=$r1->total?></div></td>
                            <td><div align="center" class="resultados"><?=$r2->total?></div></td>
                            
                        </tr>
                    </table>
                </div>    
                </div>                
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

