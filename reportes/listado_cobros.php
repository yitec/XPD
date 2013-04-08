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
        <title>Total Cobros</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                              
    		<div class="box_mprincipal">
                <div class="sub_header">
                </div>                     
                <h2>Listado Cobros</h2>                   
                <div class="box_contenidos">   
                <div align="center">    
                    <table class="punteado">
                    <tr class="subtitulos">                        
                        <td id="archivo">Expediente</td>
                        <td id="creacion">Creación</td>
                        <td id="actualizacion">Monto</td>                        
                    </tr>
                    <? $result=mysql_query("select c.id, e.numero, c.fecha_creacion, c.monto from tbl_cobros c, tbl_expedientes e where c.estado=0 and e.id=c.id_expediente order by c.fecha_creacion");
                        while ($row=mysql_fetch_object($result)){
                            $total=$total+$row->monto;
                            echo '<tr>                        
                            <td>'.$row->numero.'</td>
                            <td>'.$row->fecha_creacion.'</td>
                            <td>'.$row->monto.'</td>                            
                            </tr>';
                        }
                    ?>                                        
                    </table>            
                    <table ><tr class="subtitulos"><td width="400">Total</td></td><td width="100"><?=number_format($total)?></td></tr></table>                    
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

