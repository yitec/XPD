$(document).ready(function(){

	var allFields = $( [] ).add( txt_numero );
/***************************************Dialog Form*************************************************************/
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 350,
      width: 350,
      modal: true,
      buttons: {
        "Crear nuevo expediente": function() {
        	var parametros=$("#txt_numero").val()+","+$("#cmb_categoria").val();
        	$.ajax({ data: "metodo=crea_expedientes&parametros="+parametros,
			type: "POST",
			dataType: "json",
			url: "../operaciones/Clase_Expedientes.php",
			success: function(data){ 
				if (data.resultado!="Success"){
					notificacion("Error","El expediente ya existe o ha sucedido un error","error");					
				}else{
					notificacion("Nuevo Expediente","El Expediente fue guardado exitosamente.","info");
					despliega_archivos(data.ultimo_id,data.numero_expediente);
				}				
			} 
			});
        	$( this ).dialog( "close" );
        },
        Cancelar: function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
      }
    });
 
    $( "#boton_add" ).click(function() {
        $( "#dialog-form" ).dialog( "open" );
    });
  
/************************************Tool Tip************************************************************/
$( document ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
});

/************************************Notificaciones Jquery************************************************************/
function notificacion(titulo,cuerpo,tipo){
	$.pnotify({
	pnotify_title: titulo,
    pnotify_text: cuerpo,
    pnotify_type: tipo,
    pnotify_hide: true
	});	
}

/************************************Notificaciones Jquery************************************************************/
function despliega_archivos(id,numero){
	var parametros=id+","+numero;
	$.ajax({ data: "metodo=despliega_archivos&parametros="+parametros,
			type: "POST",
			dataType: "json",
			url: "../operaciones/Clase_Expedientes.php",
			success: function(datos){ 
					var dataJson = eval(datos);
            			$("#contenido").empty();
            			$("#contenido").append('<div class="box_contenidos"><table><tr class="subtitulos"><td>Archivo</td><td id="clientes">Fecha Creacion</td><td id="creacion">Fecha Modificacion</td><td id="actualizacion">Operaciones</td></tr>');
            		for(var i in dataJson){
                		$("#contenido").append('<tr><td>'+dataJson[i].nombre_archivo+'</td><td>'+dataJson[i].fecha_creacion+'</td><td>'+dataJson[i].fecha_modificacion+'</td><td ><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/download_icon.png" title="Descargar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td></tr>');
                		//alert(dataJson[i].id + " _ " + dataJson[i].nombre_archivo + " _ " + dataJson[i].id_tipo+ " _ " + dataJson[i].fecha_creacion + " _ " + dataJson[i].fecha_modificacion);
                	}
                	$("#contenido").append('</table></div>');
			} 
	});
}

})// Document ready Final