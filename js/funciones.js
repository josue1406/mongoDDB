$(document).ready(function(){
    alert("hola");
    $("#boton_rentar").click(function(){
        $.post("test.php",
        {
          id_renta: $("#id_renta").val()
        },
        function(data,status){
              if( data == 1 )
                alert("peliculas rentadas :)");
              else
                alert("user no registrado...registralo primero");
        });
    });

});
