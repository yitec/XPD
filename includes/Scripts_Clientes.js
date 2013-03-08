$(document).ready(function(){

	
  var archivo;

//**********************************cargo el vector de usuarios ****************************************************************/
var availableTags;
    $.ajax({ data: "metodo=autocompleta_clientes",
        type: "POST",
        async: false,
        url: "../operaciones/Clase_Clientes.php",        
        success: function(data){     
          availableTags =data;      
        }//end succces function
    });//end ajax function  
    availableTags=availableTags.split(",");
    $( "#txt_buscar" ).autocomplete({
      source: availableTags
    });

/********************************Guardo un nuevo cliente***************************************************************/

$("#btn_guardar").click(function(event){
    
    event.preventDefault(); 
    if($("#txt_correo").val().indexOf('@', 0) == -1 || $("#txt_correo").val().indexOf('.', 0) == -1) {  
          notificacion("Error","El correo debe contener @ y un .","error");          
          return false;  
      }  
  
    
    if($('#opcion').val()==1){      
      var parametros=$("#txt_nombre").val()+","+$("#txt_cedula").val()+","+$("#txt_correo").val()+","+$("#cmb_tipo").val()+","+$("#txt_tel_cel").val()+","+$("#txt_tel_fijo").val()+","+$("#txt_fax").val()+","+$("#txt_direccion").val();
    $.ajax({
        data: "metodo=crea_cliente&parametros="+parametros,
        type: "POST",
        async: false,
        url: "operaciones/Clase_Clientes.php",
                   
    success: function(data){


    if (data.resultado=="Success"){
        notificacion("Nuevo cliente creado","El cliente fue creado!!","info");          
    }else{
        notificacion("Error","Intente de nuevoo","error");                
    }
        
        
    }//end succces function
    });//end ajax function      
    $('#txt_codigo').focus(); 
    }else{

    //modifico los datos del producto
    cadena="opcion=3&txt_nombre="+$('#txt_nombre').val()+"&txt_cedula="+$('#txt_cedula').val()+"&txt_correo="+$('#txt_correo').val()+"&txt_fax="+$('#txt_fax').val()+"&txt_direccion="+$('#txt_direccion').val()+"&txt_tel_fijo="+$('#txt_tel_fijo').val()+"&txt_tel_cel="+$('#txt_tel_cel').val()+"&cmb_tipo="+$('#cmb_tipo').val()+"&txt_consumible="+$('#txt_consumible').val()+"&rnd_credito="+$('input[name=rnd_credito]:checked').attr('value')+"&txt_usuario_buscar="+$('#txt_usuario_buscar').val();
    $.ajax({
        type: "POST",
    async: false,
        url: "operaciones/opr_clientes.php",
        data: cadena,   
    success: function(datos){

        $.pnotify({
          pnotify_title: 'Cliente Modificado',
          pnotify_text: '',
          pnotify_type: 'info',
          pnotify_hide: true
      });   
    }//end succces function
    });//end ajax function      
    }//end if 
    
limpiar();
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


})// Document ready Final