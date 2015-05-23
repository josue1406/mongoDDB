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

    $('#btn-add').click(function(){
       $('#select-from option:selected').each( function() {
               $('#select-to').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
           $(this).remove();
       });
   });
   $('#btn-remove').click(function(){
       $('#select-to option:selected').each( function() {
           $('#select-from').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
           $(this).remove();
       });
   });

});
