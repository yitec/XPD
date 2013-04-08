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
        <title>Menú Reportes</title>
    </head>
    <body >
    		<div id="barra_principal"></div>                  
            <?include ('../menu_superior_reportes.php');?>            
    		<div class="box_mprincipal">
                <div class="sub_header">
                </div>                     
                    <div class="box_reportes">  
                    <h2>Reportes</h2> 
                    <?
                    $result=mysql_query("select * from tbl_reportes where estado='"."1"."'");
                    while($row=mysql_fetch_assoc($result)){
                    if(in_array($row['id'],$_SESSION['reportes'])){    
                            echo '<div class="centrado"><img src="../img/flecha.png"><a href="'.$row['link'].'" target="_blank"><p class="cnt_superior">'.utf8_encode($row['nombre']).'</p></a></div>';
                    }
                    }//end while
                    ?>
                    </div>
                <div class="sub_footer">Seleccione una opción</div>                
			</div>		
    </body>
<script type="text/javascript" src="includes/jquery-1.9.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>    
<script src="includes/expedientes.js"></script>    
</html>

