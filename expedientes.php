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
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' type='text/css' />
        <link rel="stylesheet" href="includes/themes/base/jquery-ui-1.10.0.custom.css" />
        <link rel="stylesheet" href="css/jquery.pnotify.default.css" type="text/css" />

        <title>Expedientes</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('menu_superior.php');?>
    		<div class="box_mprincipal">
                <div class="sub_header">
                    <span id="add" ><img class="pointer" src="img/add.png" id="boton_add" title="Crear un expediente."></span>
                    <span id="boton_subir"><input  value="Subir Archivo" title="Subir Archivo."  name="submit" id="boton_subir" type="image"  src="img/upload.png" /></span>
                    <span id="search" class="ui-widget"><label for="buscar">Buscar:</label>&nbsp;&nbsp;<input type="text" class="inputbox" name="txt_buscar" id="txt_buscar" title="Buscar un expediente." value="" /></span>                    
                    <span id="search_icon"><img class="pointer"  id="btn_buscar"src="img/search.png"></span>                    
                </div>                
                    <div  class="box_contenidos">   
                    
                    </div>
                    
                    
                    
             
                <div class="sub_footer"><p class="buscar_numeros">Seleccione una opción</p></div>                
			</div>
<!-- ---------------------------------------------Ventana Modal Crear Expediente-------------------------------------------------------- -->
<div id="dialog-form" title="Crear nuevo expediente">
  <form>
  <fieldset>
    <div class="separacion"><label for="numero" class="labels">Numero Expediente</label></div>
    <div class="separacion"><input type="text" name="txt_numero" id="txt_numero" class="inputbox_peq" /></div>
    <div class="separacion"><label for="titulo" class="labels">Titulo Expediente</label></div>
    <div class="separacion"><input type="text" name="txt_titulo" id="txt_titulo" class="inputbox_peq" /></div>    
    <div class="separacion"><label for="titulo" class="labels">Cliente</label></div>
    <div class="separacion">
    <select name="cmb_cliente" id="cmb_cliente">
    <?
    $result=mysql_query("select * from tbl_clientes where estado=1");
    while($row=mysql_fetch_object($result)){
        echo '<option value="'.$row->id.'">'.utf8_encode($row->nombre).'</option>';
    }
    ?>
    </select>
    </div>
    <div class="separacion"><label for="tipo" class="labels">Tipo Expediente</label></div>    
    <div class="separacion">
    <select name="cmb_categoria" id="cmb_categoria">
    <?
    $result=mysql_query("select * from tbl_catExpedientes where estado=1");
    while($row=mysql_fetch_object($result)){
        echo '<option value="'.$row->id.'">'.utf8_encode($row->nombre).'</option>';
    }
    ?>
    </select>
    </div>

  </fieldset>
  </form>
</div>
<!-- ---------------------------------------------Ventana Modal Archivo-------------------------------------------------------- -->                  
  <div id="dialog-form-subir" title="Subir un archivo">
  <p class="validateTips">Seleccione el archivo.</p>
    <input id="fileupload" type="file" name="files[]" data-url="server/php/" multiple>
    <div id="progress"></div>
    <div class="separacion"><span>Descripci&oacute;n Archivo</span></div>
    <div class="separacion"><span><input type="text" id="txt_descripcion" class="inputbox"></span></div>
    <div class="separacion"><span>Tipo</span></div>
    <div class="separacion"><span><select id="cmb_tipo"class="combo"><option value="1">Texto</option><option value="2">Pdf</option><option value="3">video</option><option value="4">Imagen</option></span></div>
  </div>


    </body>
<script src="includes/jquery-1.9.0.min.js"type="text/javascript" ></script>   
<script src="includes/ui/jquery-ui.js"></script> 
<script src="includes/Scripts_Expedientes.js"type="text/javascript" ></script>
<script src="includes/jquery.pnotify.js" type="text/javascript"></script> 
<script src="includes/vendor/jquery.ui.widget.js"></script>
<script src="includes/jquery.iframe-transport.js"></script>
<script src="includes/jquery.fileupload.js"></script>
</html>

