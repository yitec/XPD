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
        <link rel="stylesheet" href="css/jquery.pnotify.default.css" type="text/css" />        
        <title>Cobros</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('menu_superior.php');?>
    		<div class="box_mprincipal">
                <div class="sub_header">
                    <span id="add"><img src="img/add.png" id="boton_add" title="Crear un cobro."></span>
                    <span id="search" class="ui-widget"><label for="buscar">Buscar:</label>&nbsp;&nbsp;<input type="text" class="inputbox" name="txt_buscar" id="txt_buscar" title="Buscar un expediente." value="" /></span>                    
                    <span id="search_icon"><img  src="img/search.png" id="btn_buscar"></span>                    
                </div>                
                    <div class="box_contenidos">   
                    <table>
                    <tr class="subtitulos">                        
                        <td id="archivo">Expediente</td>
                        <td id="creacion">Creación</td>
                        <td id="actualizacion">Monto</td>                        
                    </tr>
                    <? $result=mysql_query("select c.id, e.numero, c.fecha_creacion, c.monto from tbl_cobros c, tbl_expedientes e where c.estado=0 and e.id=c.id_expediente");
                        while ($row=mysql_fetch_object($result)){
                            $total=$total+$row->monto;
                            echo '<tr>                        
                            <td>'.$row->numero.'</td>
                            <td>'.$row->fecha_creacion.'</td>
                            <td>'.$row->monto.'</td>                            
                            </tr>';
                        }
                    ?>                    
                    <tr>                        
                        <td></td>
                        <td><div class="subtitulos">Total:</div></td>
                        <td><div class="subtitulos"><?=$total?></div></td>
                        
                    </tr>                                        
                    </table>            
                    </div>

             
                <div class="sub_footer">Seleccione una opción</div>                
			</div>		
        <!-- ---------------------------------------------Ventana Modal Crear Cobros-------------------------------------------------------- -->
        <div id="dialog-form" title="Crear nuevo cobro">
        <form>
        <fieldset>
            <div class="separacion"><label for="titulo" class="labels">Cliente</label></div>
            <div class="separacion">
            <select name="cmb_cliente" id="cmb_cliente">
                <option selected="selected">Seleccione</option>
            <?
            $result=mysql_query("select * from tbl_clientes where estado=1  order by nombre");
            while($row=mysql_fetch_object($result)){
                echo '<option value="'.$row->id.'">'.utf8_encode($row->nombre).'</option>';
            }
            ?>
            </select>
            </div>    
            <div class="separacion"><label for="titulo" class="labels">Expediente</label></div>
            <div class="separacion">
            <select name="cmb_cliente" id="cmb_expediente"></select>
            <div class="separacion"><label for="concepto" class="labels">Concepto de:</label></div>
            <div class="separacion"><input type="text" name="txt_concepto" id="txt_concepto" class="inputbox_peq" /></div>
            <div class="separacion"><label for="monto" class="labels">Monto</label></div>
            <div class="separacion"><input type="text" name="txt_monto" id="txt_monto" class="inputbox_peq" /></div>                

        </fieldset>
        </form>
        </div>        
    </body>
<script src="includes/jquery-1.9.0.min.js"type="text/javascript" ></script>   
<script src="includes/ui/jquery-ui.js"></script> 
<script src="includes/Scripts_Cobros.js"type="text/javascript" ></script>
<script src="includes/jquery.pnotify.js" type="text/javascript"></script> 
<script src="includes/vendor/jquery.ui.widget.js"></script>
<script src="includes/jquery.iframe-transport.js"></script>
<script src="includes/jquery.fileupload.js"></script>
</html>

