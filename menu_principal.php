<?
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel ="stylesheet" href="css/general.css" type="text/css" />       
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
        <title>Menu Principal</title>
    </head>
    <body >
    		<h4>Usuario=<?=$_SESSION['nombre_usuario'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salir&nbsp;&nbsp;&nbsp;</h1>        	    	
    		<div class="box_mprincipal">
                <div id="centrado_menu">
        	       <div class="navi1">
                        <ul>
                        <li class="sm1"><a href="agenda.html"></a></li>
                        <li class="sm2"><a href="expedientes.php"></a></li>
                        <li class="sm3"><a href="URL_enlace3"></a></li>
                        <li class="sm4"><a href="URL_enlace4"></a></li>
                        <li class="sm5"><a href="URL_enlace5"></a></li>
                        <li class="sm6"><a href="URL_enlace6"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="sub_footer">Seleccione una opción</div>                
			</div>		
    </body>
</html>

