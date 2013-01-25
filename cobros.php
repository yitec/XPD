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
        <title>Cobros</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('menu_superior.php');?>
    		<div class="box_mprincipal">
                <div class="sub_header">
                    <span id="add"><a href="add.php"><img src="img/add.png" title="Crear un cobro."></a></span>
                    <span id="search"><label for="buscar">Buscar:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"class="inputbox" name="txt_buscar" title="Buscar un cobro de expediente." value="" /></span>                    
                    <span id="search_icon"><img  src="img/search.png"></span>                    
                </div>                
                    <div class="box_contenidos">   
                    <table>
                    <tr class="subtitulos">                        
                        <td id="archivo">Expediente</td>
                        <td id="creacion">Creación</td>
                        <td id="actualizacion">Monto</td>
                        <td id="acciones">Operaciones</td>                        
                    </tr>
                    <tr>                        
                        <td>187069-AB</td>
                        <td>2-8-2010</td>
                        <td>85.000,00</td>
                        <td ><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/pagar.png" title="Pagar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td>                       
                    </tr>
                    <tr>                        
                        <td>8455466-DE</td>
                        <td>23-1-1998</td>
                        <td>55.000,00</td>
                        <td><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/pagar.png" title="Pagar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td>                       
                    </tr>
                    <tr>                        
                        <td>8455466-JR</td>
                        <td>23-1-1990</td>
                        <td>65.000,00</td>
                        <td><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/pagar.png" title="Pagar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td>                       
                    </tr>                    
                    <tr>                        
                        <td></td>
                        <td><div class="subtitulos">Total:</div></td>
                        <td><div class="subtitulos">205.000,00</div></td>
                        <td></td>                       
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

