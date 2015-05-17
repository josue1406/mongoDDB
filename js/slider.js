var timer = 1;
$(document).ready(function(){
    //cargar();
    galeria();
});

function galeria(){
    cargar();
    setTimeout("galeria()",3000);
    if( timer == 6) timer = 1;
}

function cargar(){
    $("#galeria").fadeTo(2500,1.0);
    switch( timer ){
      case 1: document.getElementById('galeria').innerHTML = "<img src='img/nature-photo.jpg'  />";  break;
      case 2: document.getElementById('galeria').innerHTML =  "<img src='img/nature-photo1.jpg'  />";break;
      case 3: document.getElementById('galeria').innerHTML =  "<img src='img/nature-photo2.jpg' />"; break;
      case 4: document.getElementById('galeria').innerHTML =  "<img src='img/nature-photo3.jpg' />"; break;
      case 5: document.getElementById('galeria').innerHTML =  "<img src='img/nature-photo4.jpg' />"; break;
    }$("#galeria").fadeOut();
   timer++;
}
