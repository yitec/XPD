$(document).ready(function(){

	var allFields = $( [] ).add( txt_numero );
  var archivo;

//**********************************cargo el vector de usuarios ****************************************************************/
var availableTags;
    $.ajax({ data: "metodo=autocompleta_clientes",
        type: "POST",
        async: false,
        url: "../operaciones/Clase_Expedientes.php",        
        success: function(data){     
          availableTags =data;      
        }//end succces function
    });//end ajax function  
    availableTags=availableTags.split(",");
    $( "#txt_buscar" ).autocomplete({
      source: availableTags
    });



 
/***************************************Dialog Form Crear Expediente*************************************************************/
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 450,
      width: 350,
      modal: true,
      buttons: {
        "Crear nuevo expediente": function() {
        	var parametros=$("#txt_numero").val()+","+$("#cmb_categoria").val()+","+$("#txt_titulo").val()+","+$("#cmb_cliente").val();
        	$.ajax({ data: "metodo=crea_expedientes&parametros="+parametros,
			type: "POST",
			dataType: "json",
			url: "../operaciones/Clase_Expedientes.php",
			success: function(data){ 
				if (data.resultado!="Success"){
					notificacion("Error","El expediente ya existe o ha sucedido un error","error");					
				}else{
					notificacion("Nuevo Expediente","El Expediente fue guardado exitosamente.","info");
          despliega_header(data.numero_expediente,data.nombre_cliente,data.fecha_creacion,data.fecha_modificacion,data.estado);
					//despliega_archivos(data.ultimo_id,data.numero_expediente);
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

/***************************************Dialog Form Crear archivo*************************************************************/
    $( "#dialog-form-subir" ).dialog({       
      autoOpen: false,
      height: 450,
      width: 350,
      modal: false,
      buttons: {
       Finalizar: function() {
          //$('#txt_descripcion').val()='';
          $('#progress').empty();          
          $( this ).dialog( "close" );
          guarda_archivo();        


      },        
        Cancelar: function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
        
      }
    });
 
    $( "#boton_subir" ).click(function() {
        
        $( "#dialog-form-subir" ).dialog( "open" );
        

    });



/************************************Despliega los archivos de un una lupa seleccionada************************************************************/
/**********************************************
Accion:Despliega el listado de los archivos asignado a un expedientte
Parametros:id del expediente y numero del expediente
Ivocación:Boton upload_file y guard_archivo busca_archivos.
/**********************************************/
$(document).on("click", "img.buscar_numeros", function(){ 
  alert($(this).attr("numero_expediente")); 
});
/*$("p.buscar_numeros").on({
  click: function(){
    alert("entro");
  }});*/
















  

/************************************Despliega Archivos************************************************************/
/**********************************************
Accion:Despliega el listado de los archivos asignado a un expedientte
Parametros:id del expediente y numero del expediente
Ivocación:Boton upload_file y guard_archivo busca_archivos.
/**********************************************/
function despliega_archivos(id,numero){
	var vhtml='';
	var parametros=id+","+numero;
	$.ajax({ data: "metodo=despliega_archivos&parametros="+parametros,
			type: "POST",
			dataType: "json",
			url: "../operaciones/Clase_Expedientes.php",
			success: function(datos){ 
					var dataJson = eval(datos);
            			$("#contenido_archivos").html("");
            			vhtml='<div><table><tr class="subtitulos"><td>Descripcion</td><td>Archivo</td><td id="clientes">Fecha Creacion</td><td id="creacion">Fecha Modificacion</td><td id="actualizacion">Operaciones</td></tr>';
            			for(var i in dataJson){
                			vhtml=vhtml+'<tr><td>'+dataJson[i].descripcion+'</td><td>'+dataJson[i].nombre_archivo+'</td><td>'+dataJson[i].fecha_creacion+'</td><td>'+dataJson[i].fecha_modificacion+'</td><td ><img src="img/edit_icon.png" title="Editar"><img  class="iconos" src="img/download_icon.png" title="Descargar"><img  class="iconos" src="img/delete_icon.png" title="Eliminar"></td></tr>';                	
	                	}
                	vhtml=vhtml+'</table></div>';
					$('#contenido_archivos').append(vhtml);

			} 
	});
}


/************************************Despliega header************************************************************/
/**********************************************
Accion:Despliega el header de un expediente (Numero-Nombre etc)
Parametros:datos del header
Ivocación:Buscar expediente
/**********************************************/
function despliega_header(numero,nombre,creacion,modificacion,estado){
  var vhtml="";
  if(estado==1){
    var est="Activo";
  }else{
    var est="Desactivado";
  }
  $("#header_expediente").html("");
  vhtml='<table><tr class="subtitulos"><td width="200">Expediente</td><td id="clientes">Cliente</td><td id="creacion">Fecha Creación</td><td id="actualizacion">Ultima Actualización</td><td id="status">Status</td></tr><tr><td>'+numero+'</td><td>'+nombre+'</td><td>'+creacion+'</td><td>'+modificacion+'</td><td>'+est+'</td></tr></table>';
  $('#header_expediente').append(vhtml);
}


/************************************Despliega Numeros************************************************************/
/**********************************************
Accion:Despliega los numeros de expedientes pertenecientes a un cliente
Parametros:datos de los numeros
Ivocación:Buscar expediente
/**********************************************/
function despliega_numeros(data){
  var vhtml="";
  var dataJson = eval(data);
  $("#header_expediente").html("");
  vhtml='<table><tr class="subtitulos"><td width="200">Expediente</td><td>Titulo</td><td>Ver</td></tr>';
  for(var i in dataJson){
    vhtml=vhtml+'<tr><td>'+dataJson[i].numero+'</td><td>'+dataJson[i].titulo+'</td><td><img src="img/search.png" class="buscar_numeros" numero_expediente="'+dataJson[i].numero+'"></td>';
  }
  vhtml=vhtml+'<table>';
  $('#header_expediente').append(vhtml);
}

/********************************************Subir archivo*****************************************************************/
/**********************************************
Accion:Sube un archivo al server
Parametros:nombre del archivo a subir
Ivocación:Boton upload file.
/**********************************************/
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        add: function (e, data) {
            $('#progress').html('<div class="resultados">Subiendo</div>');
            //data.context = $('<p/>').text('Uploading...').appendTo('progress');
            data.submit();
        },
        done: function (e, data) {
          
          var dataJson = eval(data);                    
          var dataFile = eval(dataJson.files);
          $('#progress').html('<div class="resultados">Subido'+dataFile[0].name+' </div>');   
          archivo=dataFile[0].name;

        }
    });
});


/********************************************Guarda archivo*****************************************************************/
/**********************************************
Accion:Guarda el detalle del archivo en la base de datos
Parametros:
Ivocación:Funcion subir archivo
/**********************************************/
function guarda_archivo(){
  var parametros=archivo+","+$("#cmb_tipo").val()+","+$("#txt_descripcion").val();
  $.ajax({ data: "metodo=guarda_archivo&parametros="+parametros,
    type: "POST",
    dataType: "json",
    url: "../operaciones/Clase_Expedientes.php",
    success: function (data){
      if (data.resultado>0){
      despliega_archivos(data.resultado,0);
    }else{
      notificacion("Error","Ha sucedido un error","error");
    }


    }

  });


}

/********************************************Buscar expediente*****************************************************************/
/**********************************************
Accion:Busca un expediente por numero o nombre
Parametros:datos del input txt_buscar
Ivocación:click img_biscar
/**********************************************/

$('#btn_buscar').click(function(){
    var parametros=$("#txt_buscar").val()+",";
    $.ajax({ 
    data: "metodo=busca_expediente&parametros="+parametros,
    type: "POST",
    dataType: "json",
    url: "../operaciones/Clase_Expedientes.php",
    success: function (data){
      if (data.id_expediente>0){
        despliega_header(data.numero_expediente,data.nombre_cliente,data.fecha_creacion,data.fecha_modificacion,data.estado);
        despliega_archivos(data.id_expediente,0);
      }else
      {
        despliega_numeros(data);
      }      
    }
    });

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