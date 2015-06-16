$(document).ready(function(){
    //prueba();
    add_remove();
    iniciar();
    cambiandoAtributos();
    altas();
    bajas();
    cambios();
    getData();
    buscar();
});

function iniciar(){
  $("#iniciar_sesion").on('click', function(){
  	var dataPost = {
  		usuario: $("#usuario").val().trim(),
  		contraseña: $("#contraseña").val().trim()
  	};
  	$.ajax({
  		type: 'POST',
  		url: 'checklogin.php',
  		data: dataPost,
  		dataType: 'json'
  	})
  	.success(function(data){
  	   if( data.result == 0 )
          alert("Usuario No registrado");
       else
          location.href = "menu.php";
  	})
  	.error(function(data, error){
  		alert('La peticion no se completo por: ' + error);
  	});

  });
}

function cambiandoAtributos(){
    $("#opcionCambio").change( function (){
        if($("#opcionCambio option:selected").text() == "Id"){
            $("#modi").attr("name", "Sid");
            $("#modi").attr("placeholder","id");
        }
        if($("#opcionCambio option:selected").text() == "Nombre"){
            $("#modi").attr("name", "Snombre");
            $("#modi").attr("placeholder","Nombre");
        }
        if($("#opcionCambio option:selected").text() == "Apellido"){
            $("#modi").attr("name", "Sapellido");
            $("#modi").attr("placeholder","Apellido");
        }
        if($("#opcionCambio option:selected").text() == "Nickname"){
            $("#modi").attr("name", "snickname");
            $("#modi").attr("placeholder","Nickname");
        }
        if($("#opcionCambio option:selected").text() == "Edad"){
            $("#modi").attr("name", "sedad");
            $("#modi").attr("placeholder","Edad");
        }
        if($("#opcionCambio option:selected").text() == "E-mail"){
            $("#modi").attr("name", "semail");
            $("#modi").attr("placeholder","E-mail");
        }
        if($("#opcionCambio option:selected").text() == "Contrasena"){
            $("#modi").attr("name", "scontraseña");
            $("#modi").attr("placeholder","Contrasena");
        }
        if($("#opcionCambio option:selected").text() == "Telefono"){
            $("#modi").attr("name", "stelefono");
            $("#modi").attr("placeholder","Telefono");
        }
        if($("#opcionCambio option:selected").text() == "Tipo de usuario"){
            $("#modi").attr("name", "stipousuario");
            $("#modi").attr("placeholder","Tipo de usuario");
        }
    });
}


function altas(){

      $("#registrar").on('click', function(){
      	var dataPost = {
      		id: $("#id1").val().trim(),
      		nombre: $("#nombre1").val().trim(),
          apellido:  $("#apellido1").val().trim(),
          nickname:  $("#nickname1").val().trim(),
          edad:  $("#edad1").val().trim(),
          email:  $("#email1").val().trim(),
          contrasena:  $("#contrasena1").val().trim(),
          telefono:  $("#telefono1").val().trim(),
          tipoUsuario:  $("#tipoUsuario1").val().trim(),
          controlador: 1
      	};

        $("#id1").val('');
        $("#nombre1").val('');
        $("#apellido1").val('');
        $("#nickname1").val('');
        $("#edad1").val('');
        $("#email1").val('');
        $("#contrasena1").val('');
        $("#telefono1").val('');
        $("#tipoUsuario1").val('Administrador');

      	$.ajax({
      		type: 'POST',
      		url: 'transacciones.php',
      		data: dataPost,
      		dataType: 'json'
      	})
      	.success(function(data){
      	   if( data.result != null )
              alert( data.result );
           else
              alert( "error al registrar." );
      	})
      	.error(function(data, error){
      		alert('La peticion no se completo por: ' + error);
      	});
      });
}

function bajas(){

        $("#darbaja").on('click', function(){
        	var dataPost = {
        		id: $("#id2").val().trim(),
            controlador: 2
        	};

          $("#id2").val('');

        	$.ajax({
        		type: 'POST',
        		url: 'transacciones.php',
        		data: dataPost,
        		dataType: 'json'
        	})
        	.success(function(data){
        	   if( data.result != null )
                alert( data.result );
             else
                alert( "error al eliminar." );
        	})
        	.error(function(data, error){
        		alert('La peticion no se completo por: ' + error);
        	});
        });
}

function cambios(){

        $("#boton_actualizar").on('click', function(){
        	var dataPost = {
        		valor: $("#modi").val().trim(),
            campo: $('#opcionCambio').val().trim(),
            controlador: 3
        	};

          $("#modi").val('');
          $('#opcionCambio').val('');

        	$.ajax({
        		type: 'POST',
        		url: 'transacciones.php',
        		data: dataPost,
        		dataType: 'json'
        	})
        	.success(function(data){
        	   if( data.result != null )
                alert( data.result );
             else
                alert( "error al actualizar." );
        	})
        	.error(function(data, error){
        		alert('La peticion no se completo por: ' + error);
        	});
        });
}

function prueba(){
  $("#boton_rentar").click(function(){
      $.post("test.php",
      {
        id_renta: $("#id_renta").val()
      },
      function(data,status){
          //alert("Data: " + data + "\nStatus: " + status);
            if( data == 1 )
              alert("peliculas rentadas :)");
            else
              alert("user no registrado...registralo primero");
      });
  });

}

function add_remove(){
   $("#listadas").on("click", "li", function(){
      $('#agregadas').append('<li id="'+ this.id +'" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;'+ this.id +'&nbsp;&nbsp;<span class="glyphicon glyphicon-minus-sign"></span></li>');
      $(this).remove();
   });

   $("#agregadas").on("click", "li", function(){
      $('#listadas').append('<li id="'+ this.id +'" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;'+ this.id +'&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>');
      $(this).remove();
   });
}

function getData(){
    $("#get").click(function () {
        var movies = new Array();
        $("#agregadas li").each(function (index) {
            movies[index] = $(this).attr('id');
            $(this).remove();
        });
        //alert( movies );
        var dataPost = {
      		peliculas: movies,
      		controlador: 4
      	};
      	$.ajax({
      		type: 'POST',
      		url: 'transacciones.php',
      		data: dataPost,
      		dataType: 'json'
      	})
        .success(function(data){
           if( data.result != null )
              alert( data.result );
           else
              alert( "error al rentar." );
        })
        .error(function(data, error){
          alert('La peticion no se completo por: ' + error);
        });
    });
}

function buscar(){
  $("#boton_buscar").click(function(){
      //if( $('#buscando').val().trim() == "" ){
        //alert("empty");
      //}
      //else{
        var dataPost = {
      		idBuscar: $("#buscando").val().trim(),
      		controlador: 5
      	};
      	$.ajax({
      		type: 'POST',
      		url: 'transacciones.php',
      		data: dataPost,
      		dataType: 'json'
      	})
        .success(function(data){
           if( data == "")
            alert("No registrado.");
           else if( data != null ){
             //alert(data[0].nombre + " " + data.length);

             var fila = "";
             for( i = 0 ; i < data.length ; i++ ){
               fila += "<tr class='info'>"+
                  "<td>"+ data[i].nombre + "</td>"+
                  "<td>"+ data[i].apellido + "</td>"+
                  "<td>"+ data[i].nickname + "</td>"+
                  "<td>"+ data[i].edad + "</td>"+
                  "<td>"+ data[i].email + "</td>"+
                  "<td>"+ data[i].telefono + "</td>"+
                  "<td>"+ data[i].tipo_usuario + "</td>"+
                  "<td>"+ data[i].monto + "</td>"+
                  "<td>"+ data[i].id + "</td>"+
                  "</tr>";
             }
             $('#tablass').html ("<thead><tr><th>Nombre</th><th>Apellido</th><th>Nickname</th><th>Edad</th><th>Email</th><th>Telefono</th><th>Tipo de Usuario</th><th>Monto</th><th>Id</th></tr></thead>"+
             "<tbody>" + fila + "</tbody>");
           }else
              alert( "error al buscar un usuario." );
        })
        .error(function(data, error){
          alert('La peticion no se completo por: ' + error);
        });
      //}
      $("#buscando").val('');
  });

}
