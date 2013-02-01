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

/************************************Tool Tip************************************************************/
function notificacion(titulo,cuerpo,tipo){
	$.pnotify({
	pnotify_title: titulo,
    pnotify_text: cuerpo,
    pnotify_type: tipo,
    pnotify_hide: true
	});	
}

})// Document ready Final