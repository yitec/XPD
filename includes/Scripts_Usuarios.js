$(document).ready(function(){

	
$(function() {
    $( "#txt_fecha" ).datepicker();
  }); 

//**********************************cargo el vector de usuarios ****************************************************************/
var availableTags;
    $.ajax({ data: "metodo=autocompleta_usuarios",
        type: "POST",
        async: false,
        url: "../operaciones/Clase_Usuarios.php",        
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
    if($("#txt_nombre").val()==""||$("#txt_apellidos").val()==""||$("#txt_usuario").val()==""||$("#txt_pass").val()==""){
        notificacion("Error","Hay campos vacios Verifique","error");                
      return;
    }
  
    
    if($('#opcion').val()==1){      
      var parametros=$("#txt_nombre").val()+","+$("#txt_apellidos").val()+","+$("#txt_cedula").val()+","+$("#txt_usuario").val()+","+$("#txt_pass").val()+","+$("#txt_fecha").val();
    $.ajax({
        data: "metodo=crea_usuario&parametros="+parametros,
        type: "POST",
        dataType: "json",        
        url: "operaciones/Clase_Usuarios.php",
                   
    success: function(data){     
    if (data.resultado=="Success"){
        notificacion("Nuevo usuario creado","El usuario fue creado!!","info");          
    }else{
        notificacion("Error","Intente de nuevo","error");                
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



/***************************************Limpiar todos los campos***************************************/
function limpiar(){
      $('#txt_nombre').attr('value','');
      $('#txt_cedula').attr('value','');
      $('#txt_correo').attr('value','');
      $('#txt_tel_cel').attr('value','');
      $('#txt_tel_fijo').attr('value','');
      $('#txt_fax').attr('value','');
      $('#txt_direccion').attr('value','');      
      $('#txt_usuario_buscar').attr('value','');            
      $('#opcion').attr('value','1'); 
}




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