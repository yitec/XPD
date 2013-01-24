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
        <title>Expedientes</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('menu_superior.php');?>
    		<div class="box_mprincipal">
                <div class="sub_header">
                    <span id="add"><a href="add.php"><img src="img/add.png" title="Crear un expediente."></a></span>
                    <span id="search"><label for="buscar">Buscar:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_buscar" title="Buscar un expediente." value="" /></span>                    
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
                        <td>2-7-2012</td>
                        <td>2-12-2012</td>
                        <td>ACTIVO</td>
                    </tr>
                    </table>            
                    </div>
                    <div class="box_contenidos">   
                    <table>
                    <tr class="subtitulos">                        
                        <td id="archivo">Archivo</td>
                        <td id="creacion">Creacion</td>
                        <td id="actualizacion">Modificacion</td>
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
                        <td>23-1-1998</td>
                        <td>01-7-2010</td>
                        <td><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/download_icon.png" title="Descargar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td>                       
                    </tr>
                    <tr>                        
                        <td>132344-AB</td>
                        <td>SERGIO BARRANTES M</td>
                        <td>2-7-2012</td>
                        <td>2-12-2012</td>                       
                    </tr>
                    <tr>                        
                        <td>132344-AB</td>
                        <td>SERGIO BARRANTES M</td>
                        <td>2-7-2012</td>
                        <td>2-12-2012</td>                       
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

